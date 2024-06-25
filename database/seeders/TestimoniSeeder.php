<?php

namespace Database\Seeders;

use App\Models\Testimoni;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TestimoniSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create('id_ID');

        $testimonies = [
            ['pesan' => 'Saya sangat puas dengan pelayanan Parabot Ulin. Alat-alatnya lengkap dan berkualitas.'],
            ['pesan' => 'Pengalaman menyewa alat outdoor di Parabot Ulin sangat menyenangkan. Staffnya ramah dan membantu.'],
            ['pesan' => 'Alat-alatnya bersih dan terawat dengan baik. Harga sewanya juga terjangkau.'],
            ['pesan' => 'Terima kasih Parabot Ulin, saya dapat menikmati petualangan outdoor dengan nyaman berkat alat-alatnya.'],
            ['pesan' => 'Saya sudah beberapa kali menyewa alat outdoor di Parabot Ulin dan selalu puas dengan kualitasnya.'],
            ['pesan' => 'Sangat praktis dan efisien, saya bisa menyewa alat outdoor dengan mudah di Parabot Ulin.'],
            ['pesan' => 'Alat-alatnya sangat lengkap, dari tenda hingga peralatan memasak semuanya tersedia di Parabot Ulin.'],
            ['pesan' => 'Saya suka menggunakan alat-alat dari Parabot Ulin karena memudahkan aktivitas outdoor saya.'],
            ['pesan' => 'Pelayanan yang ramah dan cepat, membuat saya nyaman menyewa alat outdoor di Parabot Ulin.'],
            ['pesan' => 'Saya merekomendasikan Parabot Ulin kepada teman-teman yang suka petualangan outdoor.'],
            ['pesan' => 'Sangat terbantu dengan adanya Parabot Ulin, tidak perlu repot membawa alat-alat sendiri.'],
            ['pesan' => 'Harga sewa yang bersahabat membuat saya semakin betah menggunakan jasa Parabot Ulin.'],
            ['pesan' => 'Sudah beberapa kali menyewa dan selalu mendapatkan alat-alat yang bagus dari Parabot Ulin.'],
            ['pesan' => 'Rekomendasi terbaik untuk Parabot Ulin, pelayanan dan kualitas alatnya tidak diragukan lagi.'],
            ['pesan' => 'Saya senang dapat menyewa alat outdoor di Parabot Ulin, semuanya lengkap dan mudah digunakan.'],
            ['pesan' => 'Pengalaman menyewa alat di Parabot Ulin selalu menyenangkan, staffnya juga ramah dan membantu.'],
            ['pesan' => 'Alat-alat berkualitas tinggi, membuat petualangan outdoor semakin seru dengan Parabot Ulin.'],
            ['pesan' => 'Selalu puas dengan layanan Parabot Ulin, semoga semakin sukses kedepannya.'],
            ['pesan' => 'Terima kasih Parabot Ulin, saya dapat menikmati alam dengan tenang berkat alat-alatnya.'],
            ['pesan' => 'Saya merekomendasikan Parabot Ulin kepada semua teman yang suka petualangan outdoor.'],
            ['pesan' => 'Sangat puas dengan pelayanan Parabot Ulin, semoga semakin berkembang dan sukses.'],
            ['pesan' => 'Alat-alatnya lengkap dan harga sewanya bersahabat, sangat cocok untuk petualangan outdoor.'],
            ['pesan' => 'Terima kasih Parabot Ulin, saya bisa menikmati liburan dengan nyaman berkat alat-alatnya.'],
            ['pesan' => 'Sangat mudah menyewa alat di Parabot Ulin, staffnya juga responsif dan ramah.'],
            ['pesan' => 'Pelayanan yang cepat dan alat-alat yang berkualitas, membuat saya betah menyewa di Parabot Ulin.'],
            ['pesan' => 'Rekomendasi terbaik untuk Parabot Ulin, semoga semakin sukses kedepannya.'],
            ['pesan' => 'Pengalaman menyewa alat outdoor di Parabot Ulin selalu menyenangkan, sangat direkomendasikan.'],
            ['pesan' => 'Saya sudah beberapa kali menyewa alat outdoor di Parabot Ulin, selalu puas dengan kualitasnya.'],
            ['pesan' => 'Sangat terbantu dengan adanya Parabot Ulin, tidak perlu repot membawa alat-alat sendiri.'],
            ['pesan' => 'Pelayanan yang ramah dan cepat, membuat saya nyaman menyewa alat outdoor di Parabot Ulin.'],
            ['pesan' => 'Harga sewa yang bersahabat membuat saya semakin betah menggunakan jasa Parabot Ulin.'],
            ['pesan' => 'Alat-alatnya sangat lengkap, dari tenda hingga peralatan memasak semuanya tersedia di Parabot Ulin.'],
            ['pesan' => 'Saya suka menggunakan alat-alat dari Parabot Ulin karena memudahkan aktivitas outdoor saya.'],
            ['pesan' => 'Terima kasih Parabot Ulin, saya dapat menikmati petualangan outdoor dengan nyaman berkat alat-alatnya.'],
        ];

        foreach ($testimonies as $testimoni) {
            Testimoni::create([
                'nama' => $faker->name,
                'pesan' => $testimoni['pesan'],
            ]);
        }
    }
}
