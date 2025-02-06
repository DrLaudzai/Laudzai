<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ url('/store') }}" method="POST">
    @csrf
    <input  type="hidden" id="id" value="{{ $room->id ?? '' }}" name="id">
    <label for="name">Nama Kamar:</label><br>
    <input type="text" value="{{ $room->name ?? '' }}" id="name" name="name"><br>

    <label for="no_kamar">No Kamar:</label><br>
    <input type="text" value="{{ $room->no_kamar ?? '' }}" id="no_kamar" name="no_kamar"><br>

    <label for="lantai">Lantai:</label><br>
    <input type="text" value="{{ $room->lantai ?? '' }}" id="lantai" name="lantai"><br>

    <button type="submit">Tambah Data Kamar</button>
    </form>

</body>
</html>