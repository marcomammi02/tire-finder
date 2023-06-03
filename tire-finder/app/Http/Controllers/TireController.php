<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tire;

class TireController extends Controller
{
    public function index(Request $request)
    {
        $brand = $request->input('brand');
        $size = $request->input('size');
        $season = $request->input('season');

        $query = Tire::query();

        if ($brand !== null) {
            $query->where('brand', $brand);
        }

        if ($size !== null) {
            $query->where('size', $size);
        }

        if ($season !== null) {
            $query->whereIn('season', $season);
        }
        if ($season == 0) {
            $tires = [];
        }

        $tires = $query->get();

        return response()->json($tires);
    }
}
