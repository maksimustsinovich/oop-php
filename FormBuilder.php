<?php

declare(strict_types=1);

class FormBuilder
{
    const string METHOD_POST = 'post';
    const string METHOD_GET = 'get';

    protected array $fields = [];

    public function __construct(protected string $method, protected string $action, $submitValue)
    {
    }

    public function addTextField(string $name, $defaultValue): void
    {
        $this->fields[] = "<input type=\"text\" name=\"$name\" value=\"$defaultValue\" />";
    }

    public function addPassword($name): void
    {
        $this->fields[] = "<input type=\"password\" name=\"$name\" />";
    }

    public function addEmail($name, $defaultValue) : void
    {
        $this->fields[] = "<input type=\"email\" name=\"$name\" value=\"$defaultValue\" />";
    }

    public function addRadioGroup($name, $values): void
    {
        foreach ($values as $value) {
            $this->fields[] = "<input type=\"radio\" name=\"$name\" value=\"$value\" />";
        }
    }

    public function getForm(): string
    {
        $form = "<form method=\"$this->method\" action=\"$this->action\">" . implode(' ', $this->fields);
        $form .= "<input type=\"submit\" value=\"$this->submitValue\" />";
        $form .= "</form>";

        return $form;
    }
}
