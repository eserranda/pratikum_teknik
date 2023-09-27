@extends('.index')
@push('styles')
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
@endpush

@section('content')
    <div class="card mb-6 mb-xl-9">
        <div class="card-header">
            <h3 class="card-title">Download Modul Pratikum Teknik Elektro</h3>
            <div class="card-toolbar">
                <a href="#" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                    data-bs-target="#kt_modal_new_target">Tambah Data </a>
            </div>
        </div>


        <div class="card-body pt-9 pb-0">
            <div class="table-responsive">
                <table class="table table-bordered" id="data-table">
                    <thead>
                        <tr class="fw-bold fs-6 text-gray-800">
                            <th>No</th>
                            <th>Nama Modul</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($modulelektro as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama }}</td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-primary btn-download"
                                        data-id="{{ $row->id }}">
                                        Download
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-danger btn-delete"
                                        data-id="{{ $row->id }}">
                                        <i class="las la-trash fs-2 text-dark"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Modul</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="modulForm" method="POST" action="/elektro/upload_endpoint" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="nama_modul" class="form-label">Nama Modul</label>
                            <input type="text" class="form-control" id="nama_modul" name="nama_modul" required>
                        </div>
                        <div class="mb-3">
                            <label for="file_modul" class="form-label">Upload File</label>
                            <input type="file" class="form-control" id="file_modul" name="file_modul"
                                accept=".zip, .doc, .docx, .xls, .xlsx" required>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            const downloadButtons = document.querySelectorAll('.btn-download');

            downloadButtons.forEach(button => {
                button.addEventListener('click', function(e) {
                    e.preventDefault();

                    const id = this.getAttribute('data-id');

                    const downloadUrl = `/elektro/download/${id}`;
                    window.location.href = downloadUrl;
                });
            });

            const modulForm = document.getElementById('modulForm');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            modulForm.addEventListener('submit', function(e) {
                e.preventDefault();

                const formData = new FormData(modulForm);

                // Menambahkan header X-CSRF-TOKEN
                const headers = new Headers({
                    'X-CSRF-TOKEN': csrfToken,
                });

                fetch('/elektro/upload_endpoint', {
                        method: 'POST',
                        headers: headers,
                        body: formData,
                    })
                    .then(response => response.json())
                    .then(data => {
                        console.log(data);
                        if (data.message === 'success') {
                            alert('File Berhasil Di Upload');
                            $('#kt_modal_new_target').modal('hide');
                            location.reload();
                        } else {
                            alert('Gagal mengupload file');
                        }
                    })
                    .catch(error => {
                        // Handle error
                        alert('Terjadi kesalahan:', error);
                    });
            });
        </script>
        {{-- <script>
            const modulForm = document.getElementById('modulForm');

            modulForm.addEventListener('submit', function(event) {
                event.preventDefault();

                const namaModul = document.getElementById('nama_modul').value;
                const fileModul = document.getElementById('file_modul').files[0]; // Mengambil file yang diunggah

                const formData = new FormData(); // Membuat objek FormData untuk mengirim form

                formData.append('nama_modul', namaModul); // Menambahkan Nama Modul ke FormData
                formData.append('file_modul', fileModul); // Menambahkan File ke FormData

                fetch('/elektro/upload_endpoint', {
                        method: 'POST',
                        body: formData,
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        },
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (response.status === 200) {
                            alert('File berhasil diunggah.');
                            $('#kt_modal_new_target').modal('hide');
                            location.reload();
                        } else {
                            alert('Terjadi kesalahan saat mengunggah file.');
                        }
                    })
                    .catch(error => {
                        console.error(error);
                        alert('Terjadi kesalahan saat mengunggah file.');
                    });
            });
        </script> --}}
    @endpush
@endsection
