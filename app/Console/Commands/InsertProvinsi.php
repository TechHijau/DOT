<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RajaOngkirApi;
use App\Models\Provinsi;

class InsertProvinsi extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:insertProvinsi';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Memasukkan Data Provinsi Ke Database';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $data = (new RajaOngkirApi)->getProvinsi();
        Provinsi::truncate();
        Provinsi::insert($data);

    }
}
