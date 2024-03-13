<?php

include "SafeFormBuilder.php";

$formBuilder = new SafeFormBuilder(FormBuilder::METHOD_GET, '/destination.php', 'Send!');
$formBuilder->addTextField('someName', 'Default value');
$formBuilder->addRadioGroup('someRadioName', ['A', 'B']);
$formBuilder->addPassword("somePassword");
$formBuilder->addEmail("someEmail", "maksimustsinovich@gmail.com");
$form = $formBuilder->getForm();
echo $form;