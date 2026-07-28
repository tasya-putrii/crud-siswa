<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container my-5">
        <!-- Header Minimalis -->
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h4 class="fw-bold mb-0 text-dark">Data Siswa</h4>
                <small class="text-secondary">Daftar seluruh siswa terdaftar</small>
            </div>
            <a href="{{ route('siswas.create') }}" class="btn btn-dark btn-sm px-3">
                + Tambah Siswa
            </a>
        </div>

        <!-- Tabel Monokrom -->
        <div class="card border border-light-subtle shadow-sm rounded-3">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover align-middle mb-0">
                        <thead class="table-light border-bottom">
                            <tr class="text-secondary small">
                                <th class="ps-4 py-3" style="width: 60px;">NO</th>
                                <th class="py-3">NAMA</th>
                                <th class="py-3">KELAS</th>
                                <th class="text-end pe-4 py-3" style="width: 160px;">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswas as $index => $siswa)
                                <tr>
                                    <td class="ps-4 text-muted small">{{ $index + 1 }}</td>
                                    <td class="fw-semibold text-dark">{{ $siswa->nama }}</td>
                                    <td>
                                        <span class="badge bg-light text-dark border fw-normal px-2 py-1">
                                            {{ strtoupper($siswa->kelas) }}
                                        </span>
                                    </td>
                                    <td class="text-end pe-4">
                                        <form onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');" action="{{ route('siswas.destroy', $siswa->id) }}" method="POST">
                                            <a href="{{ route('siswas.edit', $siswa->id) }}" class="btn btn-link text-dark text-decoration-none btn-sm me-2 fw-medium">
                                                Edit
                                            </a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-dark btn-sm px-2 py-1 small">
                                                Hapus
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center py-4 text-muted small">
                                        Belum ada data siswa.
                                    </td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap 5 JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>