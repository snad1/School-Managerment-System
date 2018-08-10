<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title> UBAS </title>

    <!-- Bootstrap -->
    <link href="vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
<div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">

                <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                    @csrf

                    <h1>Login Form</h1>
                    <div>
                        <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email"
                               value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" required />

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                  </span>
                        @endif
                    </div>

                    <div>
                        <input type="password" name="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Password" required />

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                  </span>
                        @endif
                    </div>
                    <div>
                        <button class="btn btn-default submit" type="submit">Log in</button>
                        <a class="reset_pass" href="#">Lost your password?</a>
                    </div>

                    <div class="clearfix"></div>

                    <div class="separator">

                        <div class="clearfix"></div>
                        <br />

                        <div>
                            <h1><i class="fa fa-paw"></i> UBAS</h1>
                            <p>©2016 All Rights Reserved.</p>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
</body>
</html>
