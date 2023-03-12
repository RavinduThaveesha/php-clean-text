<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\CleanText;

class CleanTextTest extends TestCase {

    public function testTextWithNumbers() {
        $this->assertEquals('The global population reached billion, an increase of million from the previous year.', (new CleanText())->numbers('The global population reached 7.9 billion, an increase of 81 million from the previous year.'));
    }
}