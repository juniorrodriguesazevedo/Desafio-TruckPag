<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Http;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $response = Http::get('https://servicodados.ibge.gov.br/api/v3/agregados/6579/periodos/2021/variaveis/9324?localidades=N6[N3[17]]');

        $base = $response[0]['resultados'][0]['series'];

        for ($i=0; $i < count($base); $i++) {
            City::firstOrCreate([
                'name' => $base[$i]['localidade']['nome']
            ]);
        }
    }
}
