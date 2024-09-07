<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Jiannei\Response\Laravel\Support\Traits\JsonResponseTrait;

class Controller extends BaseController
{
    use JsonResponseTrait, ValidatesRequests;
}
