<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
     $tags = Tag::factory(10)->create();
     $articles = Article::all();
     foreach($articles as $article) {
        $randomTags = $tags->random(rand(0, 10));
        foreach($randomTags as $tag) {
            $article->tags()->attach($tag);

        }
     }
    }
}
