<?php

namespace Ravindu\PhpCleanText;

use Ravindu\PhpCleanText\Classes\Numbers;
use Ravindu\PhpCleanText\Classes\HashTags;
use Ravindu\PhpCleanText\Classes\SpecialCharacters;
use Ravindu\PhpCleanText\Classes\Urls;

class CleanText {

    public static function numbers(string $text = ''): string {
        $text = (new Numbers())->remove($text);
        return $text;
    }

    public static function hashtags(string $text = ''): string {
        $text = (new HashTags())->remove($text);
        return $text;
    }

    public static function specialCharacters(string $text = ''): string {
        $text = (new SpecialCharacters())->remove($text);
        return $text;
    }

    public static function Urls(string $text = ''): string {
        $text = (new Urls())->remove($text);
        return $text;
    }

    public static function clean(string $text = ''): string {

        $text = (new Numbers())->remove($text);
        $text = (new HashTags())->remove($text);
        $text = (new SpecialCharacters())->remove($text);
        return $text;
    }
}

// print(CleanText::clean("test 1222-42`1 #lifeisawsome #abc123"));