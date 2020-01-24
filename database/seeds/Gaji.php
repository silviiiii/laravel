<?php

use Illuminate\Database\Seeder;

class Gaji extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Rifqi', 'jabatan'=>'Direktur', 'jk'=>'Laki-Laki', 'alamat'=>'Kp.Sindang Palay', 'agama'=>'Islam', 'total_gaji'=>'9000000'],
            ['nama'=>'silvi', 'jabatan'=>'Meneger', 'jk'=>'perempuan', 'alamat'=>'Buah Batu', 'agama'=>'Islam', 'total_gaji'=>'5000000'],
            ['nama'=>'Alief', 'jabatan'=>'Sekertaris', 'jk'=>'Laki-Laki', 'alamat'=>'TKI', 'agama'=>'Islam', 'total_gaji'=>'4000000'],
            ['nama'=>'erina', 'jabatan'=>'Hrd', 'jk'=>'perempuan', 'alamat'=>'Sukamenak', 'agama'=>'Islam', 'total_gaji'=>'4000000'],
            ['nama'=>'Hilmi', 'jabatan'=>'Hrd', 'jk'=>'Laki-Laki', 'alamat'=>'Cibedug', 'agama'=>'Islam', 'total_gaji'=>'4000000']
            ];
            DB::table('gaji')->insert($posts);
    }
}
