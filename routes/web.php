<?php

use App\Http\Controllers\AlbumController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\PlaylistController;
use App\Http\Controllers\TrackController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::apiResources([
    'artists' => ArtistController::class,
    'albums' => AlbumController::class,
    'tracks' => TrackController::class,
    'playlists' => PlaylistController::class,
]);
