<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Rystore | Edit</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Data Pembelian</div>

                    <div class="card-body">
                        <form action="{{ route('pembelians.update', $pembelians->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama_produk">Nama Product:</label>
                                <input type="text" name="nama_produk" class="form-control"
                                    value="{{ $pembelians->nama_produk }}" required>
                            </div>
                            <div class="form-group">
                                <label for="tanggal_pembelian">Tanggal Pembelian:</label>
                                <input type="date" name="tanggal_pembelian" class="form-control"
                                    value="{{ $pembelians->tanggal_pembelian }}" required>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya:</label>
                                <input type="text" name="biaya" class="form-control"
                                    value="{{ $pembelians->biaya }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_pembelian">Jumlah Pembelian:</label>
                                <input type="number" name="jumlah_pembelian" class="form-control"
                                    value="{{ $pembelians->jumlah_pembelian }}" required>
                            </div>
                            <div class="form-group">
                                <label for="id_pembeli">ID Pembeli:</label>
                                <input type="number" name="id_pembeli" class="form-control"
                                    value="{{ $pembelians->id_pembeli }}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="id_petugas">ID Petugas:</label>
                                <input type="number" name="id_petugas" class="form-control"
                                    value="{{ $pembelians->id_petugas }}" readonly>
                                <a href="{{ route('pembelians.index') }}" class="btn btn-md btn-danger">Kembali</a>
                                <button type="reset" class="btn btn-md btn-warning">Reset</button>
                                <button type="submit" class="btn btn-md btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
