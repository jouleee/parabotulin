<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlatSeeder extends Seeder
{
    public function run()
    {
        // Data untuk tenda
        $tendaData = [
            ['Patagonia Camping Tent', 'Tenda 4 musim dengan konstruksi tahan angin dan hujan, nyaman untuk beristirahat di alam liar.', 150000],
            ['Coleman Family Tent', 'Tenda besar untuk keluarga, dilengkapi dengan partisi ruangan dan ventilasi yang baik.', 180000],
            ['Kelty Backpacking Tent', 'Tenda ringan dengan sistem setup yang mudah, cocok untuk backpacking.', 120000],
            ['Eureka! 3-Season Tent', 'Tenda 3 musim dengan tahan air yang baik, cocok untuk camping di musim semi dan musim gugur.', 130000],
            ['REI Co-op Backpacking Tent', 'Tenda kompak dengan ruang penyimpanan yang luas, cocok untuk perjalanan jarak jauh.', 140000],
            ['The North Face Dome Tent', 'Tenda berbentuk dome dengan ventilasi yang baik, cocok untuk cuaca panas.', 160000],
            ['Marmot Ultralight Tent', 'Tenda ultralight dengan bahan berkualitas tinggi, cocok untuk pendakian ringan.', 170000],
            ['Osprey Camping Tent', 'Tenda dengan konstruksi tahan air dan angin, nyaman untuk camping di lingkungan yang ekstrim.', 200000],
        ];

        // Data untuk cooking set
        $cookingSetData = [
            ['REI Co-op Camping Cookware Set', 'Set peralatan masak lengkap untuk kegiatan berkemah, ringan dan mudah dibawa.', 50000],
            ['Coleman Outdoor Cooking Set', 'Set masak outdoor dengan panci, wajan, dan aksesori lainnya.', 60000],
            ['GSI Outdoors Camping Cookset', 'Set masak compact dengan bahan anti lengket, mudah dibersihkan.', 45000],
            ['MSR Alpine Cooking Set', 'Set masak untuk perjalanan backpacking, kokoh dan tahan lama.', 55000],
            ['Snow Peak Titanium Cookware', 'Set masak ringan dari titanium, tahan karat dan mudah dibawa.', 70000],
            ['Primus Campfire Cooking Set', 'Set masak dengan pegangan yang nyaman, cocok untuk kegiatan berkemah di sekitar api unggun.', 65000],
            ['MSR Quick 2 System Cookset', 'Set masak modular dengan sistem nesting, hemat ruang saat disimpan.', 75000],
            ['Jetboil Flash Cooking System', 'Sistem memasak all-in-one dengan kecepatan pemanasan yang tinggi, cocok untuk perjalanan cepat.', 80000],
            ['Biolite Camp Stove', 'Kompor camping yang menggunakan biomassa, ramah lingkungan dan praktis.', 90000],
            ['GSI Outdoors Bugaboo Cookset', 'Set masak dengan bahan tahan karat, dapat digunakan di berbagai jenis kompor.', 40000],
        ];

        // Data untuk backpack
        $backpackData = [
            ['The North Face Backpack', 'Daypack dengan kapasitas 30 liter, tahan air dan nyaman digunakan saat hiking.', 75000],
            ['Columbia Outdoor Backpack', 'Ransel multifungsi dengan banyak kantong, cocok untuk perjalanan jarak jauh.', 80000],
            ['Patagonia Hiking Backpack', 'Backpack ringan dengan sistem ventilasi yang baik, cocok untuk pendakian gunung.', 90000],
            ['Osprey Daypack', 'Tas kecil dengan daya tampung besar, cocok untuk kegiatan sehari-hari.', 70000],
            ['REI Co-op Travel Backpack', 'Ransel travel dengan fitur anti maling dan ruang laptop terpisah.', 85000],
            ['Arc\'teryx Trekking Backpack', 'Backpack teknis dengan sistem suspensi yang nyaman, cocok untuk trekking.', 100000],
            ['Marmot Daypack', 'Tas harian dengan bahan tahan air dan laptop sleeve.', 65000],
            ['Eureka! Camping Backpack', 'Ransel besar dengan fitur tahan air, cocok untuk camping dan perjalanan panjang.', 110000],
            ['Coleman Outdoor Backpack', 'Backpack dengan banyak kantong dan tali pengaman, cocok untuk petualangan luar ruangan.', 75000],
            ['Kelty Hiking Backpack', 'Backpack dengan sistem penyeimbang beban, nyaman saat digunakan untuk hiking.', 95000],
        ];

        $sepatuData = [
            ['The North Face Hiking Boots', 'Sepatu hiking yang nyaman dan tahan air, cocok untuk medan berat.', 120000],
            ['Columbia Trail Shoes', 'Sepatu trail ringan dengan grip yang baik, cocok untuk trekking ringan.', 110000],
            ['Patagonia Climbing Shoes', 'Sepatu panjat dengan karet khusus, memberikan pegangan yang kuat saat panjat tebing.', 130000],
            ['Osprey Outdoor Sandals', 'Sendal outdoor yang nyaman dengan bantalan yang baik, cocok untuk jalan-jalan santai di alam.', 70000],
            ['REI Co-op Trail Runners', 'Sepatu trail running ringan dengan dukungan yang baik, cocok untuk lari di medan berat.', 100000],
            ['Arc\'teryx Approach Shoes', 'Sepatu approach dengan desain yang ergonomis, memberikan kenyamanan saat mendaki.', 125000],
            ['Marmot Hiking Shoes', 'Sepatu hiking dengan teknologi anti air dan sol yang tahan gesekan.', 115000],
            ['Eureka! Outdoor Sandals', 'Sendal outdoor yang kokoh dan tahan air, cocok untuk kegiatan air dan hiking ringan.', 90000],
            ['Coleman Trail Shoes', 'Sepatu trail dengan desain low-profile, memberikan kelincahan saat berlari di medan berbatu.', 110000],
            ['Kelty Hiking Boots', 'Sepatu hiking dengan bahan tahan air dan sol yang memberikan grip yang baik.', 135000],
            ['Merrell Outdoor Sandals', 'Sendal outdoor dengan desain yang stylish dan nyaman saat digunakan sehari-hari.', 80000],
            ['Salomon Trail Runners', 'Sepatu trail running dengan teknologi anti air dan sol yang responsif.', 120000],
        ];

        // Insert data tenda
        foreach ($tendaData as $data) {
            DB::table('alat')->insert([
                'nama_alat' => $data[0],
                'deskripsi' => $data[1],
                'harga_sewa_per_hari' => $data[2],
                'kategori_id' => 3, // Kategori ID untuk tenda
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Insert data cooking set
        foreach ($cookingSetData as $data) {
            DB::table('alat')->insert([
                'nama_alat' => $data[0],
                'deskripsi' => $data[1],
                'harga_sewa_per_hari' => $data[2],
                'kategori_id' => 4, // Kategori ID untuk cooking set
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Insert data backpack
        foreach ($backpackData as $data) {
            DB::table('alat')->insert([
                'nama_alat' => $data[0],
                'deskripsi' => $data[1],
                'harga_sewa_per_hari' => $data[2],
                'kategori_id' => 1, // Kategori ID untuk backpack
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Insert data sepatu
        foreach ($sepatuData as $data) {
            DB::table('alat')->insert([
                'nama_alat' => $data[0],
                'deskripsi' => $data[1],
                'harga_sewa_per_hari' => $data[2],
                'kategori_id' => 2, // Kategori ID untuk sepatu
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
