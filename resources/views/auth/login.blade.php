@extends('layouts.meta')

@section('body-meta')
    style="background: url('/img/covermute.png');
    background-size: cover;
    background-repeat: no-repeat;"
@endsection

@section('post-content')
<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="in_form">
        <h2 class="mt-3">Авторизация</h2>
        <input type="email" class="mt-2 @error('email') is-invalid @enderror"  placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="password" placeholder="Пароль" name="password" class="form-control @error('password') is-invalid @enderror" required autocomplete="current-password"><br>

        @error('password')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror

        <input type="submit" value="Войти" name="auth">
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="forgerPassword.php" style="margin-top: 10px;">Забыли пароль?</a>
            </div>
            <div class="col-md-6 text-right">
                <a href="employer/index.php" style="margin-top: 10px;">Я оффициант</a>
            </div>
            <div class="col-md-12">
                <a href="http://polychay.ru" style="margin-top: 10px;">Регистрация</a>
            </div>
            <div class="col-md-12">
                <p style="color:#d20404;/*position: absolute;margin-top: 240px;*/" class="error"></p>
            </div>
        </div>
    </div>
</form>

<style>
    * {
        box-sizing: border-box;
    }
    form {
        width: 400px;
        height: 300px;
        padding: 5px;
        margin: 0 auto;
        font-family: 'Gilroy Bold';
        background: #fff;
        border-radius: 4px;
        margin-top: 25px;
        background: url('img/bglines.png');
        border-radius: 14px;
        background-size: cover;
    }
    form .in_form {
        display: flex;
        flex-direction: column;
        background: #fff;
        height: 100%;
        width: 100%;
        border-radius: 14px;
        padding: 5px 20px;
    }
    form input[type="text"], form input[type="password"], form input[type="email"] {
        height: 35px;
        margin-bottom: 2px;
        background: rgba(0,0,0,.02);
        padding: 2px 10px;
        border-radius: 4px;
        font-size: 14px;
    }
    form input[type="submit"] {
        height: 40px;
        font-size: 16px;
        font-family: "Gilroy";
        border-radius: 4px;
        cursor: pointer;
    }
</style>
@endsection
