<?php

use Illuminate\Database\Seeder;

class poststabelbook extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = [
            ['title'=>'jdl', 'publisher'=>'assalaam', 'price'=>'100000', 'synopsis'=>'silvi', 'pages'=>'150', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'kpo', 'publisher'=>'bandung', 'price'=>'150000', 'synopsis'=>'ncep', 'pages'=>'160', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'aya', 'publisher'=>'gramedia', 'price'=>'120000', 'synopsis'=>'fei', 'pages'=>'120', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'hai', 'publisher'=>'jateng', 'price'=>'50000', 'synopsis'=>'erina', 'pages'=>'190', 'status'=>'-','date'=>'2019-12-22'],
            ['title'=>'love', 'publisher'=>'bali', 'price'=>'70000', 'synopsis'=>'dlt', 'pages'=>'250', 'status'=>'-','date'=>'2019-12-13'],
            ['title'=>'bts', 'publisher'=>'nusa', 'price'=>'130000', 'synopsis'=>'rngga', 'pages'=>'230', 'status'=>'-','date'=>'2019-12-24'],
            ['title'=>'now', 'publisher'=>'singapore', 'price'=>'80000', 'synopsis'=>'aniis', 'pages'=>'100', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'say', 'publisher'=>'bhakti', 'price'=>'40000', 'synopsis'=>'kusman', 'pages'=>'50', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'pi', 'publisher'=>'brunei', 'price'=>'110000', 'synopsis'=>'ubed', 'pages'=>'110', 'status'=>'-','date'=>'2019-12-23'],
            ['title'=>'wkwk', 'publisher'=>'jakarta', 'price'=>'130000', 'synopsis'=>'juned', 'pages'=>'130', 'status'=>'-','date'=>'2019-12-23'],

            ];
            // masukkan data ke database
            DB::table('poststabelbook')->insert($posts);

    }
}
