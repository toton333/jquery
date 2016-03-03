<?php
 
  
if(isset($_POST['username'])&&isset($_POST['password'])) {
   $username = $_POST['username'];
   $password = $_POST['password'];
   $password_hash = md5($password);
   
    if(!empty($username)&&!empty($password)) {
	   $query = "SELECT `id` FROM `players` WHERE `active`='1' AND  `username`='".mysql_real_escape_string($username)."' AND `password`='".mysql_real_escape_string($password_hash)."'";
	   
	  if( $query_run = mysql_query($query)) {
	     $query_num_rows = mysql_num_rows($query_run);
	      if($query_num_rows==0) {
	           echo 'Invalid Username or Password.';
	   
	       }else if($query_num_rows==1) {
		   
		     $player_id = mysql_result($query_run, 0 , 'id');
			 
			 $_SESSION['player_id'] = $player_id;
			 header('Location: index_login.php');
		       }
	    }
	}else {
	  echo 'Please fill up Username and Password fields.';
	}
}

 ?>
 
 <form action="<?php echo $current_file; ?>" method="POST" >
 
 Username:<input type="text" name="username" />
 Password:<input type="password" name="password" />
 <br/>
 <input type="submit" name="submit" value="Submit" />
 </form>