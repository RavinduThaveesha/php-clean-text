<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\Emails;

class EmailsTest extends TestCase {

    public function testEmails() {
        $this->assertEquals('contact us: ', (new Emails())->remove('contact us: johndoe@email.com'));
    }
}