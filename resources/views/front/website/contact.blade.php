@extends('front.website.master')
@section('title')
    Contact
    @endsection
@section('content')
    <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>RegistrationForm_v7 by Colorlib</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="{{asset('contact1')}}/fonts/material-design-iconic-font/css/material-design-iconic-font.min.css">


    <link rel="stylesheet" href="{{asset('contact1')}}/css/style.css">
</head>

<body>

<div class="wrapper">
    <div class="inner">
        <form action="">
            <h3>Contact Us</h3>
            <p>Daha fazlası için ve bir sorun olduğunda bize mesaj atınız.</p>
            <label class="form-group">
                <input type="text" class="form-control"  required>
                <span>Adın</span>
                <span class="border"></span>
            </label>
            <label class="form-group">
                <input type="text" class="form-control"  required>
                <span for="">Emailin</span>
                <span class="border"></span>
            </label>
            <label class="form-group" >
                <textarea name="" id="" class="form-control" required></textarea>
                <span for="">Mesajınız</span>
                <span class="border"></span>
            </label>
            <button>Gönder
                <i class="zmdi zmdi-arrow-right"></i>
            </button>
        </form>
    </div>
</div>

</body>
</html>
@endsection
