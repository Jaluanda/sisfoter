<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SisfologSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $jenisBTB = ['bangunan', 'tanah'];
        $kondisiBTB = ['Baik', 'Kurang Baik', 'Rusak'];
        $konstruksiBTB = ['Beton Bertingkat', 'Standar', 'Beton'];
        $statusTanahBTB = ['Hibah', 'Pinjam', 'Milik Sendiri', 'Lelang', 'Sewa'];
        $statusBTB = ['Tersedia', 'Terpakai', 'Tidak Diketahui'];
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 5758; $i++){
            $ttl = Carbon::today()->subDays(random_int(1500, 5000))->toAtomString();
            DB::collection('logistik')->insert([
                'kategori_logistik' => 'btb',
                'inventaris' => random_int(0, 4698).'/'.strtoupper($faker->regexify('[A-Za-z0-9]{4}')).'/'.strtoupper($jenisBTB[array_rand($jenisBTB)]).'/'.random_int(1924, 2021),
                'kategori' => $jenisBTB[array_rand($jenisBTB)],
                'konstruksi' => $konstruksiBTB[array_rand($konstruksiBTB)],
                'luas_bangunan' => random_int(0, 4698),
                'luas_tanah' => random_int(452, 8541),
                'status_tanah' => $statusTanahBTB[array_rand($statusTanahBTB)],
                'lokasi' => $faker->city(),
                'kondisi' => $kondisiBTB[array_rand($kondisiBTB)],
                'status' => $statusBTB[array_rand($statusBTB)]
            ]);
        }

        $kategoriBB = ['Kendaraan Tempur', 'Kendaraan Bermotor', 'Pesawat Terbang', 'Senjata Api', 'Munisi', 'Alat Zeni', 'Alat Perhubungan', 'Ransum'];
        $namaMateriilBB = ['Senapan', 'Tank', 'Jeep', 'Motor', 'Mobil Dinas', 'Pesawat', 'Helikopter', 'Kapal', 'Pistol', 'Grenade', 'Laras Panjang',
            'Binocular', 'Flare', 'Med Kit', 'Smoke', 'Parasut', 'Ransel', 'Makanan Pack', 'Minuman Pack', 'Sepatu', 'Topi'];
        $kondisiBB = ['Baik', 'Kurang Baik', 'Rusak'];
        $statusBB = ['Tersedia', 'Terpakai', 'Tidak Diketahui'];

        for($i = 0; $i <= 65842; $i++){
            $ttl = Carbon::today()->subDays(random_int(1500, 5000))->toAtomString();
            DB::collection('logistik')->insert([
                'kategori_logistik' => 'bb',
                'inventaris' => random_int(0, 4698).'/'.strtoupper($faker->regexify('[A-Za-z0-9]{4}')).'/'.strtoupper($kategoriBB[array_rand($kategoriBB)]).'/'.random_int(1924, 2021),
                'kategori' => $kategoriBB[array_rand($kategoriBB)],
                'nama_materiil' => $namaMateriilBB[array_rand($namaMateriilBB)],
                'lokasi' => $faker->city(),
                'kondisi' => $kondisiBB[array_rand($kondisiBB)],
                'status' => $statusBB[array_rand($statusBB)]
            ]);
        }


    }
}
