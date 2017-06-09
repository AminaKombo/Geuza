<?php
/*
swap_conversion.php

Reverse 'to' and 'from' currencies

*/
?>
<form method="post" action="#hustle">
    
    <input type="hidden" name="amount" value="<?php echo $app->amount;?>" />
    
    <input type="hidden" name="from" value="<?php echo $toCode;?>" />
    
    <input type="hidden" name="to" value="<?php echo $fromCode;?>"/>
    
    <button type="submit" class="btn btn-large white black-text" name="geuza" title="swap" value="swapped">
        
        <i class="material-icons md-48">swap_horiz</i>
        
    </button>
    
</form>
