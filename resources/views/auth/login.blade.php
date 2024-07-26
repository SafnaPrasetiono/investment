<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wellcome to Avrist Investment System</title>
    <link rel="stylesheet" href="{{ asset('/assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icons/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/login.css') }}">
    <link rel="stylesheet" href="./dist/css/login.css">
</head>

<body>
    <div class="login-container">
        <div class="login-head">
            <div class="text-start">
                <h2>AVRIST</h2>
                <p class="mb-0">Wellcome to Avrist Investment System</p>
            </div>
        </div>
        <div class="login-body">
            <form>
                <div class="mb-2">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="mb-2">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <button type="submit" class="btn btn-primary form-control">LOGIN</button>
            </form>
        </div>
        <div class="login-footer">
            <div class="d-block">
                <p class="text-center">-- or --</p>
            </div>
            <ul class="nav justify-content-center mb-3">
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{  asset('/images/icons/login/google.png') }}" alt="google" class="other-link-login">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{  asset('/images/icons/login/facebook.png') }}" alt="facebook" class="other-link-login">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <img src="{{  asset('/images/icons/login/twitter.png') }}" alt="twitter" class="other-link-login">
                    </a>
                </li>
            </ul>
            <div class="d-block text-center">
                <p class="mb-0">don't have account click here</p>
                <a href="" style="text-decoration: none;">SIGNUP</a>
            </div>
        </div>
    </div>


    <script src="{{ asset('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/app/js/bootstrap.min.js') }}"></script>
</body>

</html>