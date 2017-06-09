<?php
/*
currencymodel.php

class CurrencyModel

System's data model

Reads JSON data from app/data/currencies.json

Does NOT contain exchange rates

*/
namespace Geuza\Core;

class CurrencyModel{
    
    var $currencies;
    
    public function __construct(){
       
        $this->currencies=$this->getCurrencies();
        
    }//constructor
    
    public function __destruct(){}//destructor
    
    private function getCurrencies(){
        
        $data=file_get_contents(CURRENCYDATAFILE);
        
        $currencies=json_decode($data);
        
        return $currencies;
        
    }//getCurrencies
    
}//CurrencyModel