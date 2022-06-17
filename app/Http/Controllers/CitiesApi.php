<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\RajaOngkirApi;
use App\Models\Cities;

class CitiesApi extends Controller
{
    public function show(Request $request)
    {
        $result = Cities::where('city_id',$request->id)->get();
        return $result;
    }

    public function show_db($id = NULL)
    {
        $result = [];
        if ($id){
            $data = Cities::all()->where('city_id',$id);
            foreach($data as $res){
                $result[] = $res;
            }
        } else {
            $data = Cities::all();
            foreach($data as $res){
                $result[] = $res;
            }
        }
        return $result;
    }

    public function show_api($id = NULL)
    {
        if($id){
            $result = [(new RajaOngkirApi)->getCities("https://api.rajaongkir.com/starter/city?id=".$id)];
        }else{
            $result = (new RajaOngkirApi)->getCities("https://api.rajaongkir.com/starter/city");
        }
        return $result;
    }

    public function swap(Request $request)
    {
        if($request->from == "db"){
            $result = $this->show_db($request->id);
            echo 'dari db'; //untuk mastikan benar dari DB
            return $result;
        }
        if($request->from == "api"){
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
