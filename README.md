# Geuza v1.2.beta
Currency converter in PHP

Exchange rate data courtesy of <strong>Google&trade; Finance</strong>
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

#
	Tech used:
	Your machine must run PHP. Geuza does not use a local server-side database (yet).
	Composer was used for autoloading. Not neccessary for the app if you want to use it differently.
	
	Server-side: PHP7 (or any version compatible with PSR-4 autoloading. Also: cURL must be enabled.)
	Client-side: HTML5, CSS3, JQuery
