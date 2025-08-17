<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Planet;

class PlanetPageController extends Controller
{
    public function index()
    {
        $planets = Planet::all();

        return view('planets.index', ['planets' => $planets]);
    }

    public function create()
    {
        return view('planets.create');
    }

	public function show(Planet $planet)
	{
		return view('planets.show', ['planet' => $planet]);
	}

}
