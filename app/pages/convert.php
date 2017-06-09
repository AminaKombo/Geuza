<?php
/*
convert.php

Script receives data from $.ajax(){} geuza.js
If javascript/jquery is not enabled, this script will never be called.
*/

@session_start();

if(isset($_POST['jsend'])){
    
    //define DS-> directory separator constant
    
    if(!defined('DS')){
        
        define('DS',DIRECTORY_SEPARATOR);
    
    }//if
    
    //autoloader file
    require_once("..".DS."..".DS."vendor".DS."autoload.php");
    
    //declare new 'Geuza' object
    $app=new \Geuza\Core\Geuza("..".DS."config".DS."config.php");
    
    //call conversion method
    $app->convertCurrencies();
    
    echo "ok";//send output to geuza.js function submitConversion()
    
}//if