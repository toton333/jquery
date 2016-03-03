<?php
require 'core.inc.php';
require 'connect.inc.php';

if(!loggedin()){
	
	if(isset($_POST['username'])&& isset($_POST['password']) && isset($_POST['repassword']) && isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
		
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);
		$repassword = mysql_real_escape_string($_POST['repassword']);
		$firstname = mysql_real_escape_string($_POST['firstname']);
		$lastname = mysql_real_escape_string($_POST['lastname']);
		$email = mysql_real_escape_string($_POST['email']);
		
		
		if(!empty($username) && !empty($password) && !empty($repassword) && !empty($firstname) && !empty($lastname) && !empty($email)){
		
					 
				   if($password==$repassword){
					   
					   
					   
					   $query = "SELECT username FROM players where username='$username' AND active=1";
					   $query_run = mysql_query($query);
					   $query_num_rows = mysql_num_rows($query_run);
					   
					   if($query_num_rows==1){
						   
						   echo 'This Username is not available.Try a different Username.';
						   
						   }else{
							   
							   $password_hash = md5($password);
							   $hash = md5(rand(1,1000));
							   
							  $query = "INSERT INTO players VALUES('','$username','$password_hash','$firstname','$lastname','$email','$hash','0')";
								  if($query_run = mysql_query($query)){
									  
									  $to = $email;
									  $subject = 'Signup | Verification';
									  $message = 'Thanks for signing up.
									  Your account has been created.
									  To activate your account pleaee click the link below.<br/>
									  http://www.babu.eu.pn/verify.php?email='.$email.'&hash='.$hash.'';
									  
									  
								$header = 'From:noreply@babu.eu.pn'."\r\n";	
								 mail($to,$subject,$message,$header);
									  
									echo 'Congratulation! Your account with Apes has been created.<br/>
									An activation link has been sent to your email address, you need to click that link to activate your account.';  
									  
									  }else{
										  echo 'Error occured.Try again';
										  
										  }
							   
							   
							   }
					   
					   
					   
					   
					   
					   }else{
						   
						   echo 'Two fields of password must be matched.';
						   
						   }
				   
				   
		
			   
			}else{
				
				echo 'Please fill up all fields;';
				
				}
		
		
		
		
		
		}
	
	
	
	
	
	?>
    <div id="registration-container" style="position:absolute; margin:20px; padding:12px; width:300px; height:360px; background:#9C6; color:#CD1D6C; border:2px solid #1B5F32;">
        <span style="text-align:center; color:#07630A;" ><h3><strong>REGISTRATION FORM</strong></h3></span>
            <div id="inner" style="text-align:right; line-height:40px; font-style:italic; font-weight:bold;">
            <form action="registration.php" method="POST">
            
            <label for="username">Username:</label><input type="text" maxlength="32" name="username" value="<?php if(isset($username)){echo $username;} ?>" /><br/>
            <label for="password">Password:</label><input type="password" name="password" /><br/>
           <label for="re-password"> Re-enter Password:</label><input type="password" name="repassword" /><br/>
            <label for="firstname">First Name:</label><input type="text" maxlength="40" name="firstname" value="<?php if(isset($firstname)){ echo $firstname;} ?>" /><br/>
            <label for="lastname">Last Name:</label><input type="text" maxlength="40" name="lastname" value="<?php if(isset($lastname)){ echo $lastname;} ?>" /><br/>
            <label for="email">Your Email:</label><input type="email" maxlength="40" name="email" value="<?php if(isset($email)){ echo $email;} ?>" /><br/>
            
            <div id="submit" style="position:absolute; top:340px; left:152px;">
            <input type="submit" value="Register" style="background:#2C612D; color:#FFF;" />
            </div>
            
            </form>
            </div>
    </div>
    
    
    <?php
	
	}else{
	echo 'you are already registered and logged in.';
	
	}

?>