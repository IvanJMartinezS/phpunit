<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    /**
     * Test Email (function)
     *
     * @return void
     */
    public function testEmail()
    {
        $result = validate_email('admin@admin.com');
        $this->assertTrue($result);

        $result = validate_email('admin@admin@com');
        $this->assertFalse($result);
    }
}
