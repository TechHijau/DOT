<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Provinsi;

class ProvinsiApi extends Controller
{
    public function show(Request $request)
    {
        $result = Provinsi::where('province_id',$request->id)->get();
        return $result;
    }
}
