<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Data API Students</title>
</head>
<body>
    @foreach($students as $item)
        <ol>
            <li>NIS : {{$item['nis']}}</li>
            <li>Nama : {{$item['nama']}}</li>
            <li>Rombel : {{$item['rombel']}}</li>
            <li>Rayon : {{$item['rayon']}}</li>
        </ol>
    @endforeach
</body>
</html>