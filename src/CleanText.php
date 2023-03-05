<?php

namespace Ravindu\PhpCleanText;

class CleanText {
    public function clean(string $text = ''): string
    {
        return $text;
    }
}

$clean = new CleanText();
print($clean ->clean("test"));