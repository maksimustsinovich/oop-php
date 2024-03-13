<?php

include "SmartDate.php";

$smartDate = new SmartDate("12.03.2005");

echo $smartDate->isWeekend() ? "true" : "false" . "\n";
echo $smartDate->isLeapYear() ? "true" : "false" . "\n";
echo $smartDate->getDifference("y") . "\n";