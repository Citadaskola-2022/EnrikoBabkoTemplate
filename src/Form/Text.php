<?php
declare(strict_types=1);

namespace App\Form;

class Text extends Field
{
    public function render(): string
    {
        return <<<HTML
            <input type = "text" name = "$this->name" />
        HTML;

    }
}