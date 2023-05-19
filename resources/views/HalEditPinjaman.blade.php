<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center">Halaman Edit Data</h1>
    <div class="container">
        <form action="/pinjaman/{{ $editData->id }}" method="post" class="form-input">
            @csrf
            @method('put')
            <div class="mb-2">
                <label class="form-label" for="">Nama</label>
                <input class="form-control" type="text" name="nama" value="{{ $editData->nama }}">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Alamat</label>
                <input class="form-control" type="text" name="alamat" value="{{ $editData->alamat }}">
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Jenis Pinjaman</label>
                <br>
                <select name="jenis_pinjaman" value="{{ $editData->jenis_pinjaman }}">
                    <option value="Pinjaman Bank">Pinjaman Bank</option>
                    <option value="Pinjaman Darutat">Pinjaman Darurat </option>
                </select>
                {{-- <input class="form-control" type="number" name="stock" value="{{ $editData->stock }}" min="1000"> --}}
            </div>

            <div class="mb-2">
                <label class="form-label" for="">Total Pinjaman</label>
                <input class="form-control" type="number" name="total_pinjaman" value="{{ $editData->total_pinjaman }}"
                    min="100000">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
