<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinces;

class ProvincesApi extends Controller
{
    public function show(Request $request)
    {
        $result = Provinces::where('province_id',$request->id)->get();
        return $result;
    }
}
