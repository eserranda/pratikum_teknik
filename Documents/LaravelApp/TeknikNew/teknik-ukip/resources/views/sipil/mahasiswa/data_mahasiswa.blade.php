@extends('.index')
@push('styles')
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
@endpush

@section('content')
    <div class="card mb-6 mb-xl-9">
        <div class="card-header">
            <h3 class="card-title">Data Mahasiswa</h3>
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
                            <th>Nama</th>
                            <th>Nim</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mahasiswas as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->nama_mhs }}</td>
                                <td>{{ $row->nim }}</td>
                                <td> <a href="#" class="btn btn-sm btn-icon btn-danger btn-delete"
                                        data-id="{{ $row->id }}">
                                        <i class="las la-trash fs-2 text-dark"></i>
                                    </a>
                                    <a href="#" class="btn btn-sm btn-icon btn-success btn-edit"
                                        data-id="{{ $row->id }}">
                                        <i class="las la-edit fs-2"></i>
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
                            <h1 class="mb-3">Tambah Data mahasiswa</h1>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nama Mahasiswa</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="nama_mhs" id="nama_mhs"
                                placeholder="Nama Mahasiswa" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">NIM</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" name="nim" id="nim"
                                placeholder="Nomor Induk Mahasiswa" />
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_modal_new_target_cancel" class="btn btn-light me-3">Reset</button>
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

    <div class="modal fade" id="kt_modal_edit_target" tabindex="-1" aria-hidden="true">
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
                    <form id="kt_modal_edit_target_form" class="form">

                        <div class="mb-13 text-center">
                            <h1 class="mb-3">Edit Data Mahasiswa</h1>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Nama Mahasiswa</span>
                            </label>
                            <input type="hidden" class="form-control form-control-solid" name="id_mhs" id="id_mhs" />
                            <input type="text" class="form-control form-control-solid" name="edit_nama_mhs"
                                id="edit_nama_mhs" placeholder="Nama Mahasiswa" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">NIM</span>
                            </label>
                            <input type="number" class="form-control form-control-solid" name="edit_nim" id="edit_nim"
                                placeholder="Nomor Induk Mahasiswa" />
                        </div>
                        <div class="text-center">
                            <button type="reset" id="kt_modal_edit_target_cancel"
                                class="btn btn-light me-3">Reset</button>
                            <button type="submit" id="kt_modal_edit_target_submit" class="btn btn-primary">
                                <span class="indicator-label">Update</span>
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
                const editButtons = document.querySelectorAll(".btn-edit");
                const modalEdit = document.getElementById("kt_modal_edit_target");

                editButtons.forEach(function(button) {
                    button.addEventListener("click", function(event) {
                        event.preventDefault();

                        const id = this.getAttribute("data-id");

                        fetch(`/sipil/edit/${id}`)
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
                    fetch(`/sipil/update/ `, {
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
                                fetch(`/sipil/hapus_mhs/${id}`, {
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

                form.addEventListener('submit', function(event) {
                    event.preventDefault();

                    const namaMhs = document.getElementById('nama_mhs').value;
                    const nim = document.getElementById('nim').value;

                    const data = {
                        nama_mhs: namaMhs,
                        nim: nim,
                    };

                    fetch('{{ route('save_mhs_sipil') }}', {
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

            });
        </script>
    @endpush
@endsection
