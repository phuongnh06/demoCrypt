<?php

include('createKey.php');
include('encrypt.php');
include('decrypt.php');

if (isset($_GET['password'])) {
	$password = preg_replace('/\s+/', '+', $_GET['password']);
	echo $password;
	$decrypt = new Decrypt();
	$decrypt = $decrypt->index($password);

	echo "<br>";
	echo "Decrypt: $decrypt";
} else {
	//$keys = new CreateKey();
	//$check = $keys->index();

	$encrypt = new Encrypt();
	$encrypt = $encrypt->index('This is a test');

	echo "Encrypt: $encrypt";

	$decrypt = new Decrypt();
	$decrypt = $decrypt->index($encrypt);

	echo "<br>";
	echo "Decrypt: $decrypt";
}
