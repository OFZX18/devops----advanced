<?php

namespace App\Models;

use Database\Factories\PlaylistFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Playlist extends Model
{
    /** @use HasFactory<PlaylistFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * @return BelongsToMany<Track>
     */
    public function tracks(): BelongsToMany
    {
        return $this->belongsToMany(Track::class);
    }
}
