<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <Center>Daftar siswa </center><br>
    @foreach ($data as $value)
    nama: {{$value['nama']}} <br>
    kelas: {{$value['kelas']}}
    <hr>
    @endforeach
</body>
</html>
