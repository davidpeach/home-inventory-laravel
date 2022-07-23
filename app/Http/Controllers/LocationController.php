<?php

namespace App\Http\Controllers;

use App\Models\Location;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __invoke(Request $request)
    {
        Location::create([
            'name' => $request->get(key: 'name'),
        ]);

        return response(
            content: 'Location created successfully',
            status: 201,
        );
    }
}
