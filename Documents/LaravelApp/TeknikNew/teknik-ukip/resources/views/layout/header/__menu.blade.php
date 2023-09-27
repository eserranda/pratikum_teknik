<!--begin::Menu wrapper-->
<div class="header-menu flex-column align-items-stretch flex-lg-row">
    <!--begin::Menu-->
    <div class="menu menu-rounded menu-column menu-lg-row menu-root-here-bg-desktop menu-active-bg menu-title-gray-700 menu-state-primary menu-arrow-gray-400 fw-semibold align-items-stretch flex-grow-1 px-2 px-lg-0"
        id="#kt_header_menu" data-kt-menu="true">
        <!--begin:Menu item-->
        <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item here show menu-here-bg menu-lg-down-accordion me-0 me-lg-2">
            <span class="menu-link py-3">
                <span class="menu-title">Dashboards</span><span class="menu-arrow d-lg-none"></span>
            </span>
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0 w-100 w-lg-850px">
                {{-- @include('layout/partials/header/_menu/__dashboards') --}}
            </div>
        </div>
        {{-- <div data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="bottom-start"
            class="menu-item menu-lg-down-accordion me-0 me-lg-2"><!--begin:Menu link--><span
                class="menu-link py-3"><span class="menu-title">Pages</span><span
                    class="menu-arrow d-lg-none"></span></span><!--end:Menu link--><!--begin:Menu sub-->
            <div class="menu-sub menu-sub-lg-down-accordion menu-sub-lg-dropdown p-0">
                @include('layout/partials/header/_menu/__pages')  
            </div><!--end:Menu sub-->
        </div> --}}
        <!--begin:Menu item-->
    </div>
</div>
