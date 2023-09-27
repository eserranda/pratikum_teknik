@extends('.index')
@push('styles')
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
@endpush

@section('content')
    <div class="card mb-6 mb-xl-9">
        <div class="card-header">
            <h3 class="card-title">Daftar Alat Praktikum Laboratorium</h3>
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
                            <th>Nama Alat</th>
                            <th>Laboratorium</th>
                            <th>Percobaan</th>
                            <th>No ID</th>
                            <th>Tipe</th>
                            <th>Jumlah</th>
                            <th>Satuan</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($daftar_alat as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_alat }}</td>
                                <td>{{ $row->laboratorium }}</td>
                                <td>{{ $row->percobaan }}</td>
                                <td>{{ $row->nomor_id }}</td>
                                <td>{{ $row->tipe }}</td>
                                <td>{{ $row->jumlah }}</td>
                                <td>{{ $row->satuan }}</td>
                                <td> <a href="#" class="btn btn-sm btn-icon btn-danger btn-delete"
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

    <div class="modal fade" id="kt_modal_new_target" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content rounded">
                <div class="modal-header pb-0 border-0 justify-content-end">
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </div>
                </div>

                <div class="modal-body scroll-y px-10 px-lg-15 pt-0 pb-15">
                    <form id="kt_modal_new_target_form" class="form">

                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Tambah Alat Praktikum Laboratorium</h1>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nama Alat</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="nama_alat" id="nama_alat"
                                placeholder="Nama Alat" />
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Nama Laboratorium</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Jenis Lab" name="laboratorium" id="laboratorium">
                                <option value="">Pilih Lab...</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Percobaan</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Percobaan" name="percobaan" id="percobaan">
                                <option value="">Pilih Percobaan</option>
                                <option value="-">-</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">No ID</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="nomor_id" id="nomor_id"
                                placeholder="Nomor ID" />
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Tipe</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="tipe" id="tipe"
                                placeholder="Tipe" />
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Jumlah</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" name="jumlah" id="jumlah"
                                placeholder="Jumlah" />
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Satuan</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih satuan" name="satuan" id="satuan">
                                <option value="Paket">Paket</option>
                                <option value="Unit">Unit</option>
                                <option value="Set">Set</option>

                            </select>
                        </div>

                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel"
                                class="btn btn-light me-3">Reset</button>
                            <button type="submit" id="kt_modal_new_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                                <span class="indicator-progress">Please wait...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const deleteButtons = document.querySelectorAll(".btn-delete");

                deleteButtons.forEach(function(button) {
                    button.addEventListener("click", function(event) {
                        event.preventDefault();

                        const id = this.getAttribute("data-id");

                        Swal.fire({
                            title: "Konfirmasi",
                            text: "Apakah Anda yakin ingin menghapus data ini?",
                            icon: "warning",
                            showCancelButton: true,
                            confirmButtonText: "Ya, hapus!",
                            cancelButtonText: "Batal",
                            customClass: {
                                confirmButton: "btn btn-danger",
                                cancelButton: "btn btn-secondary"
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                fetch(`/elektro/hapus_daftar_alat/${id}`, {
                                        method: "DELETE",
                                        headers: {
                                            "X-CSRF-TOKEN": document.querySelector(
                                                'meta[name="csrf-token"]').content,
                                        },
                                    })
                                    .then((response) => {
                                        if (response.status === 200) {
                                            location.reload();
                                        } else {
                                            Swal.fire({
                                                icon: "error",
                                                title: "Oops...",
                                                text: "Terjadi kesalahan saat menghapus data mahasiswa!",
                                            });
                                        }
                                    })
                                    .catch((error) => {
                                        Swal.fire({
                                            icon: "error",
                                            title: "Oops...",
                                            text: error.message,
                                        });
                                    });
                            }
                        });
                    });
                });

                const form = document.getElementById('kt_modal_new_target_form');
                const jenisLabSelect = document.getElementById('laboratorium');
                const jenisPercobaanSelect = document.getElementById('percobaan');

                // Ambil "nama" bukan "id" dari opsi yang dipilih
                function getSelectedNamaLabs() {
                    const selectedOption = jenisLabSelect.options[jenisLabSelect.selectedIndex];
                    return selectedOption ? selectedOption.textContent : '';
                }

                function getSelectedNamaPercobaan() {
                    const selectedOption = jenisPercobaanSelect.options[jenisPercobaanSelect.selectedIndex];
                    return selectedOption ? selectedOption.textContent : '';
                }

                fetch('/elektro/get_name_labs')
                    .then(response => response.json())
                    .then(data => {
                        const selectJenisLab = document.getElementById('laboratorium');

                        data.forEach(item => {
                            const option = document.createElement('option');
                            option.value = item.nama; // Mengambil "nama" sebagai nilai opsi
                            option.textContent = item.nama;
                            selectJenisLab.appendChild(option);
                        });
                    })
                    .catch(error => console.error(error));

                fetch('/elektro/get_name_percobaan')
                    .then(response => response.json())
                    .then(data => {
                        const selectJenisLab = document.getElementById('percobaan');

                        data.forEach(item => {
                            const option = document.createElement('option');
                            option.value = item.nama; // Mengambil "nama" sebagai nilai opsi
                            option.textContent = item.nama;
                            selectJenisLab.appendChild(option);
                        });
                    })
                    .catch(error => console.error(error));

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const nama_alat = document.getElementById('nama_alat').value;
                    const laboratorium = getSelectedNamaLabs(); // Memanggil fungsi untuk mendapatkan "nama"
                    const percobaan = getSelectedNamaPercobaan(); // Memanggil fungsi untuk mendapatkan "nama"
                    const nomor_id = document.getElementById('nomor_id').value;
                    const tipe = document.getElementById('tipe').value;
                    const jumlah = document.getElementById('jumlah').value;
                    const satuan = document.getElementById('satuan').value;

                    const data = {
                        nama_alat: nama_alat,
                        laboratorium: laboratorium,
                        percobaan: percobaan,
                        tipe: tipe,
                        nomor_id: nomor_id,
                        jumlah: jumlah,
                        satuan: satuan,
                    };

                    fetch('/elektro/save_daftar_alat', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content
                            },
                            body: JSON.stringify(data),
                        })
                        .then((response) => {
                            if (response.status === 200) {
                                $('#kt_modal_new_target').modal('hide');
                                location.reload();
                            } else {
                                alert('Terjadi kesalahan saat menyimpan data mahasiswa!');
                            }
                        })
                        .catch((error) => {
                            alert(error);
                        });
                });


                const editButtons = document.querySelectorAll(".btn-edit");
                const modalEdit = document.getElementById("kt_modal_edit_target");

                editButtons.forEach(function(button) {
                    button.addEventListener("click", function(event) {
                        event.preventDefault();

                        const id = this.getAttribute("data-id");

                        fetch(`/elektro/edit/${id}`)
                            .then((response) => response.json())
                            .then((data) => {
                                if (data) {
                                    // Data ditemukan, isi modal dengan data
                                    document.getElementById("id_mhs").value = data.id;
                                    document.getElementById("edit_nama_mhs").value = data.nama_mhs;
                                    document.getElementById("edit_nim").value = data.nim;

                                    $(modalEdit).modal("show");
                                } else {
                                    alert("Data tidak ditemukan.");
                                }
                            })
                            .catch((error) => {
                                alert(error);
                            });
                    });
                });

                const editForm = document.getElementById("kt_modal_edit_target_form");

                editForm.addEventListener("submit", function(event) {
                    event.preventDefault();

                    const id = document.getElementById("id_mhs").value;
                    const namaMhs = document.getElementById("edit_nama_mhs").value;
                    const nim = document.getElementById("edit_nim").value;
                    const data = {
                        id: id,
                        nama_mhs: namaMhs,
                        nim: nim,
                    };
                    fetch(`/elektro/update/ `, {
                            method: "PUT",
                            headers: {
                                "Content-Type": "application/json",
                                "Accept": "application/json",
                                "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').content,
                            },
                            body: JSON.stringify(data),
                        })

                        .then((response) => response.json())
                        .then((result) => {
                            if (result.status === "success") {
                                $("#kt_modal_edit_target").modal("hide");
                                location.reload();
                            } else {
                                alert("Terjadi kesalahan saat mengupdate data mahasiswa.");
                            }
                        })
                        .catch((error) => {
                            console.log(error);
                        });

                });

            });
        </script>
    @endpush
@endsection
