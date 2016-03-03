<?php
require 'localcore.inc.php';
session_destroy();

header('location: '.$http_referer);

?>