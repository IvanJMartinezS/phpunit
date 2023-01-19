<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

use Illuminate\Http\UploadedFile; //test with fake image
use Illuminate\Support\Facades\Storage; //here upload files

class ProfileTest extends TestCase
{
    //Test upload photo
    public function testUpload()
    {
        Storage::fake('local'); //image fake

        $response = $this->post('profile', [
            'photo' => $photo = UploadedFile::fake( )->image('photo.png')
        ]);

        //validate file in storage
        $this->assertTrue(Storage::disk('local')->exists("profiles/{$photo->hashName()}"));

        $response->assertRedirect('profile'); //Validate redirect to profile view
    }

    //Test Error photo
    public function test_photo_required(){

        $response = $this->post('profile', ['photo'=> '']); //add empty photo

        $response->assertSessionHasErrors('photo'); //validate return error
    }
}
