<?php

namespace App\Exceptions;

use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Jiannei\Response\Laravel\Support\Traits\ExceptionTrait;
use Throwable;

class Handler extends ExceptionHandler
{
    use ExceptionTrait;

    /**
     * The list of the inputs that are never flashed to the session on validation exceptions.
     *
     * @var array<int, string>
     */
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    /**
     * Register the exception handling callbacks for the application.
     */
    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $e)
    {
        if (env('APP_DEBUG')) {
            // 开发环境，显示详细报错信息
            return parent::render($request, $e);
        }

        $reporter = ExceptionReport::make($e);
        if ($reporter->shouldReturn()) {
            return $reporter->report();
        }

        return $reporter->prodReport();
    }
}
