<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TransaksiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $transaksi = [
            [
                'barang_id' => 1,
                'tanggal_transaksi' => new \DateTime,
                'jumlah' => 5,
                'created_at' => new \DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('transaksis')->insert($transaksi);
    }
}
