<?php
if(isset($_GET['name'],$_GET['feedback'])){
	
	$name = $_GET['name'];
	$feedback = $_GET['feedback'];
	echo $name.' says <br/>'.$feedback;
	
	}

?>