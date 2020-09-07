@extends('template.login')

@section('login')
<div class="login-box card">
    <div class="card-body">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <a href="javascript:void(0)" class="text-center db"><img src="assets/images/logo-icon.png"
                    alt="Home" /><br /><img src="assets/images/logo-text.png" alt="Home" /></a>
            <h3 class="box-title m-t-40 m-b-0">Register Now</h3><small>Create your account and enjoy</small>
            <div class="form-group m-t-20">
                <div class="col-xs-12">
                    <input id="name" placeholder="Nama Lengkap" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group m-t-20">
                <div class="col-xs-12">
                    <input id="username" placeholder="Username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="form-group ">
                <div class="col-xs-12">
                    <input id="email" placeholder="Email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                </div>
            </div>
            {{-- <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox checkbox-primary p-t-0">
                        <input id="checkbox-signup" type="checkbox">
                        <label for="checkbox-signup"> I agree to all <a href="#">Terms</a></label>
                    </div>
                </div>
            </div> --}}
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                        type="submit">Sign
                        Up</button>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Sudah Memiliki Akun? <a href="/login" class="text-info m-l-5"><b>Sign In</b></a></p>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection