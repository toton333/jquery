<?php
require 'localcore.inc.php';   
require 'localconnect.inc.php'; 
/*we don't need localconnect.inc.php , we added them just for common practise as
when we require core , we require connect also, but in this case it will work without
requiring localconnect.inc.php as we connecting database process is being done
by localloginprocess.php , the file we sending  input values of here to , using selector.js.
But we do need localcore.inc.php because it holds loggedin() function , so that we only
show this page if users are not logged in with the website.

Basically localconnect.inc.php is required when a page runes some SQL query , and localcore.inc.php is required when a page needs to be
checked if it is under a session or not , i.e the page only viewable if the users logged in with the website or not.
*/

if(!loggedin()){
?>
<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<link type="text/css" rel="stylesheet" href="css/style_css.css" />

<title>Local login form</title>
</head>

<body>
	<div id="center_login">

		<h3>LOGIN FORM</h3><br/>
		<div id="formalert"></div><br/>

		Username:<br/>
		<input type="text" id="userlogin" /><br/><br/>
		Password:<br/>
		<input type="password" id="userpassword" /><br/><br/>
		<input type="button" id="usersubmit" value="Login" /><br/><br/>

		not a member?    <a href="ajaxIndex.php"><strong>REGISTER</strong></a>    here.

	</div>


<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/selectors.js"></script>

</body>

</html>
<?php
}else{
header('Location: localindex.php');

}

?>