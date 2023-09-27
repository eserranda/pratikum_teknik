<!--begin::Topbar-->
<div class="d-flex align-items-center flex-row-auto">
    <!--begin::Search-->
    <div class="d-flex align-items-stretch ms-1">
        @include('partials/search/_dropdown')
    </div>
    <!--end::Search-->
    <!--begin::Activities-->
    <div class="d-flex align-items-center ms-1">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px"
            id="kt_activities_toggle">
            <i class="ki-duotone ki-chart-simple fs-1"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span><span class="path4"></span></i>
        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->
    <!--begin::Chat-->
    <div class="d-flex align-items-center ms-1">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px position-relative"
            id="kt_drawer_chat_toggle">
            <i class="ki-duotone ki-message-text-2 fs-2"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span></i>
            <!--begin::Notification animation-->
            <span
                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
            <!--end::Notification animation-->
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--end::Chat-->
    <!--begin::Quick links-->
    <div class="d-flex align-items-center ms-1">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-color-white bg-hover-white bg-hover-opacity-10 w-35px h-35px h-md-40px w-md-40px"
            data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <i class="ki-duotone ki-element-11 fs-2"><span class="path1"></span><span class="path2"></span><span
                    class="path3"></span><span class="path4"></span></i>
        </div>
        @include('partials/menus/_quick-links-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--begin::Quick links-->
    <!--begin::Theme mode-->
    <div class="d-flex align-items-center ms-1">
        @include('partials/theme-mode/_main')
    </div>
    <!--end::Theme mode-->
    <!--begin::User-->
    <div class="d-flex align-items-center ms-1" id="kt_header_user_menu_toggle">
        <!--begin::User info-->
        <div class="btn btn-flex align-items-center bg-hover-white bg-hover-opacity-10 py-2 ps-2 pe-2 me-n2"
            data-kt-menu-trigger="click" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
            <!--begin::Name-->
            <div class="d-none d-md-flex flex-column align-items-end justify-content-center me-2 me-md-4">
                <span class="text-white opacity-75 fs-8 fw-semibold lh-1 mb-1">User</span>
                <span class="text-white fs-8 fw-bold lh-1">Admin</span>
            </div>
            <!--end::Name-->
            <!--begin::Symbol-->
            <div class="symbol symbol-30px symbol-md-40px">
                <img src="{{ asset('assets') }}/media/avatars/300-1.jpg" alt="image" />
            </div>
            <!--end::Symbol-->
        </div>
        <!--end::User info-->
        @include('partials/menus/_user-account-menu')
    </div>
    <!--end::User -->
</div>
<!--end::Topbar-->
