@extends('template.login')

@section('login')

<div class="login-box card">
    <div class="card-body">
        <form class="form-horizontal form-material" id="loginform" action=" {{ route('login') }} " method="POST">
            @csrf
            <a href="javascript:void(0)" class="text-center db"><img src="assets/images/logo-icon.png"
                    alt="Home" /><br /><img src="assets/images/logo-text.png" alt="Home" /></a>

            <div class="form-group m-t-40">
                <div class="col-xs-12">
                    <input id="username" type="text" class="form-control @error('username') is-invalid @enderror"
                        name="username" value="{{ old('username') }}" required autocomplete="username" autofocus
                        placeholder="Username">
                    @error('username')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="col-xs-12">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <?php 
            $min = 1;
            $max = 10;

            $random_mat1 = mt_rand($min, $max);
            $random_mat2 = mt_rand($min, $max);

            ?>


            <div class="form-group">
                <div class="col-xs-12">
                    <label for="">Berapa Jumlah {{$random_mat1 . ' + ' . $random_mat2 . ' ?'}} </label>
                    <input id="password" type="number" size="2" name="result" class="form-control" required
                        autocomplete="current-password" placeholder="Masukan Jumlah">
                    <input name="firstnumber" type="hidden" value="{{$random_mat1}}">
                    <input name="secondnumber" type="hidden" value="{{$random_mat2}}">
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <div class="checkbox checkbox-primary pull-left p-t-0">
                        <input id="checkbox-signup" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                        <label for="checkbox-signup"> Remember me </label>
                    </div>
                    <a href="{{ route('password.request') }}" id="to-recover" class="text-dark pull-right"><i
                            class="fa fa-lock m-r-5"></i> Forgot pwd?</a>
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light"
                        type="submit">Log In</button>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 m-t-10 text-center">
                    <div class="social"><a href="javascript:void(0)" class="btn  btn-facebook" data-toggle="tooltip"
                            title="Login with Facebook"> <i aria-hidden="true" class="fa fa-facebook"></i> </a> <a
                            href="javascript:void(0)" class="btn btn-googleplus" data-toggle="tooltip"
                            title="Login with Google"> <i aria-hidden="true" class="fa fa-google-plus"></i> </a> </div>
                </div>
            </div>
            <div class="form-group m-b-0">
                <div class="col-sm-12 text-center">
                    <p>Belum Memiliki Akun? <a href="/register" class="text-primary m-l-5"><b>Daftar</b></a></p>
                </div>
            </div>
        </form>
        <form class="form-horizontal" id="recoverform" action="index.html">
            <div class="form-group ">
                <div class="col-xs-12">
                    <h3>Recover Password</h3>
                    <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
                </div>
            </div>
            <div class="form-group ">
                <div class="col-xs-12">
                    <input class="form-control" type="text" required="" placeholder="Email">
                </div>
            </div>
            <div class="form-group text-center m-t-20">
                <div class="col-xs-12">
                    <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light disabled"
                        type="submit">Reset</button>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection
