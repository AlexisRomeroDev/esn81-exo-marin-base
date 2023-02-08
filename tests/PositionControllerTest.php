<?php

namespace Test;

use App\HelloController;
use App\PositionController;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class PositionControllerTest extends TestCase
{
    private $twig;

    /**
     * @before
     */
    public function getTwig()
    {
        // Doc : http://www.phpunit.cn/manual/6.3/en/appendixes.annotations.html#appendixes.annotations.before
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $this->twig = new \Twig\Environment($loader, ['cache' => false, 'debug' => true]);
    }

    public function test_coord_are_displayed()
    {

        // Partie 1 : Le contexte

        $_GET['latitude'] = '1';
        $_GET['longitude'] = '2';

        $controller = new PositionController($this->twig);
        $response = $controller->run();

        // Partie 2 : Les assertions

        $this->assertStringContainsString("Latitude : 1", $response->getContent());
        $this->assertStringContainsString("Longitude : 2", $response->getContent());
    }

    public function test_North_hemisphere_is_determinated()
    {

        // Partie 1 : Le contexte

        $_GET['latitude'] = '1';
        $_GET['longitude'] = '1';

        $controller = new PositionController($this->twig);
        $response = $controller->run();

        // Partie 2 : Les assertions

        $this->assertStringContainsString("Hémisphère : Nord", $response->getContent());
    }

    public function test_South_hemisphere_is_determinated()
    {
        // Partie 1 : Le contexte

        $_GET['latitude'] = '-1';
        $_GET['longitude'] = '1';

        $controller = new PositionController($this->twig);
        $response = $controller->run();

        // Partie 2 : Les assertions

        $this->assertStringContainsString("Hémisphère : Sud", $response->getContent());
    }
}
