<?php

namespace App\Exceptions;

use http\Client\Request;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\AuthenticationException;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;
use Illuminate\Validation\ValidationException;
use Jiannei\Response\Laravel\Support\Traits\JsonResponseTrait;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException;
use Throwable;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;

/**
 * 异常处理
 */
class ExceptionReport
{
    use JsonResponseTrait;

    /**
     * @var Throwable
     */
    public $exception;

    /**
     * @var Request
     */
    public $request;

    function __construct(Request $request, Throwable $exception)
    {
        $this->request = $request;
        $this->exception = $exception;
    }

    /**
     * 当抛出这些异常时，可以使用我们定义的错误信息与HTTP状态码
     * @var array[]
     */
    public $doReport = [
        AuthenticationException::class       => ['未授权', 401],
        ModelNotFoundException::class        => ['该模型未找到', 404],
        AuthorizationException::class        => ['没有此权限', 403],
        ValidationException::class           => ['参数校验失败', 401],
        UnauthorizedHttpException::class     => ['未登录或登录状态失效', 422],
        TokenInvalidException::class         => ['token不正确', 400],
        NotFoundHttpException::class         => ['没有找到该页面', 404],
        MethodNotAllowedHttpException::class => ['访问方式不正确', 405],
        QueryException::class                => ['数据库参数错误', 401],
    ];

    /**
     * 注册一个自定义异常处理
     * @param $className
     * @param callable $callback
     * @return void
     */
    public function register($className, callable $callback): void
    {
        $this->doReport[$className] = $callback;
    }

    /**
     * 判断是否需要返回错误信息
     * @return bool
     */
    public function shouldReturn(): bool
    {
        foreach (array_keys($this->doReport) as $report) {
            if ($this->exception instanceof $report) {
                $this->report = $report;
                return true;
            }
        }

        return false;
    }

    /**
     * 创建一个异常报告实例
     * @param Throwable $e
     * @return static
     */
    public static function make(Throwable $e): self
    {
        return new static(\request(), $e);
    }

    /**
     * 错误信息
     * @return \Illuminate\Http\JsonResponse
     */
    public function report(): \Illuminate\Http\JsonResponse
    {
        if ($this->exception instanceof ValidationException) {
            $error = [];
            foreach ($this->exception->errors() as $e) {
                foreach ($e as $item) {
                    $error[] = $item;
                }
            }
            return $this->failed(implode(',', $error), $this->doReport[$this->report][1]);
        }
        $message = $this->doReport[$this->report];
        return $this->fail($message[0], $message[1]);
    }

    /**
     * 生产环境错误信息
     * @return \Illuminate\Http\JsonResponse
     */
    public function prodReport(): \Illuminate\Http\JsonResponse
    {
        return $this->fail('服务器错误', '500');
    }
}
