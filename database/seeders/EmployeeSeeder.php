<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            [
                'firstname' => 'Abun',
                'lastname' => 'Gufflux',
                'email'=> 'abun123@gmail.com',
                'age' => 21,
                'position_id' => 1
            ],
            [
                'firstname' => 'Biaa',
                'lastname' => 'Saja',
                'email'=> 'biaasaja21@gmail.com',
                'age' => 20,
                'position_id' => 2
            ],
            [
                'firstname' => 'Wawan',
                'lastname' => 'Geming',
                'email'=> 'wawant0@gmail.com',
                'age' => 15,
                'position_id' => 3
            ],
        ]);
    }
}

