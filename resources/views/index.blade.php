<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   


    


    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <head>
    <title>Data Tabel Pertama</title>
    <!-- Tambahkan link CSS dan JavaScript yang diperlukan di sini -->
</head>
<body>
    <h1>Data Tabel Pertama</h1>
    <table>
        <thead>
            <tr>
                <th>kode</th>
                <th>matkul</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($dataTabelPertama as $item)
            <tr>
                <td>{{ $item->kode }}</td>
                <td>{{ $item->matkul }}</td>
                <td>
                    {{-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{ $item->kode }}">
                        Launch demo modal
                      </button> --}}
                      <a href="{{route('tabel-kedua',$item->kode)}}">lihat</a>
                   {{-- @include('detail') --}}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
  
    {{-- <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Data Tabel Kedua</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <!-- Konten modal akan dimuat dengan JavaScript saat tombol "Lihat Data" diklik -->
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div> --}}

    <!-- Tambahkan JavaScript untuk mengaktifkan modal di sini -->

</body>
</html>
