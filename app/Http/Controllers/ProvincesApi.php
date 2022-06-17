<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RajaOngkirApi;
use App\Models\Provinces;

class ProvincesApi extends Controller
{
    public function show(Request $request)
    {
        $result = Provinces::where('province_id',$request->id)->get();
        return $result;
    }

    public function show_db($id = NULL)
    {
        $result = [];
        if ($id){
            $data = Provinces::all()->where('province_id',$id);
            foreach($data as $res){
                $result[] = $res;
            }
        } else {
            $data = Provinces::all();
            foreach($data as $res){
                $result[] = $res;
            }
        }
        return $result;
    }

    public function show_api($id = NULL)
    {
        if($id){
            $result = [(new RajaOngkirApi)->getProvinces("https://api.rajaongkir.com/starter/province?id=".$id)];
        }else{
            $result = (new RajaOngkirApi)->getProvinces("https://api.rajaongkir.com/starter/province");
        }
        return $result;
    }

    public function swap(Request $request)
    {
        if($request->from === "db"){
            $result = $this->show_db($request->id);
            echo 'dari db'; //untuk mastikan benar dari DB
            return $result;
        }
        if($request->from === "api"){
            $result = $this->show_api($request->id);
            echo 'dari api'; //untuk mastikan benar dari API
            return $result;
        }
        elseif($this->show_api()){
            $result = $this->show_api($request->id);
            echo 'dari api'; //untuk mastikan benar dari API
            return $result;
        }elseif(!$this->show_api()){
            $result = $this->show_db($request->id);
            echo 'dari db'; //untuk mastikan benar dari DB
            return $result;
        }
    }
}
