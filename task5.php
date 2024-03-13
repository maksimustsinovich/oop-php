<?php

include "CryptoManager.php";

$cm = new CryptoManager("AES-128-ECB", "helloworld");
echo $cm->encrypt("helloworld") . "\n";
echo $cm->decrypt("qdHEu871WvhCEtY5q2zZEQ==") . "\n";