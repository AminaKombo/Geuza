<?php
/*
about.php

Describes the Geuza application


*/
?>
<a name="about"></a>

<hr />

<div class="grey-text"><!--text color div-->
    
    <div class="row"><!--row-->
        
        <div class="col s12 m6 l6"><!--column-->
        
            <h4>Geuza <sub>v<?php echo GEUZAVERSION;?></sub></h4>
            
            <p>is part of the "Kibarua" series, which will provide tools for freelancers who work on/with the web.</p>
            
            <p>This application is available <strong>free of charge</strong>, though that arrangement may change at any time.</p>
            
            <br />
            
            <div align="center">
                
                <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">
                    <img alt="Creative Commons License" style="border-width:0" 
                         src="https://i.creativecommons.org/l/by/4.0/88x31.png" />
                </a><br />
                
                This work is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/4.0/" target="_blank">Creative Commons Attribution 4.0 International License</a>
            
            </div>
            
            <br />
            
            <p align="right">Exchange rate data courtesy of <strong>Google&trade; Finance</strong></p>
            
            <hr />
            
            <h5>Installation/Where things are:</h5>
            
            <ol>
                <li>Download zip file from github.</li>
                <li>Extract it to a folder in your server.</li>
                <li>Edit settings in app/config/config.php</li>
                <li>Currencies are stored in app/data/currencies.json</li>
                <li>Important classes are in app/core</li>
                <li>Stylesheets are in public/css</li>
                <li>Javascript files are in public/js/</li>
            </ol>
            
        </div><!--column-->
        
        <div class="col s12 m6 l6"><!--column-->
            
            <h5>Tech used:</h5>
            
            <p>Your machine <a href="https://en.wikipedia.org/wiki/List_of_Apache%E2%80%93MySQL%E2%80%93PHP_packages" target="_blank">must run PHP</a>. Geuza does not use a local server-side database (yet).</p>
            
            <p><a href="https://getcomposer.org/" target="_blank">Composer</a> was used for autoloading. Not neccessary for the app if you want to use it differently.</p><br />
            
            <ul class="collection">
                <li class="collection-header"><h5>&nbsp; Server-side:</h5></li>
                <li class="collection-item">PHP7 (or any version compatible with PSR-4 autoloading. Also: cURL must be enabled.)</li><!--https://code.jquery.com/jquery-2.1.1.min.js-->
                <li class="collection-header"><h5>&nbsp; Client-side:</h5></li>
                <li class="collection-item">HTML5, CSS3, <a href="https://code.jquery.com/jquery-2.1.1.min.js" target="_blank">JQuery</a></li>
            </ul>
            
        </div>
        
    </div><!--row-->
    
</div><!--text color div-->
