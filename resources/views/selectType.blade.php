@extends('layouts.meta')
<body style="background: url('img/covermute.png');background-size: cover;background-repeat: no-repeat;">
<div class="form" style="width: 600px;">
    <div class="in_form">
        <h2 class="mt-3 text-center">Авторизация</h2>
        <div class="width:80%;margin:0 auto;display:flex;flex-direction:column;">
            <a href="/">
                <button class="mt-4" style="background-color: #f06c60;color:#fff;"><img src="{{asset('icons/interOrg.svg')}}" width="30px" alt="" class="mr-2" style="margin-top: -2px;"> Вход для организации</button>
            </a>
            <a href="/employer/auth.php">
                <button class="mt-1" style="background-color: #4896f0;color:#fff;margin-top: 19px;"><img src="{{asset('icons/interUser.svg')}}" alt="" class="mr-2" style="margin-top: -5px;"> Вход для сотрудников</button>
            </a>
        </div>
    </div>
</div>

<style>
    * {
        box-sizing: border-box;
    }
    .form {
        width: 250px;
        height: fit-content;
        padding: 5px;
        margin: 0 auto;
        font-family: 'Gilroy Bold';
        background: #fff;
        margin-top: 25px;
        background: url('img/bglines.png');
        border-radius: 14px;
        background-size: cover;
    }
    .form .in_form {
        display: flex;
        flex-direction: column;
        background: #fff;
        height: 100%;
        width: 100%;
        border-radius: 14px;
        padding: 5px 20px;
        padding-bottom: 30px;
        align-items: center;
        justify-content: center;
    }
    .form button {
        height: 45px;
        font-size: 16px;
        font-family: "Gilroy";
        background: rgba(0,0,0,.02);
        border-radius: 27px;
        cursor: pointer;
        border: none;
        transition: .3s ease;
        width: 100%;
        min-width: 200px;
        margin: 0 auto;
    }
    button:hover {
        background: rgba(0,0,0,.05);
    }
    a {
        width: 100% !important;
    }
</style>


<title>Авторизация</title>

</body>
