<?php

namespace App;

use App\Point;
use App\Response;

class PositionController
{

    public function displayForm(){

        $template = 'form.php';

        if(isset($_GET['latitude']) && isset($_GET['longitude'])) {
            try{
                $position = new Point($_GET['latitude'], $_GET['longitude']);
                $template = 'result.php';
            }catch(\Exception $e){
                $error = $e->getMessage();
            }

        }

        ob_start();
        $path = 'templates/'.$template;
        require($path);
        $content = ob_get_contents();
        ob_end_clean();

       $response = new Response(
           $content,
           ['Content-Type' => 'text/html'],
           200
       );

       return $response;

    }

}