<?php

// Autoloader function
function my_autoloader($class) {
    // var_dump($class);
    $base_dir = __DIR__.'/' ; // not needed though
    $file = $base_dir . str_replace('\\', '/', $class) . '.php';
    if (file_exists($file)) {
        require_once $file;
    }
}

// Register the autoloader
spl_autoload_register('my_autoloader');