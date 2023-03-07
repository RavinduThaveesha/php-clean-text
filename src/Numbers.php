<?php

namespace Ravindu\PhpCleanText;

Class Numbers {

    /**
     * Removes all numerical characters from a given string.
     *
     * @param string $text The input string to remove numerical characters from.
     * @return string The resulting string with all numerical characters removed.
     */

    public static function remove(string $text = ''): string
    {
        return preg_replace('/[0-9]+/', '', $text);
    }

}