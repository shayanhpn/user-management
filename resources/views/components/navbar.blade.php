<nav class="navbar navbar-expand-lg bg-purple shadow-lg">
    <div class="container">
        <a class="navbar-brand text-white" href="{{route('main-page')}}">میزکار</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link text-white rounded" aria-current="page" href="{{route('main-page')}}">خانه</a>
                <a class="nav-link text-white rounded" href="#">تماس با ما</a>
            </div>
        </div>
        @auth
        <a class="nav-link text-white rounded p-2" href="{{route('dashboard.show')}}">داشبورد</a>
        @endauth
        @if(!auth()->check())
        <a class="nav-link text-white rounded p-2" href="{{route('login.show')}}">ورود</a>
        @endif
    </div>
</nav>
