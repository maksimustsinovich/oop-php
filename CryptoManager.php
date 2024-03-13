<?php

class CryptoManager
{
    private $encryptionMethod;
    private $password;

    public function __construct($encryptionMethod, $password)
    {
        $this->encryptionMethod = $encryptionMethod;
        $this->password = $password;
    }

    public function encrypt($data): false|string
    {
        return openssl_encrypt($data, $this->encryptionMethod, $this->password);
    }

    public function decrypt($data): false|string
    {
        return openssl_decrypt($data, $this->encryptionMethod, $this->password);
    }
}