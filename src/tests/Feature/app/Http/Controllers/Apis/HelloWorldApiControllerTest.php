<?php

namespace Tests\Feature\App\Http\Controllers\Apis;

use Tests\TestCase;

class HelloWorldApiControllerTest extends TestCase
{
    public function test_HelloWorldAPI_正常()
    {
        $response = $this->get(route('hello'));
        $response->assertJson([
            'data' => [
                'hello' => 'hello',
            ],
        ]);
    }
}
