<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>Login </title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://keenthemes.com/metronic" />
    <meta property="og:site_name" content="Teknik Ukip Makassar" />
    <link rel="shortcut icon" href="{{ asset('assets') }}/media/logos/favicon.ico" />
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" /> <!--end::Fonts-->

    <link href="{{ asset('assets') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
    @stack('styles')
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking)
        if (window.top != window.self) {
            window.top.location.replace(window.self.location.href);
        }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="header-extended header-fixed header-tablet-and-mobile-fixed">
    <div class="content d-flex justify-content-center align-items-center">
        <div class="bg-body rounded-4 w-md-600px p-20">
            <div class="d-flex flex-center flex-column flex-column-fluid px-lg-10 pb-15 pb-lg-20">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                <form class="form w-100" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="text-center mb-11">
                        <h1 class="text-dark fw-bolder mb-3">Login</h1>
                    </div>
                    <div class="fv-row mb-8">
                        <!--begin::username-->
                        <input type="text" placeholder="username" id="username" name="username"
                            class="form-control bg-transparent" />
                        <!--end::username-->
                    </div>
                    <!--end::Input group=-->
                    <div class="fv-row mb-8">
                        <input type="password" placeholder="Password" id="password" name="password"
                            class="form-control bg-transparent" />
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">
                            <!--begin::Indicator label-->
                            <span>Login</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @include('layout/_footer')

    <script>
        var hostUrl = "assets/";
    </script>
    <script src="{{ asset('assets') }}/plugins/global/plugins.bundle.js"></script>
    <script src="{{ asset('assets') }}/js/scripts.bundle.js"></script>
</body>

</html>
