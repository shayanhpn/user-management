<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.rtl.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>مدیریت کاربران</title>
</head>
<body class="bg-light">

<div class="container p-4">
{{$slot}}
</div>
<div class="col-md-4">
    @if(session('success'))
        <div id="alert-success" class="alert alert-success text-white position-absolute bottom-0" style="right: 30px;" role="alert">
            <i class="fa-solid fa-thumbs-up"></i> {{session('success')}}
        </div>
    @elseif(session('danger'))
        <div id="alert-danger" class="alert alert-danger text-white position-absolute bottom-0" style="right: 30px;" role="alert" >
            <i class="fa-solid fa-thumbs-down"></i> {{session('danger')}}
        </div>
    @endif
</div>
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://kit.fontawesome.com/add5785b56.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
