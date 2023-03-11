<?php

namespace Ravindu\PhpCleanText;

Class HashTags implements CharacterInterface {

    /**
     * Removes all hash tags from a given string.
     *
     * @param string $text The input string to remove hash tags from.
     * @return string The resulting string with all hash tags removed.
     */

    public function remove(string $text = ''): string
    {
        return preg_replace('/#(\w+)/', '', $text);
    }

}