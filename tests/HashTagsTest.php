<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\HashTags;

class HashTagsTest extends TestCase {

    public function testRemoveWithoutSpace() {
        $this->assertEquals('test', (new HashTags())->remove('test#hashtag'));
    }

    public function testRemoveWithSpace() {
        $this->assertEquals('test ', (new HashTags())->remove('test #hashtag'));
    }
}