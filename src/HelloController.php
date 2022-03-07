<?php

namespace App;

use App\Response;

class HelloController
{

    public function sayHello(){

       $name = $_GET['name'];
       $age = $_GET['age'];

       $response = new Response(
           "Hello ${name}, tu as ${age}",
           ['Content-Type' => 'application/json'],
           200
       );

       return $response;

    }

}