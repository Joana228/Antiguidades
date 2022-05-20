<?php

namespace Database\Seeders;

use App\Models\Pratos;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for($i = 0;$i < 10; $i++){
        Pratos::factory()->create([
        'user_id' => User::all()->random()->id
        ]);
        }
//
    }
}