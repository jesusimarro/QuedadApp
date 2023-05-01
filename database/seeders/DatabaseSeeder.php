<?php

namespace Database\Seeders;

use App\Models\ResenaUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategoriaSeeder::class,
            EventoSeeder::class,
            ResenaSeeder::class,
            ComentarioSeeder::class,
            EventoUserSeeder::class,
            CategoriaUserSeeder::class,
            BloqueoSeeder::class,
            NotificationSeeder::class
        ]);
    }
}