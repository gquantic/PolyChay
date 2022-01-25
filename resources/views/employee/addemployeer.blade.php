@extends('layouts.header')
@section('content')

    <section class="main-section">
        <form action=" " method="post" enctype="multipart/form-data">
            <div class="row" style="height: 100px;display: flex;align-items: center;">
                <div class="col-xl-5 col-lg-5">
                    <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Добавить сотрудника</h3>
                    <div class="card corpcard">
                        <label for="profileimage">
                            <div class="w-100 mt-2 d-flex justify-content-start align-items-center btn btn-default">
                                <div class="dropify-wrapper has-preview"><div class="dropify-message"><span class="file-icon"> <p>Drug</p></span></div><div class="dropify-loader" style="display: none;"></div><input type="file" class="dropify" name="image" id="profileimage" data-default-file="{{asset('img/deflogo.png')}}" style="height: 100px !important;width: 100px !important;"><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src="{{asset('img/deflogo.png')}}"></span><div class="dropify-infos" style="border-radius: 20px;"></div></div></div>
                                <h2>Загрузить фото</h2>
                                <svg class="iconafter" transform="translate(3 -2)" width="15px" height="15px"><use xlink:href="#icon-paper-clip"></use></svg>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 text-right">
                    <button id="form-add" type="submit" class="btn btn-warning">Добавить</button>
                </div>
            </div>
            <style type="text/css">
                .dropify-wrapper {
                    height: 80px !important;
                    border: none;
                    width: 80px !important;
                    margin-right: 5px !important;
                }
            </style>
            <script type="text/javascript">
                $('.dropify').dropify();
            </script>

            <div class="row mb-0">
                <div class="col-md-12 mt-5">
                    <hr>
                </div>
            </div>


            <div class="row mt-3">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">ФИО</div>
                                    </div>
                                    <input type="text" class="form-control" name="form-name" placeholder="" value="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-2">
                            <div class="card p-3" style="border-radius: 8px;">
                                <h6 class="mb-3" style="font-family: 'Gilroy Bold';">Реквизиты личной дебетовой карты</h6>
                                <div class="d-flex align-items-center">
                                    <span class="opacity">Номер карты</span>
                                    <input type="text" name="form-card" id="form-card" class="wrapper ml-3">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mt-4">
                            <div class="card p-3" style="border-radius: 8px;">
                                <h6 class="mb-3" style="font-family: 'Gilroy Bold';">Реквизиты для выпуска виртуальной банковской карты сервиса "Быстрый чай"</h6>
                                <div class="d-flex align-items-center">
                                    <span class="opacity">Электронная почта</span>
                                    <input type="text" name="form-email" id="form-email" class="wrapper ml-3">
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="opacity">Серия и номер паспорта</span>
                                    <input type="text" name="form-passport" id="form-passport" class="wrapper ml-3">
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="opacity">Дата выдачи идентификационного документа</span>
                                    <input type="text" name="form-date" id="form-date" class="wrapper ml-3">
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="opacity">Место/орган, выдавший идентификационный документ</span>
                                    <input type="text" name="form-locate" id="form-locate" class="wrapper ml-3">
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="opacity">Зарегистрирован</span>
                                    <input type="text" name="form-regdate" id="form-regdate" class="wrapper ml-3">
                                </div>
                                <div class="d-flex align-items-center mt-2">
                                    <span class="opacity">Дата рождения</span>
                                    <input type="text" name="form-birth" id="form-birth" class="wrapper ml-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            $("#form-card").mask("9999-9999-9999-9999", { "placeholder": "XXXX-XXXX-XXXX-XXXX" });
            $("#form-birth").mask("9999.99.99", { "placeholder": "ГГГГ.ММ.ДД" });
            $("#form-regdate").mask("9999.99.99", { "placeholder": "ГГГГ.ММ.ДД" });
            $("#form-passport").mask("9999999999", { "placeholder": "XXXXXXXXXX" });
            $("#form-date").mask("9999.99.99", { "placeholder": "ГГГГ.ММ.ДД" });

        </script><div class="tech">
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
