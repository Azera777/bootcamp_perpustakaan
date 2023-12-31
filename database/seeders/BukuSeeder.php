<?php

namespace Database\Seeders;

use App\Models\Buku;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BukuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data= [
            ['judul' => 'No longer Human', 'penerbit' => 'Perpus', 'pengarang' => 'Osamu Dazai', 'stok_buku' => '20']
        ];

        foreach($data as $val){
            Buku::insert([
                'judul' => $val['judul'],
                'penerbit' => $val['penerbit'],
                'pengarang' => $val['pengarang'],
                'stok_buku' => $val['stok_buku'],
            ]);
        }
    }
}
