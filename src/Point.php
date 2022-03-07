<?php


namespace App;

class Point {

    public $latitude;
    public $longitude;

    public function __construct($latitude, $longitude){

        if(!is_numeric($latitude)|| !is_numeric($longitude)){
            throw new \Exception("Veuillez renseigner des valeurs numériques");
        }

        if($latitude > 90 || $latitude < -90){
            throw new \Exception("Latitude incorrecte");
        }

        if($longitude > 360 || $longitude < -360){
            throw new \Exception("Longitude incorrecte");
        }

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

