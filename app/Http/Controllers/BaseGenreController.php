<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\GenreService;
use Illuminate\Http\Request;

class BaseGenreController extends Controller
{
    public $service;

    public function __construct(GenreService $service)
    {
        $this->service = $service;
    }
}
