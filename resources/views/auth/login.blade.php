
<html>

    <head>
        <link rel="stylesheet" href="{{url('css/login_style.css')}}"/>
        @include('home.head',['title' => 'Đăng nhập'])
      
    </head>

<body>
    <div class="form">
        <form class="login-form" action="{{ route('login') }}"  method="POST">
            @csrf
            <h2>Login</h2>
            <div class="icons">
                <a href="#" ><i class="fab fa-facebook"></i></a>
                <a href="#" ><i class="fab fa-google"></i></a>
                <a href="#" ><i class="fab fa-twitter"></i></a>
            </div>
            <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Username">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            <input id="password" type="password" class="@error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror

            <button type="submit" name="button">Login</button>
        

            <a href="/register" ><button type="button" >Register</button></a>

            @if (Route::has('password.request'))
            <a class="forgot_pass" href="{{ route('password.request') }}">
                {{ __('Forgot Your Password?') }}
            </a>
            @endif
            {{-- <a href="#"> Create an account</a> --}}
        </form>
    </div>
</body>
</html>
