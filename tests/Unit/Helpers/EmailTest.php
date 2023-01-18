<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    /**
     * Test email validation
     *
     * @return void
     */
    public function testEmail()
    {
        $result = Email::validate('admin@admin.com');
        $this->assertTrue($result);

        $result = Email::validate('admin2@admin@com');
        $this->assertFalse($result);
    }
}
