<?php

spl_autoload_register('myauto');

function myauto($class)
{
    $path = "classes/";
    $fullPath = $path . $class . '.php';

    include_once $fullPath;
}

?>