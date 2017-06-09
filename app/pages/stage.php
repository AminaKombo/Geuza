<?php
/*
stage.php

displays currency conversion data

*/
if(!isset($_SESSION)){//start a session if one hasn't began
    
    session_start();

}//if

$prefix="";//for configuration file path

if(isset($_SESSION['jsend']) && !defined('DEFAULTCURRENCY')){//form has been loaded from geuza.js
    
    if(!defined('DS')){
        
        define('DS',DIRECTORY_SEPARATOR);

    }//if
    
    $prefix="..".DS."..".DS;
    
    //require autoload file
    require_once($prefix."vendor".DS."autoload.php");
    
    //declare new Geuza object
    $app=new \Geuza\Core\Geuza("..".DS."config".DS."config.php");
    
}//if

$fromCode=DEFAULTCURRENCY;

if(isset($app->conversionData['from_Currency'])){//set from saved data
    
    $fromCode=$app->conversionData['from_Currency'];
    
}//if

$toCode="(Pick a currency, any currency.)";

if(isset($app->conversionData['to_Currency'])){//set from saved data
    
    $toCode=$app->conversionData['to_Currency'];
    
}//if

$convertedAmount=0;

if(isset($app->conversionData['converted_amount'])){//set from saved data
    
    $convertedAmount=$app->conversionData['converted_amount'];
    
}//if
?>
<div class="row ge-row"><!--row-->
    
    <div class="col s12 m5 l5"><!--column-->
        
        <div class="ge-amount" id="amount-div"><!--shows amount-->
            
            <?php echo $app->amount;?>
            
        </div>
        
        <div class="ge-currency" id="from-curr-div"><!--shows 'from' currency code-->
            
            <?php echo $fromCode;?>
            
        </div>
        
    </div><!--column-->
    
    <div class="col s12 m2 l2 grey-text indicator" align="center"><!--column-->
        
        <i class="material-icons md-24">compare_arrows</i>
    
    </div><!--column-->
    
    <div class="col s12 m5 l5"><!--column-->
        
        <div class="ge-amount" id="result-div"><!--shows 'converted amount'-->
            
            <?php echo number_format($convertedAmount,DECIMALS);?>
            
        </div>
        
        <div class="ge-currency" id="to-curr-div"><!--shows 'to' currency code-->
            
            <?php echo $toCode;?>
            
        </div>
        
    </div><!--column-->
    
</div><!--row-->
 