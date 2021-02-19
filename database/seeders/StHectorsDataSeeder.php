<?php

namespace Database\Seeders;

use App\Models\Owner;
use App\Models\Pet;
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
        // var_dump($data);
        foreach ($data as $owner) {
            $new_owner = new Owner();
            $new_owner->first_name = $owner->first_name;
            $new_owner->surname = $owner->surname;

            $new_owner->save();

            foreach ($owner->pets as $pet) {
                $new_pet = new Pet();
                $new_pet->owner_id = $new_owner->id;
                $new_pet->species_id = 1;
                $new_pet->name = $pet->name;
                $new_pet->breed = $pet->breed;
                $new_pet->weight = $pet->weight;
                $new_pet->age = $pet->age;
                $new_pet->photo = $pet->photo;

                $new_pet->save();
            }
        }
    }
}
