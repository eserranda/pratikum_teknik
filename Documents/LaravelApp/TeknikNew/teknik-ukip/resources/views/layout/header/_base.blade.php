<!--begin::Header-->
<div id="kt_header" class="header">
    <!--begin::Header top-->
    <div class="header-top d-flex align-items-stretch flex-grow-1">
        <!--begin::Container-->
        <div class="d-flex  container-xxl  align-items-stretch">
            <!--begin::Brand-->
            <div class="d-flex align-items-center align-items-lg-stretch me-5 flex-row-fluid">
                <!--begin::Heaeder navs toggle-->
                <button
                    class="d-lg-none btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px ms-n3 me-2"
                    id="kt_header_navs_toggle">
                    <i class="ki-duotone ki-abstract-14 fs-2"><span class="path1"></span><span class="path2"></span></i>
                </button>
                <!--end::Heaeder navs toggle-->
                <!--begin::Logo-->
                <a href="/" class="d-flex align-items-center">
                    <img alt="Logo" src="{{ asset('assets/media/logos/demo20.svg') }}" class="h-25px h-lg-30px" />
                </a>
                <!--end::Logo-->
                <!--begin::Tabs wrapper-->
                <div class="align-self-end overflow-auto" id="kt_brand_tabs">
                    @include('layout/header/__navs-tabs')
                </div>
                <!--end::Tabs wrapper-->
            </div>
            <!--end::Brand-->
            @include('layout/header/__topbar')
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header top-->
    <!--begin::Header navs-->
    <div class="header-navs d-flex align-items-stretch flex-stack h-lg-70px w-100 py-5 py-lg-0 overflow-hidden overflow-lg-visible"
        id="kt_header_navs" data-kt-drawer="true" data-kt-drawer-name="header-menu"
        data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true"
        data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start"
        data-kt-drawer-toggle="#kt_header_navs_toggle" data-kt-swapper="true" data-kt-swapper-mode="append"
        data-kt-swapper-parent="{default: '#kt_body', lg: '#kt_header'}">
        <!--begin::Container-->
        <div class="d-lg-flex  container-xxl  w-100">
            <!--begin::Wrapper-->
            <div class="d-lg-flex flex-column justify-content-lg-center w-100" id="kt_header_navs_wrapper">
                @include('layout/header/__navs')
            </div>
            <!--end::Wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Header navs-->
</div>
<!--end::Header-->
