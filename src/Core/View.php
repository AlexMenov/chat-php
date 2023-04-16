<?php

class View
{
    public function renderTemplate(string $template, array $params = []): void
    {
        $template = "src/Template/$template.php";
        if (__DIR__ . $template) {
            extract($params);
            require_once $template;
        }
    }
}