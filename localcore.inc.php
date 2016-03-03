<?php
ob_start();
session_start();
$script_name = $_SERVER['SCRIPT_NAME'];

if(isset($_SERVER['HTTP_REFERER'])){

$http_referer = $_SERVER['HTTP_REFERER'];

}

function loggedin(){

		if(isset($_SESSION['user_id'])){
            return true;

		}else{
            return false;

		}

}

 function getuserfields($field){/*parameter of a new created function must be variable , that is why $field instead of field as it is php.
                                in javascript we wouldn't need $ sign for variable*/
	 
	 $query = "SELECT `$field` FROM `users` WHERE `id`='".$_SESSION['user_id']."'";
	 if($query_run = mysql_query($query)) {
		 
		 if($query_result = mysql_result($query_run,0,$field)){ //here $field is still a variable so we do $field , instead of '$field'
			 
			 return $query_result;
			 
			 
			 }
		 
		 
		 
		 }
	 
	 
	 }



?>