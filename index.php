<?php

include('createKey.php');
include('encrypt.php');
include('decrypt.php');

$keys = new CreateKey();
$check = $keys->index();

$encrypt = new Encrypt();
$encrypt = $encrypt->index('This is demo');

echo "Encrypt: $encrypt";

$decrypt = new Decrypt();
$decrypt = $decrypt->index($encrypt);

echo "<br>";
echo "Decrypt: $decrypt";