<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\SpecialCharacters;

class SpecialCharactersTest extends TestCase {

    public function testRemoveWithoutSpace() {
        $this->assertEquals('Hello', (new SpecialCharacters())->remove('Hello!'));
    }

    public function testRemoveWithSpace() {
        $this->assertEquals('Hello ', (new SpecialCharacters())->remove('Hello !!!'));
    }
}