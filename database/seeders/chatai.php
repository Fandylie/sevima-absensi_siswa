<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class chatai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB:: table('tb_chatais')->insert([
            'pertanyaan' => 'halo||hallow||hellow||hai||',
            'jawaban' => 'Hai saya chat bot, Ada yang bisa saya bantu?',
        ]);
        DB:: table('tb_chatais')->insert([
            'pertanyaan' => 'Bagai mana cara login||cara login||login',
            'jawaban' => 'Silahkan untuk mengisi form yang ada di sisi kiri',
        ]);
        DB:: table('tb_chatais')->insert([
            'pertanyaan' => 'Cara Ubah Password||ubah password||lupa password',
            'jawaban' => 'Silahkan hubungi admin atau guru piket',
        ]);
        DB:: table('tb_chatais')->insert([
            'pertanyaan' => 'nis saya||cara melihat nis||berapa nis saya',
            'jawaban' => 'Silahkan cek pada kartu pelajar anda',
        ]);
        DB:: table('tb_chatais')->insert([
            'pertanyaan' => 'Kenapa harus absen||fungsi absen',
            'jawaban' => 'Absen berfungsi untuk mendata siswa yang hadir ke sekolah',
        ]);
    }
}
