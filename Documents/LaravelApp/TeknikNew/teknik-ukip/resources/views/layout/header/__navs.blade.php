<!--begin::Header tab content-->
<div class="tab-content" data-kt-scroll="true" data-kt-scroll-activate="{default: true, lg: false}"
    data-kt-scroll-height="auto" data-kt-scroll-offset="70px">
    <!--begin::Tab panel-->
    {{-- <div class="tab-pane fade active show" id="kt_header_navs_tab_1">
        @include('layout/header/__menu')
    </div> --}}
    <!--end::Tab panel-->
    <!--begin::Tab panel-->
    <div class="tab-pane fade  {{ Request::is('sipil*') ? 'active show' : '' }}" id="kt_header_navs_tab_2">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-warning fw-bold" href="/sipil/jadwal_praktikum/">Jadwal Praktikum</a>
                <a class="btn btn-sm btn-light-primary fw-bold" href="/sipil/data_mahasiswa/">Data
                    Mahasiswa</a>
                <a class="btn btn-sm btn-light-success fw-bold" href="/sipil/daftar_alat/">Daftar
                    Alat Praktikum Laboratorium</a>
                <a class="btn btn-sm btn-light-danger fw-bold" href="/sipil/pelaksana_labs">Nama dan Pelaksana Lab</a>
                <a class="btn btn-sm btn-light-danger fw-bold" href="/sipil/laboratorium">Laboratorium</a>
                <a class="btn btn-sm btn-secondary fw-bold" href="/sipil/daftar_akun">Daftarkan Akun</a>
            </div>
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-info fw-bold" href="/sipil/modul">Modul
                </a>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Tab panel-->
    <!--begin::Tab panel-->
    <div class="tab-pane fade {{ Request::is('elektro*') ? 'active show' : '' }}" id="kt_header_navs_tab_3">
        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-primary fw-bold" href="/elektro/data_mahasiswa">Data
                    Mahasiswa
                </a>
                <a class="btn btn-sm btn-light-success fw-bold" href="/elektro/daftar_alat">Daftar Alat
                    Laboratorium</a>
                <a class="btn btn-sm btn-light-danger fw-bold" href="/elektro/jadwal_praktikum">Jadwal Praktikum</a>
                <a class="btn btn-sm btn-light-info fw-bold" href="/elektro/laboratorium">Laboratorium</a>
                <a class="btn btn-sm btn-light-warning fw-bold" href="/elektro/percobaan">Percobaan Elektro</a>
            </div>
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-info fw-bold" href="/elektro/modul">Modul</a>
            </div>
        </div>
    </div>
    <!--end::Tab panel-->
    <!--begin::Tab panel-->
    <div class="tab-pane fade {{ Request::is('kimia*') ? 'active show' : '' }}" id="kt_header_navs_tab_4">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-primary fw-bold" href="/kimia/data_mahasiswa">Data
                    Mahasiswa</a>
                <a class="btn btn-sm btn-light-danger fw-bold" href="?page=apps/file-manager/folders">File Manager</a>
            </div>
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-info fw-bold" href="?page=apps/subscriptions/view">More Apps</a>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Tab panel-->
    <!--begin::Tab panel-->
    <div class="tab-pane fade" id="kt_header_navs_tab_5">
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-lg-row flex-lg-stack flex-wrap gap-2 px-4 px-lg-0">
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-primary fw-bold"
                    href="https://preview.keenthemes.com/html/metronic/docs">Documentation</a>
                <a class="btn btn-sm btn-light-success fw-bold"
                    href="?page=documentation/getting-started/video-tutorials">Video Tutorials</a>
                <a class="btn btn-sm btn-light-danger fw-bold" href="?page=layout-builder">Layout Builder</a>
            </div>
            <div class="d-flex flex-column flex-lg-row gap-2">
                <a class="btn btn-sm btn-light-info fw-bold"
                    href="?page=documentation/getting-started/changelog">Changelog</a>
            </div>
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Tab panel-->
</div>
<!--end::Header tab content-->
