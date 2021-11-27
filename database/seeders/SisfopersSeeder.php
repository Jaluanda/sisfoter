<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class SisfopersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $randNumImg  = ['01', '02', '03', '04', '05', '06', '07', '08', '09', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30'];
        $genderImg = ['female', 'male'];
        $listGender = ['laki', 'perempuan'];
        $listPangkat = ['Jenderal', 'Letnan Jenderal', 'Mayor Jenderal', 'Brigadir Jenderal', 'Kolonel', 'Letnan Kolonel', 'Mayor', 'Kapten', 'Letnan Satu', 'Letnan Dua', 'Pembantu Letnan Satu', 'Pembantu Letnan Dua',
            'Sersan Mayor', 'Sersan Kepala', 'Sersan Satu', 'Sersan Dua', 'Kopral Kepala', 'Kopral Satu', 'Kopral Dua', 'Prajurit Kepala', 'Prajurit Satu', 'Prajurit Dua'];
        $listCorps = ['INF', 'KAV', 'ARM', 'ARH', 'CZI', 'CPN', 'CPL', 'CHB', 'CPM', 'CKM', 'CBA', 'CAJ', 'CTP', 'CKU', 'CHK', 'K'];
        $listKotama = ['Kepala Staf', 'Wakil Kepala Staf', 'Pangkostrad', 'Dankodiklat', 'Pangdam I', 'Pangdam II', 'Pangdam III', 'Danjen Kopassus',
            'Pangdam', 'Kapusziad', 'Kapusbekangad', 'Kapuspalad', 'Kapushubad', 'Kapuskesad', 'Dirajenad', 'Dirtopad', 'Dirkuad', 'Dirkumad', 'Kadispenad',
            'Kadisbintalad', 'Kadispsiad', 'Kadislitbangad', 'Kadisinfolahtad', 'Kadisjasad', 'Kadisjarahad', 'Kadislaikad', 'Danpuspenerbad', 'Danpusintelad',
            'Danpuspomad', 'Danpusterad', 'Dansecapaad', 'Gubernur Akmil', 'Danseskoad', 'Danpussansiad', 'Kadisadaad'];
        $listJabatan = ['Kapendam III/Slw', 'Waka Pendam III/Slw', 'Kasi Penum', 'Kasi Pensus', 'Kasi Lisstra', 'Kalaknis', 'Kaurpenpas', 'Kaurmedmas Sipenum',
            'Kauranev Sipenum', 'Kaurdal Situud', 'Katimproddok Laknis', 'Katim TI Laknis', 'Kaurlisstraum Silisstra', 'Paurpamops Situud', 'Katimliput Laknis',
            'Paurperslog Situud', 'Batituud', 'Tacaraka Tuud', 'Ba Provoost Situud', 'Tamudi 1 Situud', 'Tamudi 2 Situud'];
        $listStatus = ['dinas', 'ops', 'pensiun', 'aktif', 'nonaktif'];
        $faker = Faker::create('id_ID');

        for($i = 0; $i <= 42514; $i++){
            $ttl = Carbon::today()->subDays(random_int(1500, 5000))->toAtomString();
            DB::collection('biodata')->insert([
                'nik' => $faker->nik(),
                'nopers' => $faker->numberBetween(123456, 654321),
                'nama' => $faker->name,
                'ttl' => $ttl,
                'alamat' => $faker->address,
                'jenis_kelamin' => $listGender[array_rand($listGender)],
                'foto' => 'https://www.random-name-generator.com/images/faces/'.$genderImg[array_rand($genderImg)].'-asia/'.$randNumImg[array_rand($randNumImg)].'.jpg',
                'pangkat' => $listPangkat[array_rand($listPangkat)],
                'corps' => $listCorps[array_rand($listCorps)],
                'kotama' => $listKotama[array_rand($listKotama)],
                'jabatan' => $listJabatan[array_rand($listJabatan)],
                'status' => $listStatus[array_rand($listStatus)]
            ]);
        }


    }
}
