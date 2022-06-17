<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RajaOngkirApi;
use App\Models\Cities;
use App\Models\Provinces;

class InsertData extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insertData {data?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Memasukkan Data Kota Ke Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
      $data = $this->argument('data');
      if($data == 'provinsi'){
        $data = (new RajaOngkirApi)->getProvinces("https://api.rajaongkir.com/starter/province");
        if ($this->confirm('Tindakan ini akan menghapus semua data di tabel database dan akan menginput data dari Api RajaOngkir, setuju?', true)) {
          Provinces::truncate();
          Provinces::insert($data);
          $this->info('Provinsi berhasil di simpan');
        }else{
          $this->info('Provinsi batal di simpan');
        }
      }elseif($data == 'kota'){
        $data = (new RajaOngkirApi)->getCities("https://api.rajaongkir.com/starter/city");
        if ($this->confirm('Tindakan ini akan menghapus semua data di tabel database dan akan menginput data dari Api RajaOngkir, setuju?', true)) {
          Cities::truncate();
          Cities::insert($data);
          $this->info('Kota berhasil di simpan');
        }else{
          $this->info('Kota batal di simpan');
        }
      }else{
        $this->info('Perintah tidak dikenali');
      }
    }
}
