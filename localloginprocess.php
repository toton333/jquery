<?php
require 'localcore.inc.php'; //need it because it is generating session variable $_SESSION['user_id'] = $player_id; which we use to check localloginform.php is in session or not
require 'localconnect.inc.php'; //need it becasue SQL query runs here.




		if(isset($_POST['username'],$_POST['password'])){

		  $username = mysql_real_escape_string($_POST['username']);
		  $password = mysql_real_escape_string($_POST['password']);
		 
			 if(!empty($username)&&!empty($password)){
			    $password_hash = md5($password);
				
				$query = "SELECT id FROM users WHERE username='$username' AND password_hash='$password_hash' ";
				     if($query_run = mysql_query($query)){
					    $query_num_rows = mysql_num_rows($query_run);
						   if($query_num_rows==1){
						   
						     $player_id = mysql_result($query_run,0,'id');
							 
							 $_SESSION['user_id'] = $player_id;
							 echo 'login successful'; //we can not use return true; here , cause if login is not successful this file can't generate any data to send back to ajax handling file(selectors.js)
							 
							 /* we can't redirect the http requesting file (localloginform.php) to some other file using header() function here.
							    cause this file just sends back data  nothing else ,which must be accepted and used by http requesting file.
								To redirect http requesting file(localloginform.php)to someother file we must first send data of this file to ajax handling file (selectors.js)
								and then use document.location='file name(localindex.php)'; there.								
							*/
							 
						       }else{
							   
							   echo 'Combination of username and password does not match.';
							   }
						
						
					 }else{
					 
					 echo 'error';
					 }
				
			 
				 }else{
			      
			       echo 'All fields required.';
			 
					  }

		}



?>