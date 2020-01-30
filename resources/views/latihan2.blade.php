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
    @endforeach
</body>
</html>
