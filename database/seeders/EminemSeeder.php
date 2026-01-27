<?php

namespace Database\Seeders;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;
use Illuminate\Database\Seeder;

class EminemSeeder extends Seeder
{
    public function run(): void
    {
        $artist = Artist::factory()->create([
            'name' => 'Eminem',
            'country' => 'USA',
        ]);

        $album = Album::factory()->create([
            'artist_id' => $artist->id,
            'title' => 'The Death of Slim Shady (Coup de Grâce)',
            'release_date' => '2024-07-12',
        ]);

        $tracks = [
            ['Renaissance', 98],
            ['Habits', 298],
            ['Trouble', 42],
            ['Brand New Dance', 207],
            ['Evil', 230],
            ['All You Got (skit)', 24],
            ['Lucifer', 262],
            ['Antichrist', 314],
            ['Fuel', 214],
            ['Road Rage', 218],
            ['Houdini', 227],
            ['Breaking News (skit)', 37],
            ['Guilty Conscience 2', 325],
            ['Head Honcho', 235],
            ['Temporary', 297],
            ['Bad One', 270],
            ['Tobey (featuring Big Sean and BabyTron)', 285],
            ['Guess Who’s Back (skit)', 63],
            ['Somebody Save Me', 230],
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

        $album = Album::factory()->create([
            'artist_id' => $artist->id,
            'title' => 'Music to Be Murdered By',
            'release_date' => '2020-01-17',
        ]);

        $tracks = [
            ['Premonition (Intro)', 120],
            ['Unaccommodating', 180],
            ['You Gon’ Learn', 210],
            ['Greatest', 200],
            ['I Will', 230],
            ['Alfred (Interlude)', 140],
            ['Those Kinda Nights', 200],
            ['In Too Deep', 210],
            ['Godzilla', 210],
            ['Darkness', 320],
            ['Leaving Heaven', 180],
            ['Yah Yah', 190],
            ['Stepdad', 260],
            ['Little Engine', 220],
            ['Lock It Up', 190],
            ['Farewell', 200],
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
