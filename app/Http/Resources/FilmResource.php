<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FilmResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'film_id' => $this->id,
            'film_name' => $this->name,
            'film_status' => $this->status,
            'film_poster_url' => $this->poster_url,
            'film_genres' => $this->genres,
        ];
    }
}
