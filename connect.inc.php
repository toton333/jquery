<?php
$mysql_host = 'fdb2.freehostingeu.com';
$mysql_user = '1118951_babu';
$mysql_pass = 'ladygaga123';

$mysql_db = '1118951_babu';

if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){
	
	die(mysql_error());
	
	}

 ?>