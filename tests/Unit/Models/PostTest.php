<?php

namespace Tests\Unit\Models;

use App\Models\Post;
use PHPUnit\Framework\TestCase;
use Illuminate\Support\Str;

class PostTest extends TestCase
{
    /**
     * Test lowercase
     * 
     * @return void
     */
    public function test_set_name_in_lowercase()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        self::assertEquals(Str::of($post->name), $post->name);
    }

    // Test slug name
    public function test_get_slug()
    {
        $post = new Post;
        $post->name = 'Proyecto en PHP';

        self::assertEquals(Str::of($post->name)->slug(), $post->slug);
    }

    //Test url
    public function test_get_href()
    {
        $post = new Post();
        $post->name = "Proyecto en PHP";
        $href = Str::of($post->name)->slug()->prepend('blog/');

        self::assertEquals($href, $post->href());
    }
}
