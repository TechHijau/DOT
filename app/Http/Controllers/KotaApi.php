<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kota;

class KotaApi extends Controller
{
    public function show(Request $request)
    {
        $result = Kota::where('city_id',$request->id)->get();
        return $result;
    }
}
