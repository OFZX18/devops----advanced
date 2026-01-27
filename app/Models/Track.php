<?php

namespace App\Models;

use Database\Factories\TrackFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Track extends Model
{
    /** @use HasFactory<TrackFactory> */
    use HasFactory;

    protected $fillable = [
        'artist_id',
        'album_id',
        'title',
        'duration_seconds',
        'popularity',
        'position',
    ];

    /**
     * @return BelongsTo<Artist>
     */
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    /**
     * @return BelongsTo<Album>
     */
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }

    /**
     * @return BelongsToMany<Playlist>
     */
    public function playlists(): BelongsToMany
    {
        return $this->belongsToMany(Playlist::class);
    }
}
