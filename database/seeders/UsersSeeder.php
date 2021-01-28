<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Vacíar tabla
        User::truncate();

        // Crear Usuario admin
        User::create([
            'name'     => 'Matías Baeza',
            'email'    => 'matias@icodeart.cl',
            'password' => bcrypt('admin')
        ]);
    }
}
