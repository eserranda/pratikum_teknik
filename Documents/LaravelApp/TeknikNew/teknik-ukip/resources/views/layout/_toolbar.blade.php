<!--begin::Toolbar-->
<div class="toolbar py-3 py-lg-6" id="kt_toolbar">
    <!--begin::Container-->
    <div id="kt_toolbar_container" class=" container-xxl  d-flex flex-stack flex-wrap gap-2">
        @include('layout/_page-title')
        <!--begin::Actions-->
        <div class="d-flex align-items-center">
            <!--begin::Button-->
            <a href="#" class="btn btn-icon btn-color-primary bg-body w-35px h-35px w-lg-40px h-lg-40px me-3"
                data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
                <i class="ki-duotone ki-file-added fs-2 fs-md-1"><span class="path1"></span><span
                        class="path2"></span></i>
            </a>
            <!--end::Button-->
            <!--begin::Button-->
            <a href="#" class="btn btn-icon btn-color-success bg-body w-35px h-35px w-lg-40px h-lg-40px me-3"
                data-bs-toggle="modal" data-bs-target="#kt_modal_create_campaign">
                <i class="ki-duotone ki-add-files fs-2 fs-md-1"><span class="path1"></span><span
                        class="path2"></span><span class="path3"></span></i>
            </a>
            <!--end::Button-->
            <!--begin::Button-->
            <a href="#" class="btn btn-icon btn-color-warning bg-body w-35px h-35px w-lg-40px h-lg-40px me-3"
                data-bs-toggle="modal" data-bs-target="#kt_modal_create_app">
                <i class="ki-duotone ki-document fs-2 fs-md-1"><span class="path1"></span><span
                        class="path2"></span></i>
            </a>
            <!--end::Button-->
            <!--begin::Daterange-->
            <a href="#" class="btn btn-flex bg-body h-35px h-lg-40px px-5" id="kt_dashboard_daterangepicker"
                data-bs-toggle="tooltip" data-bs-dismiss="click" data-bs-trigger="hover"
                title="Select dashboard daterange">
                <span class="me-4">
                    <span class="text-muted fw-semibold me-1" id="kt_dashboard_daterangepicker_title">Today</span>
                    <span class="text-primary fw-bold" id="kt_dashboard_daterangepicker_date">
                        Sep 19 </span>
                </span>
                <i class="ki-duotone ki-down fs-4 m-0"></i> </a>
            <!--end::Daterange-->
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Container-->
</div>
<!--end::Toolbar-->
