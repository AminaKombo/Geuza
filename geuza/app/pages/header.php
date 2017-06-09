<?php
/*
header.php

application/page header

*/
?>

<div class="row blue darken-4 white-text footer"><!--row-->
    
    <div class="col m2 l2 hide-on-med-and-down">&nbsp;</div><!--column-->
    
    <div class="col s12 m8 l8 blue darken-3" align="center"><!--column-->
        
        <div class="">
            
            <div class="row img-row">
                <div class="col s12 m3 l3">&nbsp;</div>
                <div class="col s12 m6 l6">
                    
                    <img src="<?php echo GEUZALINK;?>public/img/logo.png"  class="responsive-img"/>
                    
                </div>
                <div class="col s12 m3 l3">&nbsp;</div>
            </div>
            
            <?php include "app".DS."pages".DS."menu.php";?>
            
        </div><!--content-->
        
    </div><!--column-->
    
    <div class="col m2 l2 hide-on-med-and-down">&nbsp;</div><!--column-->
    
</div><!--row-->