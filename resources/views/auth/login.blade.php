<x-navbar></x-navbar>
<x-layout>
    <div class="d-flex flex-row justify-content-center">
        <div class="col-md-4 p-4 shadow-lg bg-white rounded">
            <form action="{{route('login')}}" method="POST">
                @csrf
                <div class="text-center">
                    <h3><span class="badge bg-secondary">ورود</span></h3>
                </div>
                <hr class="text-success">
                <label for="">ایمیل</label>
                <input type="email" class="form-control @error('login_email') is-invalid @enderror" name="login_email">
                @error('login_email') <p class="text-danger">{{$message}}</p> @enderror
                <label for="">رمز عبور</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
                @error('password') <p class="text-danger">{{$message}}</p> @enderror
                <hr class="text-success">
                <button type="submit" class="btn btn-primary form-control">ورود</button>
            </form>
        </div>
    </div>
</x-layout>
