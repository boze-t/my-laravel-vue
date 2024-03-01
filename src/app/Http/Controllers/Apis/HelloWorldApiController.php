<?php

namespace App\Http\Controllers\Apis;

use App\Http\Controllers\Controller;
use App\Http\Responses\HelloWorldResource;

class HelloWorldApiController extends Controller
{
    public function __invoke()
    {
        return new HelloWorldResource([
            'hello' => 'hello',
        ]);
    }
}
