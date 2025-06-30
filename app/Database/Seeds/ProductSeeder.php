<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductSeeder extends Seeder
{
    public function run()
    {
        // membuat data
        $data = [
            [
                'nama' => 'OSIS WANITA ROK',
                'harga'  => 250000,
                'jumlah' => 5,
                'foto' => 'osis_cewe.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'OSIS PRIA CELANA',
                'harga'  => 250000,
                'jumlah' => 5,
                'foto' => 'osis_cowo.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'BATIK WANITA ROK',
                'harga'  => 297000,
                'jumlah' => 6,
                'foto' => 'batik.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'BATIK PRIA CELANA',
                'harga'  => 295000,
                'jumlah' => 6,
                'foto' => 'batik.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'PRAMUKA WANITA ROK',
                'harga'  => 320000,
                'jumlah' => 7,
                'foto' => 'pramuka_cewe.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ],
            [
                'nama' => 'PRAMUKA PRIA CELANA',
                'harga'  => 320000,
                'jumlah' => 7,
                'foto' => 'pramuka_cowo.jpg',
                'created_at' => date("Y-m-d H:i:s"),
            ]
        ];

        foreach ($data as $item) {
            // insert semua data ke tabel
            $this->db->table('product')->insert($item);
        }
    }
}