<?php

require 'core.inc.php';
require 'connect.inc.php';

if(loggedin()){ 
	
 echo getuserfield('email').'<br/>';?>
	 
	'you\'r logged in.<br/> To log out click here -><a href="logout.php">Log Out</a>' ;
	
	
	
	
<?php	}else{
       include 'loginform.inc.php';
	}
	
?>