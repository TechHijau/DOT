<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cities;

class CitiesApi extends Controller
{
    public function show(Request $request)
    {
        $result = Cities::where('city_id',$request->id)->get();
        return $result;
    }
}
