<?php


namespace Test;


use App\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{

    public function test_Hemisphere_is_determined()
    {

        // Partie 1 : Le contexte

        $pointA =  new Point(1, 1);
        $pointB =  new Point(-1, 1);

        // Partie 2 : Les assertions

        $this->assertTrue($pointA->isNorth());
        $this->assertTrue(!$pointB->isNorth());
    }
}
