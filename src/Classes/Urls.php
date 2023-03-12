<?php

namespace Ravindu\PhpCleanText\Classes;

use Ravindu\PhpCleanText\Interfaces\CharacterInterface;

class Urls implements CharacterInterface {

    /**
     * Removes urls from a given string.
     * 
     * Support formats:
     * https://www.url.com/
     * http://www.url.com/
     * ftps://user@host/foo/bar.txt
     * ftp://user@host/foo/bar.txt
     *
     * @param string $text The input string to remove urls from.
     * @return string The resulting string with urls removed.
     */

    public function remove(string $text = ''): string {
        return preg_replace('/((http|ftp)+(s)?:\/\/[^<>\s]+)/i', '', $text);
    }
 
}