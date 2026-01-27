<?php

namespace Database\Factories;

use App\Models\Album;
use App\Models\Artist;
use App\Models\Track;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Track>
 */
class TrackFactory extends Factory
{
    protected $model = Track::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'artist_id' => Artist::factory(),
            'album_id' => Album::factory(),
            'title' => $this->faker->sentence(3),
            'duration_seconds' => $this->faker->numberBetween(120, 400),
            'popularity' => $this->faker->numberBetween(0, 100),
            'position' => $this->faker->numberBetween(1, 15),
        ];
    }
}
