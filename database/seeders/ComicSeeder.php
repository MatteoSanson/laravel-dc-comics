<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $comics = config('comic_db');
        // dd($comics);
        foreach ($comics as $comic_item) {
            $comic = new Comic();
            $comic->title = $comic_item['title'];
            $comic->description = $comic_item['description'];
            $comic->thumb_img = $comic_item['thumb'];
            $comic->price = $comic_item['price'];
            $comic->series = $comic_item['series'];
            $comic->sale_date = $comic_item['sale_date'];
            $comic->type = $comic_item['type'];
            $comic->artists = is_array($comic_item['artists']) ? implode(', ', $comic_item['artists']) : strval($comic_item['artists']);
            $comic->writers = is_array($comic_item['writers']) ? implode(', ', $comic_item['writers']) : strval($comic_item['writers']);
            $comic->save();
        }
    }
}
