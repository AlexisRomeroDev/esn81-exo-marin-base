<?php

namespace Test;

use App\HelloController;
use App\PositionController;
use PHPUnit\Framework\TestCase;

require __DIR__ . '/../vendor/autoload.php';

class PositionControllerTest extends TestCase
{

    public function getTwig()
    {
        $loader = new \Twig\Loader\FilesystemLoader('templates');
        $twig = new \Twig\Environment($loader, ['cache' => false, 'debug' => true]);
        return $twig;
    }

    public function test_coord_are_displayed()
    {

        $_GET['latitude'] = '1';
        $_GET['longitude'] = '2';

        $controller = new PositionController($this->getTwig());

        $response = $controller->run();

        $this->assertStringContainsString("Latitude : 1", $response->getContent());
        $this->assertStringContainsString("Longitude : 2", $response->getContent());

        $this->assertEquals(200, $response->getStatusCode());

        $content_type = ($response->getHeaders())['Content-Type'] ?? null;

        $this->assertEquals('text/html', $content_type);
    }

    public function test_North_hemisphere_is_determinated()
    {
        $_GET['latitude'] = '1';
        $_GET['longitude'] = '1';

        $controller = new PositionController($this->getTwig());

        $response = $controller->run();

        $this->assertStringContainsString("Hémisphère : Nord", $response->getContent());
    }

    public function test_South_hemisphere_is_determinated()
    {
        $_GET['latitude'] = '-1';
        $_GET['longitude'] = '1';

        $controller = new PositionController($this->getTwig());

        $response = $controller->run();

        $this->assertStringContainsString("Hémisphère : Sud", $response->getContent());
    }
}
