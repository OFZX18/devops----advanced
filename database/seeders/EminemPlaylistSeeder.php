<?php

namespace Database\Seeders;

use App\Models\Artist;
use App\Models\Playlist;
use App\Models\Track;
use Illuminate\Database\Seeder;

class EminemPlaylistSeeder extends Seeder
{
    public function run(): void
    {
        $artist = Artist::where('name', 'Eminem')->first();

        $playlist = Playlist::factory()->create([
            'name' => 'Eminem',
            'description' => 'Playlist of Eminem tracks',
        ]);

        $tracks = Track::where('artist_id', $artist->id)->get();

        $playlist->tracks()->attach($tracks->pluck('id')->toArray());
    }
}
