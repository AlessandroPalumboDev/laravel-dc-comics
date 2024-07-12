<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comic;

class ComicsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = config('comics');

        // DB::table('comics')->truncate();

        foreach ($data as $comic_db) {
            $comic = new Comic();

            $comic->title = $comic_db['title'];
            $comic->description = $comic_db['description'];
            $comic->thumb = $comic_db['thumb'];
            $comic->price = $comic_db['price'];
            $comic->series = $comic_db['series'];
            $comic->sale_date = $comic_db['sale_date'];
            $comic->type = $comic_db['type'];
            // $comic->artists = $comic_db['artists'];
            // $comic->writers = $comic_db['writers'];

            $comic->save();
        }

    }
}
