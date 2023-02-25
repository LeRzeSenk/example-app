<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Service\FilmService;
use Illuminate\Http\Request;

class BaseFilmController extends Controller
{
    public $service;

    public function __construct(FilmService $service)
    {
        $this->service = $service;
    }
}
