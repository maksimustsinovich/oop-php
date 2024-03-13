<?php

require_once "FormBuilder.php";

use FormBuilder;

class SafeFormBuilder extends FormBuilder {
    private array $methodData;

    public function __construct($method, $action, $submitValue) {
        $this->methodData = $method === self::METHOD_POST ? $_POST : $_GET;

        parent::__construct($method, $action, $submitValue);
    }

    public function addTextField($name, $defaultValue = ''): void
    {
        $value = $this->methodData[$name] ?? $defaultValue;
        $this->fields[] = "<input type=\"text\" name=\"$name\" value=\"$value\" />";
    }

    public function addPassword($name): void
    {
        $value = $this->methodData[$name] ?? '';
        $this->fields[] = "<input type=\"password\" name=\"$name\" value=\"$value\" />";
    }

    public function addEmail($name, $defaultValue = ''): void
    {
        $value = $this->methodData[$name] ?? $defaultValue;
        $this->fields[] = "<input type=\"email\" name=\"$name\" value=\"$value\" />";
    }

    public function addRadioGroup($name, $values): void {
        foreach ($values as $value) {
            $checked = isset($this->methodData[$name]) && $this->methodData[$name] === $value ? 'checked' : '';
            $this->fields[] = "<input type=\"radio\" name=\"$name\" value=\"$value\" $checked />";
        }
    }
}
