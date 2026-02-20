<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        $barang = 1;

        for ($penjualan = 1; $penjualan <= 10; $penjualan++) {
            for ($i = 1; $i <= 3; $i++) {
                $data[] = [
                    'penjualan_id' => $penjualan,
                    'barang_id' => $barang,
                    'harga' => 15000,
                    'jumlah' => 2,
                ];
                $barang++;
                if ($barang > 10) $barang = 1;
            }
        }

        DB::table('t_penjualan_detail')->insert($data);
    }
}
