<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Http\Controllers\RajaOngkirApi;
use App\Models\Kota;

class InsertKota extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:insertKota';

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
        $data = (new RajaOngkirApi)->getKota();
        Kota::truncate();
        Kota::insert($data);

    }
}
