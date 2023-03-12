<?php

namespace Ravindu\PhpCleanText;

use PHPUnit\Framework\TestCase;
use Ravindu\PhpCleanText\Classes\Urls;

class UrlsTest extends TestCase {

    public function testRemoveHttp() {
        $this->assertEquals('watch ', (new Urls())->remove('watch http://www.youtube.com/watch?v=145f45asdd'));
    }

    public function testRemoveHttps() {
        $this->assertEquals('watch ', (new Urls())->remove('watch https://www.youtube.com/watch?v=145f45asdd'));
    }

    public function testRemoveFtp() {
        $this->assertEquals('use ftp url ', (new Urls())->remove('use ftp url ftp://user@host/foo/bar.txt'));
    }

    public function testRemoveFtps() {
        $this->assertEquals('use ftp url ', (new Urls())->remove('use ftp url ftps://user@host/foo/bar.txt'));
    }
}