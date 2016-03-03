<?php
require 'localcore.inc.php';
require 'localconnect.inc.php';

if(!loggedin()){
		if(isset($_POST['username'],$_POST['password'],$_POST['repassword'],$_POST['firstname'],$_POST['lastname'])){
		  $username = mysql_real_escape_string($_POST['username']);
		  $password = mysql_real_escape_string($_POST['password']);
		  $repassword = mysql_real_escape_string($_POST['repassword']);
		  $firstname = mysql_real_escape_string($_POST['firstname']);
		  $lastname = mysql_real_escape_string($_POST['lastname']);
		  
			  if( !empty($username)&&!empty($password)&&!empty($repassword)&&!empty($firstname)&&!empty($lastname) ){
				   
					   if($password==$repassword){ //it will be == always in this case
						 
						 $query = "SELECT username FROM users WHERE username='$username'";
						 $query_run = mysql_query($query);
						 $query_num_rows = mysql_num_rows($query_run);
						 
							 if($query_num_rows!=1){
							 
							   $password_hash = md5($password);
							   
							    $query = "INSERT INTO users VALUES('','$username','$password_hash','$firstname','$lastname')   ";
							    $query_run = mysql_query($query); 
								 
								       if($query_run){
									   
									      echo 'Congratulation! you are now a registered member.';
									   
									        }else{
									   
									           echo 'Error occured. Try again after sometimes.';
									   
									             }
								 
								 
								 
							   
							    }else{
							 
							     echo 'This Username is not available.';
							 
							         }
						 
						 
						 
						 
						 
						 
						 
						  }else{ 
						   echo 'Password fields must match with eachother.';
						 }
				   
				 }else{
				   echo 'Please fill up all fields';
				 
				 }
			  
		  
		}

}else{

    echo 'You are already registered and logged in.';

  }


?>