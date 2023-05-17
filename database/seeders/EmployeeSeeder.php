<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('employees')->insert([
            'nama' => 'Muhta Nuryadi',
            'jeniskelamin' => 'laki-laki',
            'notelepon' => '08871165551',
            'alamat' => 'Kp.Cangkudu Rt.06 Rw.01'
        ]);
    }
}
