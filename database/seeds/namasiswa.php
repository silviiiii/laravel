<?php

use Illuminate\Database\Seeder;

class namasiswa extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['nama'=>'Rifqi', 'nis'=>'2345', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'Kp.Sindang Palay', 'tgl_lahir'=>'2001_01_15', 'umur'=>'18'],
            ['nama'=>'silvi', 'nis'=>'7675', 'jenis_kelamin'=>'perempuan', 'alamat'=>'Rancamanyar', 'tgl_lahir'=>'2003_09_11', 'umur'=>'16'],
            ['nama'=>'novi', 'nis'=>'7899', 'jenis_kelamin'=>'perempuan', 'alamat'=>'Kp.nusa', 'tgl_lahir'=>'2002_11_28', 'umur'=>'17'],
            ['nama'=>'rizky', 'nis'=>'6543', 'jenis_kelamin'=>'Laki-Laki', 'alamat'=>'sukamenak', 'tgl_lahir'=>'2001_03_23', 'umur'=>'18'],
            ['nama'=>'erina', 'nis'=>'6245', 'jenis_kelamin'=>'perempuan', 'alamat'=>'Kp.nusa indah', 'tgl_lahir'=>'2013_07_31', 'umur'=>'06']
            ];
            // masukkan data ke database
            DB::table('siswa_table')->insert($posts);
    }
}
