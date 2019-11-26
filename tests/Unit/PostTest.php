<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    use DatabaseTransactions;
    public function testExample()
    {
        $post = Post::create(["title" => "Test","body" => "lorem ipsum dolor sit atmet adipiscing elit"]);
        $this->assertDatabaseHas('posts',[
            "title" => "Test",
            "body" => "lorem ipsum dolor sit atmet adipiscing elit"
        ]);
        $updatePost = Post::find($post->id)->update(['title' => 'Test Edited','body' => 'Body edited']);
        $this->assertDatabaseHas('posts',[
            'title' => 'ajhsd',
            'body' => 'Lorme ipsum asldjasld'
        ]);
        $this->assertDatabaseMissing('posts', [
            'title' => 'Test','body' => "lorem ipsum dolor sit atmet adipiscing elit"
         ]);
    }
}
