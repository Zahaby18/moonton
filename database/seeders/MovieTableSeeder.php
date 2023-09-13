<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;

class MovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $movies=[
            [
                'name' => 'The Shawnhank',
                'slug' => 'the-shawnhank',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=cYxcFP18CE0',
                'thumbnail' => 'https://client.toffeetest.com/bbp/wp-content/uploads/2023/09/Image-Product-Form-1024x484.png',
                'rating' => 9.0,
                'is_featured' => 1
            ],
            [
                'name' => 'The Shawnhank 2',
                'slug' => 'the-shawnhank-two',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=cYxcFP18CE0',
                'thumbnail' => 'https://client.toffeetest.com/bbp/wp-content/uploads/2023/09/Image-Product-Form-1024x484.png',
                'rating' => 9.4,
                'is_featured' => 0
            ],
            [
                'name' => 'The Shawnhank 3',
                'slug' => 'the-shawnhank-three',
                'category' => 'Action',
                'video_url' => 'https://www.youtube.com/watch?v=cYxcFP18CE0',
                'thumbnail' => 'https://client.toffeetest.com/bbp/wp-content/uploads/2023/09/Image-Product-Form-1024x484.png',
                'rating' => 9.9,
                'is_featured' => 0
            ]
        ];
        Movie::insert($movies);
    }
}
