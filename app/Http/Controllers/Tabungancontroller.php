<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tabungan;
class Tabungancontroller extends Controller
{
    public function index(){
        $tabungan=Tabungan::all();
        return $tabungan;
    }
    public function show($id){
        $tabungan=Tabungan::findOrFail($id);
        return $tabungan;
    }
    public function store(){
        $tabungan=new Tabungan();
        $tabungan->nis="10983";
        $tabungan->nama="silvi";
        $tabungan->kelas="11";
        $tabungan->jml="10000";
        $tabungan->save();
        return $tabungan;
}
public function delet($id){
    $tabungan=Tabungan::find($id);
    $tabungan->delete();
    return $tabungan;
}
}

