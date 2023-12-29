<?php

namespace Database\Seeders;

use App\Models\Siswa;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['name' => 'Meong', 'kelas' => 'XI PPLG 1', 'role_status' => 'siswa', 'email' => 'meong@gmail.com', 'password' => Hash::make('ayamberkokok')]
        ];

        foreach ($data as $val){
            Siswa::insert([
                'name' => $val['name'],
                'kelas' => $val['kelas'],
                'role_status' => $val['role_status'],
                'email' => $val['email'],
                'password' => $val['password'],
            ]);
        }
    }
}
