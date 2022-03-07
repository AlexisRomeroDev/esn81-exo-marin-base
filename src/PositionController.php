<?php

namespace App;

use App\Point;
use App\Response;

class PositionController
{

    public function displayForm(){

        if(isset($_REQUEST['latitude']) && isset($_REQUEST['longitude'])) {
            $position = new Point($_REQUEST['latitude'], $_REQUEST['longitude']);
            $template = 'result.php';
        } else {
            $template = 'form.php';
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