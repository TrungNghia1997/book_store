
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Đặt lại mật khẩu</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
    <link rel="icon" type="image/png" href="{{asset('images/icons/favicon.ico')}}"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/bootstrap/css/bootstrap.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/fonts/font-awesome-4.7.0/css/font-awesome.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/fonts/Linearicons-Free-v1.0.0/icon-font.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/animate/animate.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/css-hamburgers/hamburgers.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/animsition/css/animsition.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/select2/select2.min.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/vendor/daterangepicker/daterangepicker.css')}}">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/css/util.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('/assets_login/css/main.css')}}">
<!--===============================================================================================-->
</head>
<body>

    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(/assets_login/images/bg-01.jpg);">
                    <span class="login100-form-title-1" style="font-family: Time new roment; font-size: 40px;">
                        Đặt lại mật khẩu
                    </span>
                </div>

                <form class="login100-form validate-form" method="POST" action="/api/password/reset">
                    <input type="hidden" name="token" value=" {{$passwordReset->token}}">

                    <div class="wrap-input100 validate-input m-b-26" data-validate="Username is required">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" value="{{$passwordReset->email}}">
                        <span class="focus-input100"></span>
                    </div>

                    @if(session('thongbao'))
                            <div class="alert alert-success" >
                               {{ session('thongbao') }}

                            </div>

                    @endif

                    <div class="wrap-input100 validate-input m-b-26 pass_show" data-validate="Username is required">
                        <span class="label-input100">Password:</span>
                        <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu mới" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-26 pass_show" data-validate="Username is required">
                        <span class="label-input100">Confirm</span>
                        <input class="input100" type="password" name="confirm-password" placeholder="Nhập lại mật khẩu" required>
                        <span class="focus-input100"></span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            Xác nhận đặt lại mật khẩu
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/jquery/jquery-3.2.1.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/animsition/js/animsition.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/bootstrap/js/popper.js')}}"></script>
    <script src="{{asset('/assets_login/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/select2/select2.min.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/daterangepicker/moment.min.js')}}"></script>
    <script src="{{asset('/assets_login/vendor/daterangepicker/daterangepicker.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/vendor/countdowntime/countdowntime.js')}}"></script>
<!--===============================================================================================-->
    <script src="{{asset('/assets_login/js/main.js')}}"></script>


</body>
</html>
