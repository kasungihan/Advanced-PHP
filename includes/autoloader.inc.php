<?php

spl_autoload_register('myAutoloader'); //when class call some where else automatically grap

function myAutoloader($className)
{
    $path = "classes/";

    $extension = ".class.php";

    $fullPath = $path . $className . $extension;

    include_once $fullPath;


}