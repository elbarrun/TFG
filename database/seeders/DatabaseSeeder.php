<?php

use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Role::create(['nombre' => 'Entrenador']);
        Role::create(['nombre' => 'Jugador']);
    }
}
