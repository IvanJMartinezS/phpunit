<?php

namespace Tests\Unit\Helpers;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{
    //Test email validation     
    public function testEmail()
    {

        $result = Email::validate('admin@admin.com'); //new email
        $this->assertTrue($result); //Validate if $result is email


        $result = Email::validate('admin2@admin@com'); //new email
        $this->assertFalse($result); //Validate if $result is not email
    }
}
