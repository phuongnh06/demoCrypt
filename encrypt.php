<?php

include "./vendor/autoload.php";
use phpseclib\Crypt\RSA;

class Encrypt {
	
	public function index($plaintText = 'This is test')
	{
		$rsa = new RSA();
		$rsa->loadKey(file_get_contents('private_key.txt'));
		$ciphertext = $rsa->encrypt($plaintText);

        return base64_encode($ciphertext);
	}
}
