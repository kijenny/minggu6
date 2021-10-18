<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'nim' => '2031710086',
            'name' => 'Kirana Jenny',
            'class' => 'MI 2F',
            'department' => 'JTI',
            'phone_number' => '085645156636',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710107',
            'name' => 'Kristin',
            'class' => 'MI 2F',
            'department' => 'JTI',
            'phone_number' => '082165332470',
        ]);
        DB::table('students')->insert([
            'nim' => '2031710094',
            'name' => 'Lailatul Mufida',
            'class' => 'MI 2F',
            'department' => 'JTI',
            'phone_number' => '081217861304',
        ]);
    }
}
