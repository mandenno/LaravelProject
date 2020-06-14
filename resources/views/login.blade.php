<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Kipochi Payment Gateway">
    <meta name="author" content="OdukTek">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <title>Log In - Kipochi Payment Gateway</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>

    <link href="css/modern.css" rel="stylesheet">

</head>

<body>
<main class="main d-flex justify-content-center w-100">
    <div class="container d-flex flex-column">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <div class="text-center">
                                        <a class="navbar-brand" href="/"> <img src="img/logo.png" width="30%" height="30%"/> </a><br>

                                        </center>
                                    </div>
                                    <h2>Sign In</h2>
                                    <div id="error" style="color:red;font-size:15px;"></div> <div id="loader" style="font-size:15px;"></div>

                                </div>
                                @if(isset(\Illuminate\Support\Facades\Auth::user()->email))
                                    <script>window.location="/successlogin"
                                    </script>
                                @endif
                                @if ($message=Session::get('error'))
                                    <div class="alert alert-danger alert-block">
                                <button type="button" class="close" data-dismiss="alert">x</button>
                                        <strong>{{$message}}</strong>
                                    </div>
                                @endif
                                @if(count($errors)>0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{$error}}</li>
                                        @endforeach
                                    </ul>

                                </div>
                                @endif
                                <form method="post" action="{{\Illuminate\Support\Facades\URL::to('/checklogin')}}">
                                    {{csrf_field()}}
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control form-control-lg" type="email"   name="email" placeholder="Enter your email" />
                                    </div>
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control form-control-lg" type="password" name="password" placeholder="Enter your password" />
                                        <small>
                                            <a href="forgot">Forgot password?</a>
                                        </small>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <small>
                                            <a href="signup">Don't have account? Sign Up</a>
                                        </small>
                                    </div>

                                    <div class="text-center mt-3">
                                        <button id="login" type="submit" class="btn btn-lg btn-xl btn-primary" style="color:white;">Log in</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</main>

{{--<script src="js/app.js"></script>--}}

</body>


</html>
