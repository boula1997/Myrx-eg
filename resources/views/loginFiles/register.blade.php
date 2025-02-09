<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Registration Form</title>

    <!-- Custom fonts for this template-->
    <link href="{{asset('public/customAuth/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/customAuth/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container" style="margin-top: -102px;">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            @isset($url)
                            {{-- <div>kk {{ $url }}</div> --}}
                            <form method="POST" action='{{ url("register/$url") }}' aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                            @else
                            {{-- <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}" enctype="multipart/form-data"> --}}
                            <form method="POST" action="" aria-label="{{ __('Register') }}" enctype="multipart/form-data">
                            @endisset
                            {{-- <form method="POST" class="user" action="{{ route('register') }}"> --}}
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="fname" type="text" class="form-control form-control-user @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname') }}" placeholder="First Name" required autocomplete="fname" autofocus>
                                            @error('fname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="lname" type="text" class="form-control form-control-user @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname') }}" placeholder="Last Name" required autocomplete="lname" autofocus>
                                            @error('lname')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input id="email" type="email" class="form-control form-control-user @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Email Address" required autocomplete="email">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                </div>
                                {{-- <div class="form-group">
                                    <input id="number_of_children" type="text" class="form-control form-control-user @error('number_of_children') is-invalid @enderror" name="number_of_children" value="{{ old('number_of_children') }}" placeholder="Number of children" required autocomplete="number_of_children">
                                    @error('number_of_children')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div> --}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="password" type="password" placeholder="Password" class="form-control form-control-user @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6">
                                        <input id="password-confirm" type="password" class="form-control form-control-user" placeholder="Repeat Password" name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="address" type="text" class="form-control form-control-user @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" placeholder="Address" required autocomplete="address" autofocus>
                                            @error('address')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="age" type="text" class="form-control form-control-user @error('age') is-invalid @enderror" name="age" value="{{ old('age') }}" placeholder="Your age" required autocomplete="age" autofocus>
                                            @error('age')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>
                                </div> 
                                    {{--  new fields --}}
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="phone" type="text" class="form-control form-control-user @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" placeholder="Phone Number" required autocomplete="phone" autofocus>
                                            @error('phone')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div>

                                    {{-- <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input id="relation" type="text" class="form-control form-control-user @error('relation') is-invalid @enderror" name="relation" value="{{ old('relation') }}" placeholder="Relation" required autocomplete="relation" autofocus>
                                            @error('relation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                    </div> --}}


                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="file" class="form-control-file" name="file" id="exampleInputFile">
                                            {{-- @error('relation')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror --}}
                                    </div>

                                </div>
                                                          
                                {{-- <a href="login.html" class="btn btn-primary ">
                                    
                                </a> --}}
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    {{ __('Register Account') }}
                                </button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Register with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="{{route('landingPage')}}">Iam not a {{$url}}</a>
                                {{-- <a class="small" href=""> I am not ***</a> --}}
                                {{-- <a class="small" href="{{route('registerAs')}}"> I am not ***</a> --}}
                            </div>
                            <div class="text-center">
                                <a class="small" href="{{asset('forgetPass')}}">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                {{-- <a class="small" href="{{route('login/student')}}">Already have an account? Login!</a> --}}
                                <a class="small" href="">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('public/customeAuth/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/customeAuth/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/customeAuth/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/customeAuth/js/sb-admin-2.min.js')}}"></script>

</body>

</html>