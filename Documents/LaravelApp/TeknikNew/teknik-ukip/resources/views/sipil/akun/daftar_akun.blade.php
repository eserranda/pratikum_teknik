@extends('.index')

@section('content')
    <div class=" d-flex justify-content-center align-items-center">
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

                <form class="form w-100" method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="fv-row mb-8">
                        <input type="text" placeholder="username" id="username" name="username"
                            class="form-control bg-transparent" />
                    </div>
                    <div class="fv-row mb-8">
                        <input type="password" placeholder="Password" id="password" name="password"
                            class="form-control bg-transparent" />
                    </div>
                    <div class="d-grid mb-3">
                        <button type="submit" class="btn btn-primary">
                            <span>Login</span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group row">
            <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>
            <div class="col-md-6">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-4 col-form-label text-md-right">Username</label>
            <div class="col-md-6">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                    name="username" value="{{ old('username') }}" required autocomplete="username">
                @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                    name="email" value="{{ old('email') }}" required autocomplete="email">
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" required autocomplete="new-password">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>

        <div class="form-group row">
            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm Password</label>
            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                    autocomplete="new-password">
            </div>
        </div>

        <div class="form-group row">
            <label for="role" class="col-md-4 col-form-label text-md-right">Role</label>
            <div class="col-md-6">
                <select id="role" name="role" class="form-control">
                    <option value="sipil">Sipil</option>
                    <option value="elektro">Elektro</option>
                    <option value="kimia">Kimia</option>
                    <option value="mahasiswa">Mahasiswa</option>
                </select>
            </div>
        </div>

        <div class="form-group row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form> --}}
@endsection
