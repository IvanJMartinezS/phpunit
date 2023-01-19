<?php

namespace Tests\Feature\Models;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserTest extends TestCase
{
    use RefreshDatabase; // "migrate"

    //Test Users in Database
    public function testUser()
    {
        //New user -> email
        User::factory()->create([
            'email' => 'admin@admin.com'
        ]);

        //test if email 'admin@admin.com' exist in the table
        $this->assertDatabaseHas('users',[
            'email' => 'admin@admin.com'
        ]);

        //test if email 'no@missing.com' does not exist in the database
        $this->assertDatabaseMissing('users',[
            'email' => 'no@missing.com'
        ]);
    }
}
