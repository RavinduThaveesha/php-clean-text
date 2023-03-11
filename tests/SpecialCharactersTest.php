<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;

class SpecialCharactersTest extends TestCase {

    public function testRemove() {
        
        $this->assertEquals('Hello', (new SpecialCharacters())->remove('Hello!'));

    }
}