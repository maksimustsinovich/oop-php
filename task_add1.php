<?php

include "TableBuilder.php";
$tableBuilder = new TableBuilder();
$tableBuilder->setCaption("PHONES TABLE HEADER");
$tableBuilder->addHeader('Model');
$tableBuilder->addHeader('Producer');
$tableBuilder->addHeader('Cost');
$tableBuilder->addRow(['Nexus 6P', 'Huawei', '49000']);
$tableBuilder->addRow(['iPhone 6S Plus', 'Apple', '62000']);
$tableBuilder->addRow(['Lumia 950 XL', 'Microsoft', '35000']);
$tableBuilder->setFooter("PHONES TABLE FOOTER");
echo $tableBuilder->getTable();
