<?php

# get correct id for plugin
$thisfile=basename(__FILE__, ".php");
 
# register plugin
register_plugin(
	$thisfile, //Plugin id
	'snow on the website', 	//Plugin name
	'1.0', 		//Plugin version
	'multicolor',  //Plugin author
	'https://multicolor.stargard.pl', //author website
	'snow on the website', //Plugin description
	'plugins', //page type - on which admin tab to display
	'snowSettings'  //main function
);
 
add_action( 'plugins-sidebar', 'createSideMenu', array( $thisfile, 'Snow.js author and donation' ) );


register_script('snowjs', $SITEURL.'plugins/snow/js/snow.js', '0.1', FALSE);
queue_script('snowjs',GSFRONT); 

register_script('snowjscustom', $SITEURL.'plugins/snow/js/custom.js', '0.1', FALSE);
queue_script('snowjscustom',GSFRONT); 

function snowSettings(){
 echo '<div style="width:100%;background:#fafafa;border:solid 1px #ddd;border-radius:4px;padding:10px;text-align:center;">author script <a href="https://github.com/kurisubrooks/snow.js" target="_blank">github.com/kurisubrooks/snow.js</a></div>';
 echo'<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" style="display:grid; width:100%;grid-template-columns:1fr auto; padding:10px;">
    <p style="margin:0;padding:0;">If you want to support my work for GS community via PayPal :) Thanks!</p>
    <input type="hidden" name="cmd" value="_s-xclick" />
    <input type="hidden" name="hosted_button_id" value="KFZ9MCBUKB7GL" />
    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
    <img alt="" border="0" src="https://www.paypal.com/en_PL/i/scr/pixel.gif" width="1" height="1" />
</form>';};


?>