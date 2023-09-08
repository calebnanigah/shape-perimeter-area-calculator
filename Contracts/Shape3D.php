<?php
    
    namespace Contracts;

    interface Shape3D{
        public function surfaceArea():float;
        public function volume():float;
    }