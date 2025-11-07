<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar UMKM</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container py-5">
        <h1 class="text-center mb-4">Daftar UMKM</h1>

        @if(isset($umkms) && count($umkms) > 0)
            <div class="row">
                @foreach($umkms as $umkm)
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $umkm->nama_umkm }}</h5>
                                <p class="card-text">{{ $umkm->deskripsi ?? 'Belum ada deskripsi' }}</p>
                                <p><strong>Alamat:</strong> {{ $umkm->alamat ?? '-' }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            <div class="alert alert-warning text-center">
                Belum ada data UMKM.
            </div>
        @endif
    </div>

</body>
</html>
