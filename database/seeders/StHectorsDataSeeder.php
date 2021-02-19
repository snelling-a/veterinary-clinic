<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File as FacadesFile;

class StHectorsDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $json = FacadesFile::get("storage/clients.json");
        $data = json_decode($json);
        var_dump($data);
    }
}
