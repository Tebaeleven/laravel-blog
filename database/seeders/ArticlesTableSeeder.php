<?php

namespace Database\Seeders;

use App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i=1; $i < 10; $i++) { 
            $article=new Article();
            $article->title="記事タイトル" . $i;
            $article->body="記事本文" . $i;
            $article->save();
        }
    }
}
