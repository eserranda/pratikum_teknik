<!--begin::Header tabs wrapper-->
<div class="header-tabs overflow-auto mx-4 ms-lg-10 mb-5 mb-lg-0" id="kt_header_tabs" data-kt-swapper="true"
    data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_header_navs_wrapper', lg: '#kt_brand_tabs'}">
    <!--begin::Header tabs-->
    <ul class="nav flex-nowrap text-nowrap">
        {{-- <li class="nav-item">
            <a class="nav-link active" data-bs-toggle="tab" href="#kt_header_navs_tab_1">Features</a>
        </li> --}}
        @if (session('role') === 'sipil')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('sipil*') ? 'active' : '' }}" data-bs-toggle="tab"
                    href="#kt_header_navs_tab_2">Teknik Sipil</a>
            </li>
        @endif

        @if (session('role') === 'elektro')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('elektro*') ? 'active' : '' }}" data-bs-toggle="tab"
                    href="#kt_header_navs_tab_3">Teknik Elektro</a>
            </li>
        @endif

        @if (session('role') === 'kimia')
            <li class="nav-item">
                <a class="nav-link {{ Request::is('kimia*') ? 'active' : '' }}" data-bs-toggle="tab"
                    href="#kt_header_navs_tab_4">Teknik Kimia</a>
            </li>
        @endif
    </ul>
    <!--begin::Header tabs-->
</div>
<!--end::Header tabs wrapper-->
