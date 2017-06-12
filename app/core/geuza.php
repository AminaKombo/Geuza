<?php
/*
geuza.php

Class Geuza

Initiliazes system constants

Handles currency conversion

Saves conversion data

*/
namespace Geuza\Core;

class Geuza{
    
    var $from="";
    
    var $to="";
    
    var $amount=1;
    
    var $conversionData=array();
    
    /*
    __constructor()
    @param configFile -> system configuration file path
    initializes system constants
    sets conversionData attribute if previously-submitted form data has been saved
    */
    public function __construct($configFile){
        
        require($configFile);
        
        if(isset($_SESSION['jsend'])){
            
            $this->conversionData=$this->setConversionData();
        
        }//if
        
    }//constructor
    
    public function __destruct(){}//destructor
    
    
    /*
    convertCurrencies() 
    receives $_POSTed data, converts currencies
    */
    public function convertCurrencies(){
        
        //save submitted form data
        $_SESSION['grecover']['from']=$_POST['from'];
        
        $_SESSION['grecover']['to']=$_POST['to'];
        
        $_SESSION['grecover']['amount']=$_POST['amount'];
        
        $this->from=urlencode($_POST['from']);
        
        $this->to=urlencode($_POST['to']);
        
        $this->amount=$_POST['amount'];
        
        if($_POST['to']!==$_POST['from']){
            
            //call finance script, receive exchange rate data
            $get=file_get_contents(FINANCEURL."?a=".$this->amount."&from=".$this->from."&to=".$this->to);

            $get=explode("<span class=bld>",$get);

            if(isset($get[1])){//format returned exchange rate data

                $get=explode("</span>",$get[1]);

                $rate = preg_replace("/[^0-9\.]/", null, $get[0]);

                $converted_amount = $rate;

            }//if
            else{
            
                $rate=0;

                $converted_amount=0;

            }//else
            
        }//if
        if($_POST['to']===$_POST['from']){//no conversion between same currency
            
            $rate=1;
            
            $converted_amount=1;
            
        }//if
        
        
        $data = array( 'rate' => $rate, 
                        'converted_amount' =>$converted_amount, 
                        'from_Currency' => strtoupper($this->from), 
                        'to_Currency' => strtoupper($this->to)
                    );

        $_SESSION['jsend']['from']=$this->from;

        $_SESSION['jsend']['to']=$this->to;

        $_SESSION['jsend']['amount']=$_POST['amount'];

        $_SESSION['jsend']['converted_amount']=$converted_amount;

        $_SESSION['jsend']['rate']=$rate;
                                 
        $this->setConversionData=$data;
        
    }//convertCurrencies
    
    /*
    setConversionData()
    @param mixed[] data -> array of currency conversion information
    @return mixed[] data -> array of (recovered) currency conversion information
    */
    private function setConversionData($data=null){
        
        if(isset($_SESSION['jsend'])){
            
            $data['rate']=$_SESSION['jsend']['rate'];
            
            $data['from_Currency']=$_SESSION['jsend']['from'];
            
            $data['to_Currency']=$_SESSION['jsend']['to'];
            
            $data['converted_amount']=$_SESSION['jsend']['converted_amount'];
            
            $this->amount=$_SESSION['jsend']['amount'];
            
        }//if
        
        return $data;
        
    }//setConversionData
    
}//geuza
