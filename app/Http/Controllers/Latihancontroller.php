<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Latihancontroller extends Controller
{
    public function halo($a=null,$b=null)
    {
        $mg="silahkan masukan angka";
        if (isset($a) || isset($b)) {
            $mg=" masukan 1 angka lagi";
            if (isset($a) && isset($b)) {
                $c=$a+$b;
                $mg="$a + $b = $c";
        }
        return $mg;
    }
    }
    public function kurang($a=null,$b=null)
    {
        $mg="silahkan masukan angka";
        if (isset($a) || isset($b)) {
            $mg=" masukan 1 angka lagi";
            if (isset($a) && isset($b)) {
                $c=$a-$b;
                $mg="$a - $b = $c";
        }
        return $mg;
    }
    }

    public function bagii($a=null,$b=null)
    {
        $mg="silahkan masukan angka";
        if (isset($a) || isset($b)) {
            $mg=" masukan 1 angka lagi";
            if (isset($a) && isset($b)) {
                $c=$a/$b;
                $mg="$a / $b = $c";
        }
        return $mg;
    }
    }

    public function kali($a=null,$b=null)
    {
        $mg="silahkan masukan angka";
        if (isset($a) || isset($b)) {
            $mg=" masukan 1 angka lagi";
            if (isset($a) && isset($b)) {
                $c=$a*$b;
                $mg="$a * $b = $c";
        }
        return $mg;
    }
    }


    public function loop(){
        $data = [
            ['Nama'=>'Raiza','Kelas'=>'XI RPL 1','uangjajan'=>55000],
            ['Nama'=>'Keiza','Kelas'=>'XI RPL 1','uangjajan'=>25000],
            ['Nama'=>'Queenza','Kelas'=>'XI RPL 1','uangjajan'=>15000],
            ['Nama'=>'Tracy','Kelas'=>'XI RPL 1','uangjajan'=>11000],
    ];
        foreach($data as $val => $key){
            echo 'Nama : '.$key['Nama']."<br>".
                'Kelas : '.$key['Kelas']."<br>".
                'Uang Jajan : Rp. '.$key['uangjajan']."<br>";
            if ($key['uangjajan'] > 55000) {
                $uta = $key['uangjajan']*25/100;
                echo 'Uang Tabungan : Rp. '.$uta.'<br>';
            }
            elseif ($key['uangjajan'] > 25000) {
                $uta = $key['uangjajan']*15/100;
                echo 'Uang Tabungan : Rp. '.$uta.'<br>';
            }
            elseif ($key['uangjajan'] > 10000) {
                $uta = $key['uangjajan']*10/100;
                echo 'Uang Tabungan : Rp. '.$uta.'<br>';
            }
            $sisa = $key['uangjajan']-$uta;
            echo 'Sisa Uang : Rp. '.$sisa.'<hr>';
        }
    }
    public function data(){
        $data = [
            ['nama'=>'ncep','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Laki-laki','jabatan'=>'Manager','jamker'=>350],
            ['nama'=>'silvi','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Perempuan','jabatan'=>'Sekretaris','jamker'=>250],
            ['nama'=>'alma','agama'=>'Islam','alamat'=>'Bandung','jenkel'=>'Perempuan','jabatan'=>'Staff','jamker'=>200],
        ];
        foreach ($data as $val => $key) {
            echo 'Nama : '.$key['nama'].'<br>'.
                'Agama : '.$key['agama'].'<br>'.
                'Alamat : '.$key['alamat'].'<br>'.
                'Jenis Kelamin : '.$key['jenkel'].'<br>'.
                'Jabatan : '.$key['jabatan'].'<br>'.
                'Jam Kerja : '.$key['jamker'].'<br>';
            if ($key['jabatan'] == "Manager") {
                $gaji = 5000000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Sekretaris") {
                $gaji = 3500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            elseif ($key['jabatan'] == "Staff") {
                $gaji = 2500000;
                echo 'Gaji : Rp. '.$gaji.'<br>';
            }
            if ($key['jamker'] >= 250) {
                $bonus = $gaji*10/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            elseif ($key['jamker'] >= 200) {
                $bonus = $gaji*5/100;
                echo 'Bonus : '.$bonus.'<br>';
            }
            $gaber = $gaji+$bonus;
            $ppn = $gaber*2.5/100;
            echo 'PPN : Rp. '.$ppn.'<br>';
            $gatot = $gaber - $ppn;
            echo 'Total Gaji : Rp. '.$gatot.'<hr>';
        }
    }
}
