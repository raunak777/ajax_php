<?php

if(isset($_POST['submit'])){
	echo "<pre>";
	echo "Email :" . $_POST['email']."<br>";
	echo "password :" . $_POST['password'];
	print_r($_POST);
}

?>
