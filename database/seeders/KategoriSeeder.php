<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('m_kategori')->insert([
            ['kategori_kode'=>'KT01','kategori_nama'=>'Makanan'],
            ['kategori_kode'=>'KT02','kategori_nama'=>'Minuman'],
            ['kategori_kode'=>'KT03','kategori_nama'=>'Snack'],
            ['kategori_kode'=>'KT04','kategori_nama'=>'ATK'],
            ['kategori_kode'=>'KT05','kategori_nama'=>'Lain-lain'],
        ]);
    }
}
