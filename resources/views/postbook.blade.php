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
        title: {{$value['title']}} <br>
        publisher: {{$value['publisher']}}<br>
        price: {{$value['price']}} <br>
        synopsis: {{$value['synopsis']}} <br>
        <hr>
        @endforeach
</body>
</html>
