<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;
use Illuminate\Database\Seeder;

class SabrinaCarpenterSeeder extends Seeder
{
    public function run(): void
    {
        $artist = Artist::factory()->create([
            'name' => 'Sabrina Carpenter',
            'country' => 'USA',
        ]);

        $album = Album::factory()->create([
            'artist_id' => $artist->id,
            'title' => "Short n' Sweet",
            'release_date' => '2024-08-23',
        ]);

        $tracks = [
            ['Taste', 157],
            ['Please Please Please', 186],
            ['Good Graces', 185],
            ['Sharpest Tool', 218],
            ['Coincidence', 164],
            ['Bed Chem', 171],
            ['Espresso', 175],
            ['Dumb & Poetic', 133],
            ['Slim Pickins', 152],
            ['Juno', 223],
            ['Lie To Girls', 202],
            ['Don’t Smile', 206],
        ];

        foreach ($tracks as $index => $data) {
            Track::factory()->create([
                'artist_id' => $artist->id,
                'album_id' => $album->id,
                'title' => $data[0],
                'duration_seconds' => $data[1],
                'position' => $index + 1,
            ]);
        }
    }
}
