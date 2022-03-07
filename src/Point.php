<?php


namespace App;

class Point {

    public $latitude;
    public $longitude;

    public function __construct($latitude, $longitude){

        $this->latitude = $latitude;
        $this->longitude = $longitude;

    }

    public function print(){

        echo "lat:" . $this->latitude . "; lon:" . $this->longitude;

    }

    public function isNorth(){
        return $this->latitude > 0 ;
    }


}

