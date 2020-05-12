<?php

namespace Fixwa\TinyUuid\Tests;

use Fixwa\TinyUuid\TinyUuid;
use PHPUnit\Framework\TestCase;

class TinyUuidTest extends TestCase
{

    /**
     * Verify the defaults of the generator.
     * Due to the nature of the generated IDs, it's not
     * easy to validate what the returned ID would be.
     */
    public function testBasicGeneration()
    {
        // Validate the default length of 6 characters
        $shortId = TinyUuid::tinyUuid();
        $this->assertEquals(6, strlen($shortId));

        // Validate the minimum length is 4 characters
        $shortId = TinyUuid::tinyUuid(2);
        $this->assertEquals(4, strlen($shortId));

        // Validate the minimum length is 128 characters
        $shortId = TinyUuid::tinyUuid(200);
        $this->assertEquals(128, strlen($shortId));
    }

    /**
     * Verify that the generated IDs are all alpha numeric
     * by calling multiple times to the generator.
     */
    public function testGeneratesAlphanumericCharactersOnly()
    {
        for ($i = 0; $i < 10000; ++$i) {
            $shortId = TinyUuid::tinyUuid(128);
            $this->assertTrue(ctype_alnum($shortId));
        }
    }
}