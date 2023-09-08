<?php

    namespace Shapes;   
    // require_once "../autoloader.php";

    use Contracts\Shape3D;

    class Cube implements Shape3D{
        private $side;

        function __construct($side){
            $this->side = $side;
        }
        
        public function surfaceArea(): float
        {
            return $this->side * 6;
        }

        public function volume(): float
        {
            return $this->side * $this->side * $this->side;
        }
    }