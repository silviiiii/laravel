<?php

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
        // $this->call(namasiswa::class);

        // $this->call(Gaji::class);
        //factory(App\tabungan::class, 100)->create();
        factory(App\Customer::class, 1000)->create();
        // Data Pertama
        // $posts = [
        //     ['title'=>'Tips Cepat Nikah', 'content'=>'lorem ipsum'],
        //     ['title'=>'Haruskah Menunda Nikah?', 'content'=>'lorem ipsum'],
        //     ['title'=>'Membangun Visi Misi Keluarga', 'content'=>'lorem ipsum']
        //     ];
        //     // masukkan data ke database
        //     DB::table('posts')->insert($posts);
    }
}
