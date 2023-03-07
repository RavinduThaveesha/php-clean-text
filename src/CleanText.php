<?php

namespace Ravindu\PhpCleanText;

class CleanText {

    // private function removeNumbers(string $text = ''): string
    // {
    //     return preg_replace('/[0-9]+/', '', $text);
    // }

    private function removeHashTags(string $text = ''): string
    {
        return preg_replace('/#(\w+)/', '', $text);
    }

    private function removeSpecialCharacters(string $text = ''): string
    {
        $specialCharacters = ['[', '`', '!', '@',  '#', '$', '%',
        '^', '&', '*', '(',  ')', '_', '+',
        '-', '=', '[', ']',  '{', '}', ';',
        "'", ':', '"', '\\', '|', ',', '.',
        '<', '>', '/', '?',  '~', ']', '/'];
        return str_replace($specialCharacters, '', $text);
    }

    public function clean(string $text = ''): string
    {

        $text = Numbers::remove($text);
        $text = $this->removeHashTags($text);
        $text = $this->removeSpecialCharacters($text);
        return $text;
    }
}

$clean = new CleanText();
print($clean ->clean("test 1222-42`1 #lifeisawsome #abc123"));