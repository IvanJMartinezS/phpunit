<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class FunctionsTest extends TestCase
{
    //Test Email (function)
    public function testEmail()
    {
        $result = validate_email('admin@admin.com'); //new email
        $this->assertTrue($result); //Validate if $result is email

        $result = validate_email('admin@admin@com'); //new email
        $this->assertFalse($result); //Validate if $result is not email
    }
}
