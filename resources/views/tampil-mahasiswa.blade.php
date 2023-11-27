<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="row">
        <div class="col">
            <ul class="list-group">
                @forelse ($mahasiswas as $mahasiswa)
                    <li class="list-group-item">
                        {{ $mahasiswa->nama }}  ( {{ $mahasiswa->nim }} ), Tanggal Lahir: {{ $mahasiswa->tanggal_lahir }}, IPK: {{ $mahasiswa->ipk }}
                    </li>
                @empty
                    <div class="alert alert-dark d-inline-block">
                        Tidak ada data...
                    </div>
                @endforelse
            </ul>
        </div>
    </div>
</body>
</html>