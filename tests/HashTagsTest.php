<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\HashTags;

class HashTagsTest extends TestCase {

    public function testRemoveHashTag() {
        $this->assertEquals('', (new HashTags())->remove('#hashtag'));
    }

    public function testRemoveHashTagWithoutSpace() {
        $this->assertEquals('test', (new HashTags())->remove('test#hashtag'));
    }

    public function testRemoveHashTagWithSpace() {
        $this->assertEquals('test ', (new HashTags())->remove('test #hashtag'));
    }
}