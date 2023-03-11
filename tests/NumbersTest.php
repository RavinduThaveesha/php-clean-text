<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;

class NumbersTest extends TestCase {

    public function testRemove() {
        
        $this->assertEquals('test', (new Numbers())->remove('test1222421'));
        $this->assertEquals('test ', (new Numbers())->remove('test 1222421'));

    }
}