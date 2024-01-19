<x-navbar></x-navbar>
<x-layout>
<div class="p-4 bg-white shadow-sm rounded-4">
    <h3>مشخصات کلی</h3>
    <hr>
    <div class="row">
        <div class="col-md-4">
            <span>نام: <b>{{$user->first_name}}</b></span>
        </div>
        <div class="col-md-4">
            <span>نام خانوادگی: <b>{{$user->last_name}}</b></span>
        </div>
        <div class="col-md-4">
            <span>شماره تلفن: <b>{{$user->phone_number}}</b></span>
        </div>
    </div>
    <hr class="text-secondary my-4">
    <div class="row">
        <div class="col-md-4">
            <span>شماره همراه: <b>{{$user->mobile_phone}}</b></span>
        </div>
        <div class="col-md-4">
            <span>کشور: <b>{{$user->country}}</b></span>
        </div>
        <div class="col-md-4">
            <span>استان: <b>{{$user->state}}</b></span>
        </div>
    </div>
    <hr class="text-secondary my-4">
    <div class="row">
        <div class="col-md-4">
            <span>شهر: <b>{{$user->city}}</b></span>
        </div>
        <div class="col-md-8">
            <span>آدرس: <b>{{$user->address}}</b></span>
        </div>
    </div>
</div>
</x-layout>
