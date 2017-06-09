<?php
/*
currency_convert.php

Currency conversion form

Calls actions in geuza.js, default to usual function if jquery/javascript is not working

*/

//declare a new currencyModel
$currencyModel=new \Geuza\Core\CurrencyModel();

//set default amount to 1
$amount=1;

if(isset($_SESSION['grecover']['amount'])){//set from saved form data
    
    $amount=floatval($_SESSION['grecover']['amount']);

}//if

//set default currency
$from=DEFAULTCURRENCY;

if(isset($_SESSION['grecover']['from'])){//set from saved form data
    
    $from=$_SESSION['grecover']['from'];

}//if

//no default 'to' currency
$to="";

if(isset($_SESSION['grecover']['to'])){//set from saved form data
    
    $to=$_SESSION['grecover']['to'];

}//if

//page anchor is #hustle
?>
<form method="post" action="#hustle">
    
    <div class="row"><!--row-->
        
        <div class="col s12 m3 l3"><!--column-->
            
            <label for="amount">Amount</label>
            
            <input type="number" min="<?php echo MINIMUMAMOUNT;?>" step="<?php echo STEP;?>" 
                   name="amount" id="amount" value="<?php echo $amount;?>" required/>
            
        </div><!--column-->
        
        <div class="col s12 m3 l3"><!--column-->
            
            <label for="from">From</label>
            
            <select name="from" id="from" class="browser-default">
            <?php //loop through and display currency data
                
                foreach($currencyModel->currencies as $currency){
                    
                    echo "<option value='".$currency->code."' ";
                    
                    if($currency->code==$from){//set selected currency
                        
                        echo "selected='selected'";
                        
                    }//if
                    
                    echo ">".$currency->name."</option>";
                    
                }//foreach
            ?>
            </select>
            
        </div><!--column-->
        
        <div class="col s12 m3 l3"><!--column-->
            
            <label for="to">To</label>
            
            <select name="to" id="to" class="browser-default">
            <?php //loop through and display currency data
                
                foreach($currencyModel->currencies as $currency){
                    
                    echo "<option value='".$currency->code."' ";
                    
                    if($currency->code==$to){//set selected currency
                        
                        echo "selected='selected'";
                        
                    }//if
                    
                    echo ">".$currency->name."</option>";
                }//foreach
                
            ?>
            </select>
            
        </div><!--column-->
        
        <div class="col s12 m3 l3" align="center">
            
            <label>Convert/Swap</label><br />
            
            <button class="btn blue waves-effect waves-light" type="submit" name="geuza" value="normal">
                
                <i class="material-icons">swap_calls</i>
                
            </button>
            
            <button class="btn white waves-effect waves-light black-text" type="submit" name="geuza" value="swapped">
                
                <i class="material-icons">swap_horiz</i>
                
            </button>
        
        </div><!--column-->
        
    </div><!--row-->
    
</form>
