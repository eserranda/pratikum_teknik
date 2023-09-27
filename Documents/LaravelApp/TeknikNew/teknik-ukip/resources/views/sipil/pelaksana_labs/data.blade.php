@extends('.index')
@push('styles')
    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
@endpush

@section('content')
    <div class="card mb-6 mb-xl-9">
        <div class="card-header">
            <h3 class="card-title">Nama Lab dan Pelaksana lab</h3>
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
                            <th>Laboratorium</th>
                            <th>Praktikum</th>
                            <th>Pengelola Lab</th>
                            <th>Pelaksana Lab</th>
                            <th>Opsi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pelaksana_labs as $row)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $row->labs }}</td>
                                <td>{{ $row->praktikum }}</td>
                                <td>{{ $row->pengelola_labs }}</td>
                                <td>{{ $row->pelaksana_labs }}</td>
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
                            <h1 class="mb-3">Tambah Data Nama dan Pelaksana lab</h1>
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="required fs-6 fw-semibold mb-2">Nama Laboratorium</label>
                            <select class="form-select form-select-solid" data-control="select2" data-hide-search="true"
                                data-placeholder="Pilih Jenis Lab" name="labs" id="labs">
                                <option value="">Pilih Lab...</option>
                            </select>
                        </div>

                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Praktikum</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="praktikum" id="praktikum"
                                placeholder="Praktikum" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Pengelola Laboratorium</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="pengelola_labs"
                                id="pengelola_labs" placeholder="Pengelola Laboratorium" />
                        </div>
                        <div class="d-flex flex-column mb-8 fv-row">
                            <label class="d-flex align-items-center fs-6 fw-semibold mb-2">
                                <span class="required">Pelaksana Laboratorium</span>
                            </label>
                            <input type="text" class="form-control form-control-solid" name="pelaksana_labs"
                                id="pelaksana_labs" placeholder="Pelaksana Laboratorium" />
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


    @push('scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {

                const form = document.getElementById('kt_modal_new_target_form');
                const jenisLabSelect = document.getElementById('labs');

                // Ambil "nama" bukan "id" dari opsi yang dipilih
                function getSelectedNama() {
                    const selectedOption = jenisLabSelect.options[jenisLabSelect.selectedIndex];
                    return selectedOption ? selectedOption.textContent : '';
                }

                fetch('/sipil/get_name_labs')
                    .then(response => response.json())
                    .then(data => {
                        const selectJenisLab = document.getElementById('labs');

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

                    const labs = getSelectedNama(); // Memanggil fungsi untuk mendapatkan "nama"
                    const praktikum = document.getElementById('praktikum').value;
                    const pengelola_labs = document.getElementById('pengelola_labs').value;
                    const pelaksana_labs = document.getElementById('pelaksana_labs').value;

                    const data = {
                        praktikum: praktikum,
                        labs: labs,
                        pengelola_labs: pengelola_labs,
                        pelaksana_labs: pelaksana_labs,
                    };

                    fetch('/sipil/save_pelaksana_labs', {
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
                                fetch(`/sipil/hapus_pelaksana_labs/${id}`, {
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
            });
        </script>
    @endpush
@endsection
