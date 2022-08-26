<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $barang = [
            [
                'nama_barang' => 'Kopi',
                'stok' => 100,
                'jenis_barang' => 'Konsumsi',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'nama_barang' => 'Teh',
                'stok' => 81,
                'jenis_barang' => 'Konsumsi',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'nama_barang' => 'Pasta Gigi',
                'stok' => 20,
                'jenis_barang' => 'Pembersih',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'nama_barang' => 'Sabun Mandi',
                'stok' => 100,
                'jenis_barang' => 'Pembersih',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],

            [
                'nama_barang' => 'Sampo',
                'stok' => 100,
                'jenis_barang' => 'Pembersih',
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('barangs')->insert($barang);
    }
}
