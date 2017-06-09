<?php 
/*
index.php

where all application files interact

*/
if(!isset($_SESSION)){//start session if one isn't active
    
    @session_start();
    
}//if

if(!defined('DS')){//define constant
    
    define('DS',DIRECTORY_SEPARATOR);
    
}//if

//include autoload file
require_once(__DIR__.DS."vendor".DS."autoload.php");

//declare new Geuza object
$app=new \Geuza\Core\Geuza("app".DS."config".DS."config.php");

//if form has been submitted, convert currencies
if(isset($_POST['geuza'])){
            
    $app->convertCurrencies();
            
}//if
?>

<!DOCTYPE html>

<html lang="en">
    
    <head>
        
        <title><?php echo APPTITLE;?></title>
        
        <link rel="icon" href="<?php echo GEUZALINK;?>public/img/favicon.jpg" type="image/icon"/>
        
        <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        
        <link type="text/css" rel="stylesheet" href="<?php echo GEUZALINK;?>public/css/materialize.min.css"  media="screen,projection"/>

        <link type="text/css" rel="stylesheet" href="<?php echo GEUZALINK;?>public/css/geuza.css" />

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
    </head>
    
    <body>
        
        <?php include "app".DS."pages".DS."header.php";?>
        
        <a name="hustle"></a>
        
        <div class="row grey lighten-3"><!--row-->
            
            <div class="col m2 l2 hide-on-med-and-down">&nbsp;</div><!--column-->
            
            <div class="col s12 m8 l8 grey lighten-4">
                
                <div class="stage-div" id="stage-div" align="center" title="this is a demo">
                    
                    <?php include "app".DS."pages".DS."stage.php"; ?>
                    
                </div>
                
                <hr />
                
                <div id="calc-div" class="action-div">
                    
                    <?php include "app".DS."forms".DS."currency_convert.php";?>
                    
                </div>
                
                <?php include "app".DS."pages".DS."about.php";?>
                
            </div><!--column-->
            
            <div class="col m2 l2 hide-on-med-and-down">&nbsp;</div><!--column-->
            
        </div><!--row-->
        
        <!--hidden fields for javascript use--->
        <input type="hidden" id="minamt" value="<?php echo MINIMUMAMOUNT;?>" />
        
        <input type="hidden" id="phplink" value="<?php echo GEUZALINK."app/";?>" />
        
        <?php include "app".DS."pages".DS."footer.php";?>

        <!---javascript files---->
        <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        
        <script type="text/javascript" src="<?php echo GEUZALINK;?>public/js/materialize.min.js"></script>
        
        <script type="text/javascript" src="<?php echo GEUZALINK;?>public/js/geuza.js"></script>

    </body>
    
</html>