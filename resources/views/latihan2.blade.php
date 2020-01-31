<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>Daftar tabungan</center>
    @foreach ($tabungan as $data)
        nama : {{$data->nama}}<br>
        nis : {{$data->nis}}<br>
        kelas : {{$data->kelas}}<br>
        jumlah : {{$data->jml}}<br>
        @if ($data->jml >= 50000)
        jenis paket : paket A
        @elseif($data->jml >= 25000)
        jenis paket : paket B
        @elseif($data->jml >= 10000)
        jenis paket : paket C
        @else
        jenis paket :-
        @endif
        <hr>
    @endforeach
</body>
</html>
