<?php

namespace Database\Seeders;

use App\Models\ResenaUser;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class ResenaUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = File::get('database/data/resena_users.json');
        $data = json_decode($json, true);

        foreach ($data as $item) {
            $modelo = new ResenaUser();
            $modelo->id_usuario_emisor = $item['id_usuario_emisor'];
            $modelo->id_usuario_receptor = $item['id_usuario_receptor'];
            $modelo->id_resena = $item['id_resena'];
            $modelo->save();
        }
    }
}
