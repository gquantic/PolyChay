@extends('layouts.meta')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <section class="main-section">
        <div class="row" style="height: 100px;display: flex;align-items: center;">
            <div class="col-xl-5 col-lg-5">
                <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Анкета агента</h3>
                <!--        <div class="card corpcard">-->
                <!--            <input type="file" id="profileimage" hidden>-->
                <!--            <label for="profileimage">-->
                <!--                <div class="w-100 mt-2 d-flex justify-content-start align-items-center btn btn-default">-->
                <!--                    <img src="/profile/assets/img/deflogo.png" alt="" width="70px" style="margin-right: 15px;">-->
                <!--                    <h2>Загрузить фото</h2>-->
                <!--                    <svg class="iconafter" transform="translate(3 -2)" width="15px" height="15px"><use  xlink:href="#icon-paper-clip"></use></svg>-->
                <!--                </div>-->
                <!--            </label>-->
                <!--        </div>-->
            </div>
            <div class="col-xl-3 col-lg-3 text-right">
                <a href="$"><button id="form-add" class="btn btn-warning">Назад к статистике</button></a>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-12 mt-5">
                <hr>
            </div>
        </div>
        @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="row mt-3">
            <div class="col-md-8">
                <div class="row">
                    <form method="POST" action="{{route('users.update' , $user)}}">
                        @csrf
                        @method('PATCH')
                        <div class="col-md-12 hidden">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">ID</div>
                                    </div>
                                    <input type="text" name="id" class="form-control" id="form-id" placeholder="{{$user->id}}"  value="{{old('id')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">ФИО</div>
                                    </div>
                                    <input type="text" name="name" class="form-control" id="form-name" placeholder="{{$user->name}}" value="{{old('name')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Номер банковской карты</div>
                                    </div>
                                    <input type="text" class="form-control" name="card" id="form-card" placeholder="{{$user->card}}" value="{{old('card')}}">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button id="form-edit" type="submit" class="btn btn-primary">Сохранить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="tech">
            <svg class="iconafter" transform="translate(-1 -1)" width="20px" height="20px"><use xlink:href="#icon-msg"></use></svg>
        </div>
        <style type="text/css">
            .tech{
                position: fixed;
                padding: 15px;
                right: 0; bottom: 0;
                background: #f06c60;
                border: 3px solid #fff;
                border-radius: 50%;
                fill: #fff;
                margin-bottom: 30px;
                margin-right: 50px;
                transition: .1s ease;
            }
            .tech:hover{
                background: #e06459;
                cursor: pointer;
            }
        </style>
    </section>
@endsection
