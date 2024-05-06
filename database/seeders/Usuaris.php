<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Usuari;
class Usuaris extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Usuari::factory()->count(5)->create();
    }
}
