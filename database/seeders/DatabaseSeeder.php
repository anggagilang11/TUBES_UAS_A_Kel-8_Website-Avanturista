<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('asdasd'),
            'role' => 0,
            'created_at' => date('Y-m-d H:i:s')
        ]);

        DB::table('tb_kategori_paket_wisata')->insert([
            [
                'nama' => 'Keluarga',
                'slug' => 'keluarga',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Teman-teman',
                'slug' => 'teman-teman',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Anak-anak',
                'slug' => 'anak-anak',
                'created_at' => date('Y-m-d H:i:s')
            ],
            [
                'nama' => 'Dewasa',
                'slug' => 'dewasa',
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('tb_paket_wisata')->insert([
            [
                'kategori_paket_wisata_id' => 1,
                'image' => 'default.jpg',
                'nama' => 'Paket wisata 1',
                'slug' => 'paket-wisata-1',
                'deskripsi' => 'Deskripsi paket wisata 1',
                'harga' => 10000,
                'created_at' => date('Y-m-d H:i:s')
            ]
        ]);

        DB::table('tb_pengaturan')->insert([
            'whatsapp' => 'https://api.whatsapp.com/send?phone=6285737125437',
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
