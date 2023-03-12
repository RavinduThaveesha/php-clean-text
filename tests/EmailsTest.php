<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\Emails;

class EmailsTest extends TestCase {

    public function testRemoveEmail() {
        $this->assertEquals('', (new Emails())->remove('johndoe@email.com'));
    }

    public function testRemoveEmailsWithText() {
        $this->assertEquals('contact us: ', (new Emails())->remove('contact us: johndoe@email.com'));
    }
}