<?php

namespace App\Http\Controllers;

use App\Http\Resources\TrackResource;
use App\Models\Track;
use Illuminate\Http\Resources\Json\JsonResource;

class TrackController extends Controller
{
    public function index(): JsonResource
    {
        return TrackResource::collection(
            Track::query()
                ->with([
                    'artist',
                    'album',
                ])
                ->paginate(10)
        );
    }

    public function show(string $id): JsonResource
    {
        return new TrackResource(
            Track::query()
                ->with([
                    'artist',
                    'album',
                ])
                ->findOrFail($id),
        );
    }
}
