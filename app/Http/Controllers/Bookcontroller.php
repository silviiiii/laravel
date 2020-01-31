<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\poststabelbook;

class Bookcontroller extends Controller
{
    public function index()
    {
        $book = poststabelbook::all();
        return $book;
    }

    public function create($jdl)
    {
        $book = new poststabelbook;
        $book->title = $jdl;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false ;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function show($id)
    {
        $book = poststabelbook::find($id);
        return $book;
    }
    public function edit($id, $jdl)
    {
        $book = poststabelbook::find($id);
        $book->title = $jdl;
        $book->publisher = "Assalaam Studio";
        $book->pages = 100;
        $book->date = Carbon::now();
        $book->price = 150000;
        $book->status = false ;
        $book->synopsis = "Lorem Ipsum";
        $book->save();
        return $book;
    }
    public function delete($id)
    {
        $book = poststabelbook::find($id);
        $book->delete();
        return $book;
    }
    public function select()
    {
        $book = poststabelbook::select('title','publisher','pages','price')->take(3)->get();
        return $book;
    }
    public function count()
    {

    }
}
