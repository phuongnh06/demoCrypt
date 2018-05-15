<?php

include "./vendor/autoload.php";
use phpseclib\Crypt\RSA;

class Decrypt {
	
	public function index($ciphertext)
	{
		$ciphertext = base64_decode($ciphertext);
		$rsa = new RSA();
		$rsa->loadKey(file_get_contents('public_key.txt'));
		$plain_text = $rsa->decrypt($ciphertext);

        return $plain_text;
	}
}
