@extends('layouts.meta')
@section('header')
    @include('employer.layouts.header')
@endsection
@section('content')

    <section class="main-section"><form action="/employer/action/editEmployer.php" method="post" enctype="multipart/form-data">
            <div class="row" style="height: 100px;display: flex;align-items: center;">
                <div class="col-xl-5 col-lg-5">
                    <h3 style="font-family: 'Gilroy Bold';" class="mt-1 mb-3">Анкета агента</h3>
                    <div class="card corpcard">
                        <label for="profileimage">
                            <div class="w-100 mt-2 d-flex justify-content-start align-items-center btn btn-default">
                                <div class="dropify-wrapper has-preview"><div class="dropify-message"><span class="file-icon"> <p>Drag and drop a file here or click</p></span><p class="dropify-error">Ooops, something wrong appended.</p></div><div class="dropify-loader" style="display: none;"></div><div class="dropify-errors-container"><ul></ul></div><input type="file" class="dropify" name="image" id="profileimage" data-default-file=" /profile/assets/img/deflogo.png" style="height: 100px !important;width: 100px !important;"><button type="button" class="dropify-clear">Remove</button><div class="dropify-preview" style="display: block;"><span class="dropify-render"><img src=" /profile/assets/img/deflogo.png"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner">deflogo.png</span></p><p class="dropify-infos-message">Drag and drop or click to replace</p></div></div></div></div>
                                <!--                    <img src="/profile/assets/img/deflogo.png" alt="" width="70px" style="margin-right: 15px;">-->
                                <h2>Загрузить фото</h2>
                                <svg class="iconafter" transform="translate(3 -2)" width="15px" height="15px"><use xlink:href="#icon-paper-clip"></use></svg>
                            </div>
                        </label>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 text-right">
                    <a href="userstatistic?id= "><button id="form-add" class="btn btn-warning">Назад к статистике</button></a>
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
                                    <input type="text" class="form-control" name="name" placeholder="" value="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="input-group mb-2">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">Номер банковской карты</div>
                                    </div>
                                    <input type="text" class="form-control" name="card" placeholder="" value=" ">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Сохранить</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <script>
            // $('#form-edit').on('click', function () {
            //     $('#form-edit').html('<i class="fas fa-pulse fa-spinner"></i>');
            //
            //     setTimeout( function() {
            //         $.post(
            //             "/profile/action/editEmployeer.php",
            //             {
            //                 "id": $('#form-id').val(),
            //                 "name": $('#form-name').val(),
            //                 "card": $('#form-card').val()
            //             },
            //             function (data) {
            //                 // console.log(data);
            //                 if (data == 'success') {
            //                     $('#form-edit').html('Сохранено');
            //                     setTimeout(function(){
            //                         $('#form-edit').html('Сохранить');
            //                     }, 800);
            //                 } else {
            //                     $('#form-edit').html('Неизвестная ошибка');
            //                     setTimeout(function(){
            //                         $('#form-edit').html('Сохранить');
            //                     }, 1500);
            //                 }
            //             }
            //         );
            //     }, 500);
            // });
        </script><!--<div class="tech">-->
        <!--    <svg class="iconafter" transform="translate(-1 -1)" width="20px" height="20px"><use xlink:href="#icon-msg"></use></svg>-->
        <!--</div>-->
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
