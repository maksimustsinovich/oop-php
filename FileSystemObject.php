<?php

class FileSystemObject {
    private string $name;
    private $size;
    private $type;

    public function __construct($filePath) {
        $this->name = basename($filePath);
        $this->size = filesize($filePath);
        $this->type = filetype($filePath);
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize($unit = "B") {
        $units = ["B", "KB", "MB", "GB"];
        $power = array_search(strtoupper($unit), $units);
        return $this->size / pow(1024, $power);
    }

    public function getType() {
        return $this->type;
    }
}