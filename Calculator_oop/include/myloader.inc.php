<?php

spl_autoload_register('myLoader');

 function myLoader($classname){
     $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];


     $path = '/Applications/MAMP/htdocs/Calculator_oop/classes/';
     $extension = ".class.php";
     $fullpath = $path . $classname . $extension;
     require_once $fullpath;

 }



