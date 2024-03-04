<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Rystore | Create</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">Buat Data Baru</div>
                    <div class="card-body">
                        <form action="{{ route('pembelians.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="nama_produk">Nama Product:</label>
                                <input type="text" name="nama_produk" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                                <input type="date" name="tanggal_pembelian" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya:</label>
                                <input type="number" name="biaya" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_pembelian">Jumlah Pembelian:</label>
                                <input type="number" name="jumlah_pembelian" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="id_pembeli">ID Pembeli:</label>
                                <select name="id_pembeli" class="form-control" required>
                                    <option value="">Pilih ID Pembeli</option>
                                    @foreach ($pembelis as $pembeli)
                                        <option value="{{ $pembeli->id }}">{{ $pembeli->id }} -
                                            {{ $pembeli->nama_pembeli }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="id_petugas">ID Petugas:</label>
                                <select name="id_petugas" class="form-control" required>
                                    <option value="">Pilih ID Petugas</option>
                                    @foreach ($petugas as $petugas)
                                        <option value="{{ $petugas->id }}">{{ $petugas->id }} -
                                            {{ $petugas->nama_petugas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <a href="{{ route('pembelians.index') }}" class="btn btn-md btn-danger">Kembali</a>
                            <button type="reset" class="btn btn-md btn-warning">Reset</button>
                            <button type="submit" class="btn btn-md btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
