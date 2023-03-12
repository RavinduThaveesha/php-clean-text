<?php

namespace Ravindu\PhpCleanText\Classes;

use Ravindu\PhpCleanText\Interfaces\CharacterInterface;

class Emails implements CharacterInterface {

      /**
     * Removes all emails from a given string.
     *
     * @param string $text The input string to remove emails from.
     * @return string The resulting string with all emails removed.
     */

    public function remove(string $text = ''): string {
        return preg_replace('/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}/i', '', $text);
    }
 
}