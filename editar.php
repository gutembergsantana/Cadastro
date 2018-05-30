<?php
require 'conecta.php';
$id=0;
if(isset($_GET['id']) && empty($_GET['id']) == false) {
	$id = addslashes($_GET['id']);
}


?>