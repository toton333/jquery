<!doctype html>

<html lang="en">

	 <head>
	   <meta charset="utf-8">
		<link type="text/css" rel="stylesheet" href="css/style_css.css" />
		
	    <title>Ajax Home Page</title>
		
	 </head>
	 
	 <body>
	 
	 <div id="ajax_container">
	 
		 <h3>REGISTRATION FORM</h3>
		 
		 <div id="ajaxIndexFeedback"></div><br/><br/>
		 
		  USERNAME:<br/>
		  <input type="text" id="ausername" /><br/><br/>  <!--we do not need dynamic input fields like any need of value="<?php if(isset($username)){echo $username;} ?>" 
															 because we are using ajax.For pure php we need dynamic input fields.	  -->
		  
		  PASSWORD:<br/>
		  <input type="password" id="apassword" /><br/><br/>
		  
		  RETYPE PASSWORD:<br/>
		  <input type="password" id="arepassword" /><br/><br/>
		  
		  FIRST NAME:<br/>
		  <input type="text" id="afirstname"  /><br/><br/>
		  
		  LAST NAME:<br/>
		  <input type="text" id="alastname"  /><br/><br/>
		  
		  <input id="asubmit" type="button" value="Submit" /><br/><br/>
		  registered member <a href="localloginform.php"><strong>LOG IN</strong></a>  here.
	  </div>
	  
	 
	    <script type="text/javascript" src="js/jquery.js"></script>
	    <script type="text/javascript" src="js/selectors.js"></script>
	 </body>


</html>