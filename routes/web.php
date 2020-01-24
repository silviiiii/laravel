<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Route Basic
Route::get('/about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});

Route::get('profil',function()
{
return view('biodata');
});

// Route::get('profil1',function()
// {
// return view('biodata1');
// });

// Route::get('profil2',function()
// {
// return view('biodata2');
// });

// Route::get('profil3',function()
// {
// return view('biodata3');
// });

// Route::get('profil4',function()
// {
// return view('biodata4');
// });

// Route::get('profil5',function()
// {
// return view('biodata5');
// });

//Route Parameter
Route::get('/pesan/{makan}/{minum}/{harga}',function($mkn,$min,$hrg){
    return 'Makanan Yang Saya Pesan Adalah '.$mkn. '<br>Minum Saya '.$min.'<br>Harga '.$hrg;
});

//Route Optimal Parameter
Route::get('halo/{nama?}',function($nama=''){
    return 'Your Name is '.$nama;
});

//Route Optimal Parameter
Route::get('pesanan/{minuman?}/{makanan?}/{harga?}',function($min=null,$mkn=null,$hrg=null){
    if (isset($min)) {
        echo"Anda Telah Memesan  ".$min;
    }
        if (isset($mkn)) {
        echo" & ".$mkn;
    }
        if (isset($hrg)) {
        echo" Dengan Harga $ ".$hrg;

    }
    if ($min == null & $mkn == null & $hrg == null) {
        echo"Anda Belum Memesan Makanan";
    }
});

   Route::get('tni/{nama?}/{bb?}/{umur?}',function($nma=null,$bb=null,$umur=null){
    $str="Silahkan isi data terlebih dahulu";
    if (isset($nma)) {
       $str="Nama Anda  ".$nma;
    }
    if(isset($bb)){

        if ($bb > 76 && $bb < 100) {
            $str.="<br>berat badan anda :".$bb."kg, Anda harus turun berat badan ";
        }
        if ($bb > 65 && $bb < 75) {
            $str.=" <br>berat badan anda :".$bb."kg, Berat badan anda ideal ";
        }
        if($bb > 50 && $bb <64){
            $str.="<br>berat badan anda :".$bb."kg, naikan berat badan anda";
        }
        if($bb <50){
            $str.="<br>berat badan anda :".$bb."kg, Maaf Anda kurang nutrisi ";
        }
    }
    if(isset($umur)){
        if ($umur <30) {
            $str.="umur anda :".$umur."(tamtama)";
    }
    if ($umur >30 && $umur <40) {
        $str.="<br>umur anda :".$umur."(perwira)";
}
if ($umur >40 && $umur <50) {
    $str.="<br>umur anda :".$umur."(laksamana)";
}
if ($umur >50 && $umur <60) {
    $str.="<br>umur anda :".$umur."(jendral)";
}
}
    return $str;
   });

   Route::get('/testmodel', function() {
    $query = App\post::all();
    return $query;
    });

    Route::get('/testmodel1', function() {
        $query = App\post::find(1);
        return $query;
    });

    Route::get('/testmodel2', function(){
        $query = App\post::where('title','like','%cepat nikah%')->get();
        return $query;
    });
    Route::get('/testmodel3', function(){
        $post = App\post::find(1);
        $post->title = "Ciri Keluarga Sakinah";
        $post->save();
        return $post;
    });
    Route::get('/testmodel4', function(){
        $post = App\post::find(1);
        $post->delete();
    });
    Route::get('/testmodel5', function(){
        $post = new App\post;
        $post->title = "7 Amalan Pembuka Jodoh";
        $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
        $post->save();
        return $post;
    });
    Route::get('/tes', function() {
        $query = App\gaji::all();
        return $query;
    });
     Route::get('/data-gaji-1',function(){
         $query = App\gaji::where('jabatan','=','Direktur')->get();
         return $query;
     });
     Route::get('/data-gaji-2',function(){
        $query = App\gaji::select('id','nama','jabatan')
        ->first();
        return $query;
    });
    Route::get('/data-gaji/{id}',function($id){
        $query = App\gaji::find($id);
        return $query;
    });
    Route::get('tambah-data-gaji/{nama}', function($nama){
        $gaji = new App\gaji();
        $gaji->nama = 'Indah Mambo';
        $gaji->jabatan = 'Sekertaris';
        $gaji->jk = 'perempuan';
        $gaji->alamat = 'Bojong Honey';
        $gaji->total_gaji = '5000000';
        $gaji->agama = 'Islam';
        $gaji->save();
        return $gaji;
    });
