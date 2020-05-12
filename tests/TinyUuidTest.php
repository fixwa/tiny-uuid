<?php
namespace Fixwa\TinyUuid\Test;

use PHPUnit\Framework\TestCase;
use Fixwa\TinyUuid\TinyUuid;

class TinyUuidTest extends TestCase
{

    public function testBasic()
    {
        $res = TinyUuid::tinyUuid();
        $this->assertEquals('TEST', $res);
    }
}