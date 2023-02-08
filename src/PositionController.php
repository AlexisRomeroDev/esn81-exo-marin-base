<?php

namespace App;

use App\Point;
use App\Response;
use Twig\Environment;

class PositionController
{

    private Environment $twig;

    public function __construct($twig)
    {

        $this->twig = $twig;
    }

    public function run()
    {

        if (isset($_GET['latitude']) && isset($_GET['longitude'])) {

            try {

                $position = new Point($_GET['latitude'], $_GET['longitude']);

                $content = $this->twig->render('result.html.twig', ['position' => $position]);
            } catch (\Exception $e) {

                $error = $e->getMessage();

                $content = $this->twig->render('form.html.twig', ['error' => $error]);
            }
        } else {

            $content = $this->twig->render('form.html.twig');
        }

        $response = new Response(
            $content,
            ['Content-Type' => 'text/html'],
            200
        );

        return $response;
    }
}
