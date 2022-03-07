<?php


namespace Test;


use App\Point;
use PHPUnit\Framework\TestCase;

class PointTest extends TestCase
{

    public function test_Hemisphere_is_determined(){

        $point =  new Point(1,1);

        $this->assertTrue($point->isNorth());

        $point =  new Point(-1,1);

        $this->assertTrue(!$point->isNorth());

    }

}