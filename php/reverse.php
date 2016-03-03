<?php
if(isset($_GET['input'])){
	
	$name = $_GET['input'];
	echo strrev($name);
	}


?>