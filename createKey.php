<?php

include "./vendor/autoload.php";
use phpseclib\Crypt\RSA;

class CreateKey {
	
	public function index()
	{
		$rsa = new RSA();
		$keys 		= $rsa->createKey();
        $keyPrivate	= $keys["privatekey"];
        $keyPublic	= $keys["publickey"];

		$publicFile = "public_key.txt";
		$privateFile = "private_key.txt";
		
		$this->writeFile($keyPublic, $publicFile);
		$this->writeFile($keyPrivate, $privateFile);
		
		return true;
	}
	
	protected function writeFile($content, $name_file)
	{
		$file = fopen($name_file, "w");
		fwrite($file, $content);
		fclose($file);
	}
}
