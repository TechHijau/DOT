<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RajaOngkirApi extends Controller
{
    public function getProvinsi($urlApi){
        
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlApi,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 0df6d5bf733214af6c6644eb8717c92c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);
        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $result = $response['rajaongkir']['results'];
            return $result;
        }
    }

    public function getKota($urlApi){
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => $urlApi,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => "GET",
            CURLOPT_HTTPHEADER => array(
                "key: 0df6d5bf733214af6c6644eb8717c92c"
            ),
        ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            $response=json_decode($response,true);
            $result = $response['rajaongkir']['results'];
            return $result;
        }
    }
}
