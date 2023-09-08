<?php
    
    namespace Contracts;

    interface Shape2D{
        public function perimeter(): float;
        public function area():float;
    }