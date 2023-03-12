<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\Numbers;

class NumbersTest extends TestCase {

    public function testRemoveInteger() {
        $this->assertEquals('', (new Numbers())->remove('100'));
    }

    public function testRemoveOneDecimalPoint() {
        $this->assertEquals('', (new Numbers())->remove('100.1'));
    }

    public function testRemoveTwoDecimalPoint() {
        $this->assertEquals('', (new Numbers())->remove('100.12'));
    }

    public function testRemoveWithoutSpace() {
        $this->assertEquals('test', (new Numbers())->remove('test1222421'));
    }

    public function testRemoveWithSpace() {
        $this->assertEquals('test ', (new Numbers())->remove('test 1222421'));
    }

}