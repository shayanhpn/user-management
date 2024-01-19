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
<script src="{{asset('assets/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/js/jquery-3.7.1.min.js')}}"></script>
<script src="https://kit.fontawesome.com/add5785b56.js" crossorigin="anonymous"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
</body>
</html>
