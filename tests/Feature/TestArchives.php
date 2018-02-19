<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestArchives extends TestCase
{
    use RefreshDatabase;

    public function testArchivesMethodOnPostModel()
    {
        $first = factory(\Adi\Post::class)->create();

        $second = factory(\Adi\Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->subMonth()
        ]);

        $posts = \Adi\Post::archives()->toArray();

        $this->assertEquals([
            [
                "year"  => $first->created_at->format('Y'),
                "month" => $first->created_at->format('F'),
                "posts" => 1
            ], [
                "year"  => $second->created_at->format('Y'),
                "month" => $second->created_at->format('F'),
                "posts" => 1
            ]], $posts);
    }
}
