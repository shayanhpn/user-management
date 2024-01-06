<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center">
            <div class="col-md-4 p-4 shadow-lg bg-white rounded">
                <form action="{{route('register')}}" method="POST">
                    @csrf
                <div class="text-center">
                    <h3><span class="badge bg-secondary">ایجاد حساب کاربری</span></h3>
                </div>
                <hr class="text-success">
                <label for="">نام</label>
                <input type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name">
                    @error('first_name') <p class="text-danger">{{$message}}</p> @enderror
                <label for="">نام خانوادگی</label>
                <input type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name">
                    @error('last_name') <p class="text-danger">{{$message}}</p> @enderror
                <label for="">ایمیل</label>
                <input type="email" class="form-control @error('admin_email') is-invalid @enderror" name="admin_email">
                    @error('admin_email') <p class="text-danger">{{$message}}</p> @enderror
                <label for="">رمز عبور</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                    @error('password') <p class="text-danger">{{$message}}</p> @enderror
                <label for="">تکرار رمز عبور</label>
                <input type="password" class="form-control" name="password_confirmation">
                    <hr class="text-success">
                <button type="submit" class="btn btn-primary form-control">ایجاد حساب</button>
                </form>
            </div>
    </div>
</x-layout>
