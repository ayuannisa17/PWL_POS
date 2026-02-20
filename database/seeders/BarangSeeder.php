<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 1; $i <= 10; $i++) {
            $data[] = [
                'kategori_id' => ($i % 5) + 1,
                'barang_kode' => 'BRG'.str_pad($i,3,'0',STR_PAD_LEFT),
                'barang_nama' => 'Barang '.$i,
                'harga_beli' => 10000 + ($i * 500),
                'harga_jual' => 15000 + ($i * 500),
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
