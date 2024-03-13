<?php

class Logger
{
    private bool $outputToFile;
    private string $filePath;

    public function __construct($outputToFile, $filePath = 'log.txt')
    {
        $this->outputToFile = $outputToFile;
        if ($this->outputToFile) {
            $this->filePath = $filePath;
        }
    }

    public function log($message): void
    {
        $date = new DateTime();
        $timestamp = $date->format('d-m-Y H:i:s');
        $logMessage = "$timestamp: $message \n";

        if ($this->outputToFile) {
            file_put_contents($this->filePath, $logMessage . PHP_EOL, FILE_APPEND);
        } else {
            echo $logMessage;
        }
    }
}
