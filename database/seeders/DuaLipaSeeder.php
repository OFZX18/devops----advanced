<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;
use Illuminate\Database\Seeder;

class DuaLipaSeeder extends Seeder
{
    public function run(): void
    {
        $artist = Artist::factory()->create([
            'name' => 'Dua Lipa',
            'country' => 'UK',
        ]);

        $album = Album::factory()->create([
            'artist_id' => $artist->id,
            'title' => 'Radical Optimism',
            'release_date' => '2024-05-03',
        ]);

        $tracks = [
            ['End of an Era', 197],
            ['Houdini', 186],
            ['Training Season', 210],
            ['These Walls', 218],
            ['Whatcha Doing', 199],
            ['French Exit', 202],
            ['Illusion', 188],
            ['Falling Forever', 224],
            ['Anything for Love', 142],
            ['Maria', 188],
            ['Happy for You', 246],
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
