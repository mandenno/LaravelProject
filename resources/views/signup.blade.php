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

    <title>Merchant Account > Sign Up</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>

    <link href="css/modern.css" rel="stylesheet">

</head>

<body>
<main class="main d-flex justify-content-center w-100">
    <div class="container d-flex flex-column">
        <div class="row h-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">Sign Up for a Merchant Account</h1>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">

                                <form  action="{{\Illuminate\Support\Facades\URL::to('/create')}}" method="post">
                                    @csrf
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input class="form-control" type="text" name="name" placeholder="Enter your name" required/>
                                    </div>

                                    <div class="form-group">
                                        <label>Email</label>
                                        <input class="form-control" type="email"  required name="email" placeholder="Enter your email" />
                                    </div>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password" name="password" placeholder="Enter password" required />
                                    </div>
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password" />
                                    </div>
                                    <div class="text-center mt-3">
                                        <button class="btn btn-primary" type="submit">Sign Up</button>
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
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
