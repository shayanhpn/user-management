<x-navbar></x-navbar>
<x-layout>
    <form action="" method="POST" class="p-4 bg-white shadow-sm rounded-4">
        @csrf
        <h4>ساخت رکورد</h4>
        <hr>
        <div class="row">
            <div class="col-md-4">
                <label class="@error('first_name') text-danger @enderror">نام</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                @error('first_name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-md-4">
                <label class="@error('last_name') text-danger @enderror">نام خانوادگی</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
                @error('last_name') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-md-4">
                <label class="@error('phone_number') text-danger @enderror" >شماره تماس</label>
                <input type="text" class="form-control @error('phone_number') is-invalid @enderror" name="phone_number">
                @error('phone_number') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="@error('mobile_phone') text-danger @enderror">شماره همراه</label>
                <input type="text" class="form-control @error('mobile_phone') is-invalid @enderror" name="mobile_phone">
                @error('mobile_phone') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-md-4">
                <label class="@error('country') text-danger @enderror">کشور</label>
                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country">
                @error('country') <p class="text-danger">{{$message}}</p> @enderror
            </div>
            <div class="col-md-4">
                <label class="@error('state') text-danger @enderror">استان</label>
                <input type="text" class="form-control @error('state') is-invalid @enderror" name="state">
                @error('state') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <label class="@error('city') text-danger @enderror" >شهر</label>
                <input type="text" class="form-control @error('city') is-invalid @enderror" name="city">
                @error('city') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <label class="@error('address') text-danger @enderror" >آدرس</label>
                <textarea class="form-control @error('address') is-invalid @enderror" name="address" id="" cols="30" rows="10"></textarea>
                @error('address') <p class="text-danger">{{$message}}</p> @enderror
            </div>
        </div>
        <div class="d-flex flex-row justify-content-center mt-4">
            <button class="btn btn-lg btn-primary" type="submit">ثبت رکورد</button>
        </div>
    </form>
</x-layout>
