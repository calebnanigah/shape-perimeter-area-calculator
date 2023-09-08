<?php
namespace Shapes;
// require_once "../autoloader.php";

use Contracts\Shape2D;

class Rectangle implements Shape2D{
    private $length;
    private $width;

    function __construct($length, $width){
        $this->length = $length;
        $this->width = $width;
    }
     
    public function perimeter(): float
    {
        return ($this->length + $this->width) * 2;
    }

    public function area(): float
    {
        return ($this->length * $this->width);
    }
}