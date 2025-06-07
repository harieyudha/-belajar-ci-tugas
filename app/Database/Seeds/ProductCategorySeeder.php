<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'name'        => 'Makanan',
                'description' => 'Produk seperti roti, biskuit, keripik, dan mie instan.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Minuman',
                'description' => 'Minuman seperti air mineral, teh botol, kopi kemasan, dan jus buah.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ],
            [
                'name'        => 'Alat Tulis',
                'description' => 'Contohnya seperti pulpen, pensil, buku tulis, penghapus, dan penggaris.',
                'created_at'  => date('Y-m-d H:i:s'),
                'updated_at'  => date('Y-m-d H:i:s'),
            ]
        ];

        $this->db->table('product_category')->insertBatch($data);
    }
}
