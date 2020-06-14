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
    <title>Home - Kipochi Payment Gateway</title>

    <link rel="preconnect" href="//fonts.gstatic.com/" crossorigin>

    <link href="css/modern.css" rel="stylesheet">

</head>

<body>
    @if (isset(\Illuminate\Support\Facades\Auth::user()->email))
<div class="alert alert-danger alert-success">
<strong>Welcome {{\Illuminate\Support\Facades\Auth::user()->email}}</strong>
    <br />
    <a href="{{url('/logout')}}">Logout</a>
</div>
        else
        <script>window.location="/login";</script>
        @endif

</body>


</html>
