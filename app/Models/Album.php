<?php

namespace App\Models;

use Database\Factories\AlbumFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    /** @use HasFactory<AlbumFactory> */
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'title',
        'release_date',
    ];

    protected $casts = [
        'release_date' => 'datetime',
    ];

    /**
     * @return BelongsTo<Artist>
     */
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    /**
     * @return HasMany<Track>
     */
    public function tracks(): HasMany
    {
        return $this->hasMany(Track::class);
    }
}
