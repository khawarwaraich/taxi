<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Register Yourself!</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="{{ asset('front/css/login.css') }}" rel="stylesheet">
</head>
<body>
    <div class="main-bg">
            <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-6 wrap-login100">
                        <span class="login100-form-title">
                            Register
                        </span>
                        <form action="{{ route('register.user') }}" method="POST" class="login100-form validate-form p-l-55 p-r-55 p-t-20">
                            @csrf
                            @if($message = Session::get('error'))
                            <div class="col-lg-12">
                              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                  {{$message}}
                                </div>
                            </div>
                            @endif
                            <div class="wrap-input100 validate-input m-b-16">
                                <input class="input100" type="text" name="name" placeholder="Enter your full name" required>
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
                                <input class="input100" type="email" name="email" placeholder="Email address" required>
                                <span class="focus-input100"></span>
                            </div>
                            <div class="wrap-input100 validate-input" data-validate="Please enter password">
                                <input class="input100" type="password" name="pass" placeholder="Password" required>
                                <span class="focus-input100"></span>
                            </div>
                            <br>
                            <div class="container-login100-form-btn">
                                <button class="login100-form-btn">
                                    Register
                                </button>
                            </div>
                            <div class="flex-col-c p-b-40 mt-3">
                                <a href="{{ route('login') }}" class="txt3">
                                    Already have account?
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
    </div>
</body>
</html>
