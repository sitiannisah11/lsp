<?php

use Illuminate\Database\Seeder;

class InfromasiToko extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\App\Models\InformasiToko::truncate();

    	$d = new \App\Models\InformasiToko;
    	$d->nama = "SMKN 10 JAKARTA";
    	$d->alamat = "Jl. Mayjen Soetoyo, Cawang, Kramat Jati, Jakarta Timur, DKI JAKARTA 13630";
    	$d->telepon = "(021) 8091773";
    	$d->kode_pos = 13630;

    	$d->save();
    }
}
