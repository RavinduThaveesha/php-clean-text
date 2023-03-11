<?php

namespace Ravindu\PhpCleanText;

class CleanText {

    public static function clean(string $text = ''): string
    {

        $text = (new Numbers())->remove($text);
        $text = (new HashTags())->remove($text);
        $text = (new SpecialCharacters())->remove($text);
        return $text;
    }
}

print(CleanText::clean("test 1222-42`1 #lifeisawsome #abc123"));