<?php
/*
config.php

Defines important app constants for Geuza


@const GEUZALINK -> link to main application. Change it to your own.
*/
if(!defined('GEUZALINK')){
    
    define('GEUZALINK',"http://localhost/your/path/here/");
    
}//if

/*
@const GEUZAVERSION -> version of current Geuza distro.
If you remove this, edit the text in app/pages/about and in app/pages/footer.php
*/
if(!defined('GEUZAVERSION')){
    
    define('GEUZAVERSION','1.3 (stable)');

}//if

/*
@const APPTITLE -> title of application
If you remove this, edit the <title> tag in index.php
*/
if(!defined('APPTITLE')){
    
    define('APPTITLE','Geuza');

}//if

/*
@const FINANCEURL -> URL of exchange rate website
Required for the application to work.
*/
if(!defined('FINANCEURL')){
    
    define('FINANCEURL','https://www.google.com/finance/converter');
    
}//if

/*
@const CURRENCYDATAFILE -> source of currency data
Required. You may edit this, as long as it's a json file.
For non-json files, edit app/core/currencymodel.php and app/forms/currency_convert.php
*/
if(!defined('CURRENCYDATAFILE')){
    
    define('CURRENCYDATAFILE',"app".DS."data".DS."currencies.json");
    
}//if

/*
@const DEFAULTCURRENCY -> default currency code of application
Required. Removing this will throw errors in app/pages/stage.php
*/
if(!defined('DEFAULTCURRENCY')){
    
    define('DEFAULTCURRENCY','KES');

}//if

/*
@const DECIMALS -> number of decimal places to display for conversion
Required. Removing this will throw errors in conversion forms
*/
if(!defined('DECIMALS')){
    
    define('DECIMALS',3);

}//if

/*
@const MINIMUMAMOUNT -> the least amount to compare against
Required. Removing this will throw errors in conversion forms
*/
if(!defined('MINIMUMAMOUNT')){
    
    define('MINIMUMAMOUNT',0.01);

}//if

/*
@const STEP -> value to increment in the 'amount' inut field
Required. Removing this will throw errors in conversion forms
*/
if(!defined('STEP')){
    
    define('STEP',0.01);

}//if

/*
@const COPYRIGHTINFO -> may be changed to your information
If you remove this, edit app/pages/footer.php
*/
if(!defined('COPYRIGHTINFO')){
    
    define('COPYRIGHTINFO','&copy; '.date("Y").' Amina Kombo');

}//if

/*
@const DOWNLOADLINK -> link to Geuza download file. Keep it as it, or change it to your own.
If you remove this, edit app/pages/header.php and app/pages/footer.php
*/
if(!defined('DOWNLOADLINK')){
    
    define('DOWNLOADLINK',"https://github.com/AminaKombo/Geuza/archive/master.zip");

}//if