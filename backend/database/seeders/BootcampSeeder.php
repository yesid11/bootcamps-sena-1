<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use File;
use App\Models\Bootcamp;
use Illuminate\Support\Facades\Hash;

class BootcampSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //1. Leer el archivo de datos
        $json = File::get('database/_data/bootcamps.json');

        //2. Convertir los datos del Json en un arreglo
        $arreglo_bootcamps = json_decode($json);

        //3. Recorrer el arreglo
        foreach($arreglo_bootcamps as $bootcamp){
            //4. Registrar el bootcamp en base de datos
            //Se utiliza el método ::create
            Bootcamp::create(
                [
                    "name" => $bootcamp->name,
                    "description" => $bootcamp->description,
                    "website" => $bootcamp->website,
                    "phone" => $bootcamp->phone,
                    "user_id" => $bootcamp->user_id
                ]
            );
        }
    }
}
