<?php 
namespace Shapes;
use Contracts\Shape2D;

// require_once "../autoloader.php";

class Circle implements Shape2D{
    const PI = 3.1415926535898;
    private $radius;

    function __construct($radius){
        $this->radius = $radius;
    }
    
    public function perimeter(): float
    {
        return $this->radius * self::PI * 2;
    }

    public function area(): float
    {
        return $this->radius * $this->radius * self::PI;
    }
}

// Test
// $circle = new Circle(23);
// echo $circle->perimeter();