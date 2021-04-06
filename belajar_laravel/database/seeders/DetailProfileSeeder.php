<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //insert data ke tabel pegawai
        DB::table('detail_profile')->insert([
            'address' => 'Jember',
            'nomor_hp' => '081xxxx',
            'ttl' => '2000-11-11',
            'foto' => 'picture.png'
        ]);
    }
}
