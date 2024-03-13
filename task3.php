<?php

include "Logger.php";

$fileLogger = new Logger(true);
$consoleLogger = new Logger(false);

$consoleLogger->log("hello");
$consoleLogger->log("world");

$fileLogger->log("hello");
$fileLogger->log("php");