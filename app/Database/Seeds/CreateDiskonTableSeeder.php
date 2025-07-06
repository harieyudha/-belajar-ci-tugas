<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CreateDiskonTableSeeder extends Seeder
{
     public function run()
    {
    $data = [];
    $start = new \DateTime('2025-07-01');
    for ($i = 0; $i < 10; $i++) {
        $tanggal = $start->format('Y-m-d');
        $data[] = [
            'tanggal' => $tanggal,
            'nominal' => rand(10000, 200000),
            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
        $start->modify('+1 day');
    }

    $this->db->table('diskon')->insertBatch($data);
    }

}
