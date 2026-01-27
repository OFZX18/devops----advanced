<?php

namespace App\Models;

use Database\Factories\ArtistFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    /** @use HasFactory<ArtistFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'country',
    ];

    /**
     * @return HasMany<Album>
     */
    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

    /**
     * @return HasMany<Track>
     */
    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }
}
