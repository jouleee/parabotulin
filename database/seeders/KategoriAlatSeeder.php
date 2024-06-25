<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriAlatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kategori_alat')->insert([
            [
                'nama_kategori' => 'Backpack',
                'deskripsi' => 'Jelajahi alam dengan nyaman dan gaya menggunakan backpack premium kami! Dirancang untuk ketahanan dan kenyamanan maksimal, sempurna untuk hiking dan traveling.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Sepatu',
                'deskripsi' => 'Langkahkan kaki Anda dengan sepatu outdoor berkualitas tinggi! Ideal untuk hiking dan trekking, sepatu ini memberikan perlindungan dan kenyamanan optimal di setiap perjalanan Anda.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Tenda',
                'deskripsi' => 'Nikmati kenyamanan rumah di alam bebas dengan tenda tahan cuaca kami! Mudah dipasang dan dirancang untuk segala kondisi cuaca, membuat camping Anda lebih menyenangkan dan aman.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_kategori' => 'Cooking Set',
                'deskripsi' => 'Sajikan makanan lezat di alam bebas dengan cooking set kami! Peralatan lengkap ini membuat pengalaman camping Anda lebih praktis dan menyenangkan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
