<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5" style="max-width: 600px;">
        <!-- Card Form Monokrom -->
        <div class="card border border-light-subtle shadow-sm rounded-3">
            <div class="card-body p-4">
                
                <!-- Header Form -->
                <div class="mb-4 border-bottom pb-3">
                    <h5 class="fw-bold text-dark mb-1">Tambah Data Siswa</h5>
                    <p class="text-secondary small mb-0">Isi formulir di bawah untuk menambahkan siswa baru.</p>
                </div>

                <form action="{{ route('siswas.store') }}" method="POST">
                    @csrf

                    <!-- Input Nama -->
                    <div class="mb-3">
                        <label for="nama" class="form-label fw-semibold text-dark small">Nama Siswa</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}" placeholder="Masukkan nama siswa">
                        
                        @error('nama')
                            <div class="invalid-feedback small">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Input Kelas -->
                    <div class="mb-4">
                        <label for="kelas" class="form-label fw-semibold text-dark small">Kelas</label>
                        <input type="text" class="form-control @error('kelas') is-invalid @enderror" id="kelas" name="kelas" value="{{ old('kelas') }}" placeholder="Contoh: 10 IPA 1">
                        
                        @error('kelas')
                            <div class="invalid-feedback small">{{ $message }}</div>
                        @enderror
                    </div>

                    <!-- Tombol Aksi -->
                    <div class="d-flex justify-content-between align-items-center pt-2">
                        <a href="{{ route('siswas.index') }}" class="btn btn-outline-secondary btn-sm px-3">
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-dark btn-sm px-4">
                            Simpan Data
                        </button>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>