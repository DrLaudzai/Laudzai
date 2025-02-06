<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kamar</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(45deg, #0093E9 0%, #80D0C7 100%);
            margin: 0;
            padding: 20px;
            text-align: center;
        }
        .container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
        button {
            background-color: #007BFF;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            margin: 5px;
        }
        button:hover {
            background-color: #0056b3;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #54585d;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
        .button-group {
            display: flex;
            justify-content: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Daftar Kamar</h2>
        <a href="{{ url('/create') }}"><button>Tambah Data</button></a>
        <form action="{{ url('/') }}" method="GET" style="margin-top: 10px;">
            <input type="text" name="search_name" placeholder="Cari Nama...">
            <button type="submit">Cari</button>
        </form>
        <table>
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>No Kamar</th>
                    <th>Lantai</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($rooms as $room)
                <tr>
                    <td>{{ $room->name }}</td>
                    <td>{{ $room->no_kamar }}</td>
                    <td>{{ $room->lantai }}</td>
                    <td>
                        <div class="button-group">
                            <form action="{{ url('delete') }}" method="POST" style="display:inline;">
                                @csrf
                                @method('delete')
                                <input type="hidden" value="{{ $room->id }}" name="id">
                                <button type="submit" style="background-color: #dc3545;">Hapus</button>
                            </form>
                            <a href="{{ url('create', ['id' => $room->id]) }}">
                                <button style="background-color: #ffc107;">Edit</button>
                            </a>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
