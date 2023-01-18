<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\UploadedFile; //test with fake image
use Illuminate\Support\Facades\Storage; //here upload files

class ProfileTest extends TestCase
{
    /**
     * Test upload photo
     *
     * @return void
     */
    public function testUpload()
    {
        Storage::fake('local');

        $response = $this->post('profile', [
            'photo' => $photo = UploadedFile::fake( )->image('photo.png')
        ]);

        $this->assertTrue(Storage::disk('local')->exists("profiles/{$photo->hashName()}"));

        $response->assertRedirect('profile');
    }

    //Test Error photo
    public function test_photo_required(){

        $response = $this->post('profile', ['photo'=> '']);

        $response->assertSessionHasErrors('photo');

    }
}
