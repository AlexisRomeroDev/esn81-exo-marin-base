<?php

namespace Test;

use App\HelloController;
use PHPUnit\Framework\TestCase;

class HelloControllerTest extends TestCase
{

    public function test_name_is_displayed(){
        $this->assertEquals(1,1);
    }

    public function test_hello(){

        $_GET['name'] = "Alex";

        $controller = new HelloController();

        $response = $controller->sayHello();

        $this->assertEquals("Hello Alex", $response->getContent());

        $this->assertEquals(200, $response->getStatusCode());

        $content_type = ($response->getHeaders())['Content-Type'] ?? null;

        $this->assertEquals('application/json', $content_type);

    }

}