<?php

namespace Ravindu\PhpCleanText\Classes;

use Ravindu\PhpCleanText\Interfaces\CharacterInterface;

Class SpecialCharacters implements CharacterInterface {

    private $specialCharacters = [ 
        '[', '`', '!', '@',  '#', '$', '%',
        '^', '&', '*', '(',  ')', '_', '+',
        '-', '=', '[', ']',  '{', '}', ';',
        "'", ':', '"', '\\', '|', ',', '.',
        '<', '>', '/', '?',  '~', ']', '/'
    ];

    /**
     * Removes all special characters from a given string.
     *
     * @param string $text The input string to remove special characters from.
     * @return string The resulting string with all special characters removed.
     */

    public function remove(string $text = ''): string {
        return str_replace($this->specialCharacters, '', $text);
    }

}