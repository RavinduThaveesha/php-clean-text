<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;

class HashTagsTest extends TestCase {

    public function testRemove() {

        $this->assertEquals('test', (new HashTags())->remove('test#hashtag'));
        $this->assertEquals('test ', (new HashTags())->remove('test #hashtag'));

    }
}