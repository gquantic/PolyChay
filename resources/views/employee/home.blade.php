@extends('layouts.header')
@section('content')
    <section class="main-section">
        <div class="row" style="height: 100px;display: flex;align-items: center;">
            <div class="col-xl-5 col-lg-5">
                <div class="card corpcard">
                    <div class="w-100 d-flex justify-content-start align-items-center btn btn-default" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="{{asset('img/deflogo.png')}}" alt="" width="70px" height="70px" style="margin-right: 15px;">
                        <h2>Eeeelecrio</h2>
                        <svg class="arrowdown" width="15px" style="position: absolute; right: 0;margin-right: 25px;margin-top:-5px;" height="15px"><use xlink:href="#icon-down-arrow"></use></svg>
                    </div>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal_editLogo">Загрузить / Изменить логотип <svg class="iconafter" width="15px" height="15px"><use xlink:href="#icon-paper-clip"></use></svg></a>
                        <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#modal_editPass">Сменить пароль <svg width="15px" class="iconafter" height="15px"><use transform="translate(0 0)" xlink:href="#icon-padlock"></use></svg></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 text-right d-flex justify-content-end align-items-center">
                <h5><b class="mr-3">0055</b> Личный номер организации</h5>
            </div>
            <div class="col-lg-3 d-flex justify-content-end align-items-center flex-column">
                <img src="/profile/assets/img/qrcode.png" alt="" style="margin-top: 5px;">
                <a href="javascript:void(0);" data-toggle="modal" data-target="#qrcodes" target="_blank" style="color:#ef7d74;width:80px;text-align:center;line-height:15px;margin-top:5px;font-size: 14px;">Скачать
                    <br> <b>QR code</b></a>
            </div>
        </div>

        <div class="row mb-0">
            <div class="col-md-12 mt-5">
                <hr>
            </div>
        </div>


        <div class="row mt-3">
            <div class="col-md-12">
                <div id="editprofile" class="form">
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Название</div>
                                </div>
                                <input type="text" class="form-control" id="name" placeholder="" value="Eeeelecrio">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <select id="type" style="width: 100%;height:40px;padding-left:7px;border-radius:14px;border-top-right-radius: 14px;border-bottom-right-radius: 14px;border:none;">
                                    <option selected="">Ресторан</option>
                                    <option>Кафе</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Город</div>
                                </div>
                                <input type="text" class="form-control" id="city" placeholder="" value="Moscow">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Улица</div>
                                </div>
                                <input type="text" class="form-control" id="street" placeholder="" value="Peterburi tee 65">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Дом</div>
                                </div>
                                <input type="text" class="form-control" id="house" placeholder="" value="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Ответственное лицо</div>
                                </div>
                                <input type="text" class="form-control" id="person" placeholder="" value="Murad">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Телефон</div>
                                </div>
                                <input type="text" class="form-control" id="phone" placeholder="" value="89286712267">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">Электронная почта</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="" value="aliev.murad.1997@mail.ru" disabled="">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 mt-3">
                        <button id="saveProfileInfo" class="btn btn-primary">
                            Сохранить
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Edit logo -->
        <div class="modal fade" id="modal_editLogo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Смена логотипа заведения</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <form action="/profile/action/editLogo.php" method="post" enctype="multipart/form-data">
                        <div class="modal-body">
                            <div class="dropify-wrapper has-preview"><div class="dropify-message"><span class="file-icon"> <p>Drag and drop a file here or click</p></span><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader" style="display: none;"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" name="image" id="input-file-now-custom-1" class="dropify" data-default-file="/profile/assets/img/deflogo.png"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="/profile/assets/img/deflogo.png"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner">deflogo.png</span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Изменить</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit pass -->
        <div class="modal fade" id="modal_editPass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Смена пароля</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div id="form_editpass">
                        <div class="modal-body">
                            <input type="password" id="oldpass" placeholder="Введите старый пароль" class="form-control onwhite">
                            <input type="password" id="newpass" placeholder="Придумайте пароль" class="form-control onwhite mt-2">
                            <input type="password" id="repass" placeholder="Повторите новый пароль" class="form-control onwhite mt-2">
                        </div>
                        <div class="row">
                            <div class="col-6" id="msg">
                            </div>
                            <div class="col-6 text-right">
                                <button type="submit" class="btn btn-primary">Изменить</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Qr Codes -->
        <div class="modal fade" id="qrcodes" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Скачать QrCode</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h5>Выберите размер</h5>
                        <div class="qrcodes d-flex justify-content-around">
                            <a href="/profile/action/qrcode.php?text=http://polychay.ru/pay.php?org=55&amp;size=3x2" target="_blank">
                                <div class="qr150"></div>
                                111x111
                            </a>
                            <a href="/profile/action/qrcode.php?text=http://polychay.ru/pay.php?org=55&amp;size=5x2" target="_blank">
                                <div class="qr250"></div>
                                185x185
                            </a>
                            <a href="/profile/action/qrcode.php?text=http://polychay.ru/pay.php?org=55&amp;size=8x2" target="_blank">
                                <div class="qr500"></div>
                                296x296
                            </a>
                            <a href="/profile/action/qrcode.php?text=http://polychay.ru/pay.php?org=55&amp;size=10x2" target="_blank">
                                <div class="qr1000"></div>
                                370x370
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            $('.dropify').dropify();

            $('#saveProfileInfo').on('click', function () {
                $('#saveProfileInfo').html('<i class="fas fa-pulse fa-spinner"></i>');

                setTimeout( function() {
                    $.post(
                        "/profile/action/editProfileInfo.php",
                        {
                            "name": $('#name').val(),
                            "type": $('#type').val(),
                            "city": $('#city').val(),
                            "street": $('#street').val(),
                            "house": $('#house').val(),
                            "person": $('#person').val(),
                            "phone": $('#phone').val(),
                        },
                        function (data) {
                            if (data == 'success') {
                                $('#saveProfileInfo').html('Сохранено');
                                setTimeout(function(){
                                    $('#saveProfileInfo').html('Сохранить');
                                }, 800);
                            } else {
                                $('#saveProfileInfo').html('Неизвестная ошибка');
                                setTimeout(function(){
                                    $('#saveProfileInfo').html('Сохранить');
                                }, 800);
                            }
                        }
                    );
                }, 500);
            });

            $('#form_editpass button').on('click', function () {
                $.post(
                    "/profile/action/editPass.php",

                    {
                        oldpass: $('#form_editpass #oldpass').val(),
                        newpass: $('#form_editpass #newpass').val(),
                        repass: $('#form_editpass #repass').val()
                    },

                    function (data)
                    {
                        $('#form_editpass #msg').html(data);
                    }
                );
            });
        </script>
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
