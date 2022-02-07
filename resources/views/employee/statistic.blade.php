@extends('layouts.meta')

@section('header')
    @include('layouts.header')
@endsection

@section('content')

<section class="main-section"><div class="row" style="height: 50px;display: flex;align-items: center;margin-top: 20px;">
        <div class="col-xl-5 col-lg-5">
            <h2><b>Статистика сотрудника</b></h2>
        </div>
        <div class="col-lg-7 d-flex justify-content-end align-items-center flex-column">
            <a href="" class="btn btn-warning btn-leftborder mr-0">Редактировать профиль</a>
        </div>
    </div>

    <div class="row mt-4 d-flex align-items-center justify-content-start">
        <div class="col-md-3">
            <div class="card corpcard">
                <div class="w-100 d-flex justify-content-start align-items-center btn btn-default">
                    <img src="{{asset('/storage/' .$user->logo)}}" alt="logo" width="50px" style="margin-right: 15px;border-radius: 10px;">
                    <h2 style="text-align: left;">{{$user->name}}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-3 d-flex align-items-center">
            <img src="{{asset('icons/star.svg')}}" width="35px" class="mr-2" alt="">
            <b style="font-size: 25px;" class="mr-3">-</b>
            <span style="color: #7a899c;"><b>Ресторан</b> "Eeeelecrio"</span>
        </div>
        <div class="col-md-3">
            <b class="mr-3">0055-02</b>
            <span style="color: #7a899c;">Личный номер сотрудника</span>
        </div>
        <div class="col-lg-3 d-flex justify-content-start align-items-start flex-column">
            <img src="{{asset('img/qrcode.png')}}" alt="" style="margin-top: 5px;">
            <a href="javascript:void(0);" data-toggle="modal" data-target="#qrcodes" target="_blank" style="color:#ef7d74;width:68px;text-align:center;line-height:15px;margin-top:5px;font-size: 14px;">Скачать
                <br> <b>QR code</b></a>
        </div>
    </div>

    <div class="row">
        <div class="col-xl-11 col-md-12">
            <ul class="nav nav-tabs mt-3" id="myTab" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="weekSelect" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Неделя</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="monthSelect" data-toggle="tab" role="tab" aria-controls="profile" aria-selected="false">Месяц</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="yearSelect" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">Год</a>
                </li>
            </ul>
            <div class="tab-content mt-4" id="myTabContent">
                <div class="tab-pane fade show active" id="week" role="tabpanel" aria-labelledby="home-tab">
                    <div class="d-flex align-items-center" style="width:100%;max-width:800px;display:flex;justify-content:space-between;">
                        <div class="">
                            <!-- Calendar 1 -->
                            <div class="calendar-select" style="">
                                <span id="fromshowdate">0-1.02.2022</span> - <span id="toshowdate">06.02.2022</span>
                            </div>
                        </div>
                        <div class="text-center">
                            <span class="opacity">Рейтинг</span>
                            <br> <b>-</b>
                        </div>
                        <div class="text-center">
                            <span class="opacity">Кол-во чаевых</span>
                            <br> <b>0 шт.</b>
                        </div>
                        <div class="text-center">
                            <span class="opacity">Сумма “Чая” чистыми</span>
                            <br> <b>0 р.</b>
                        </div>
                    </div>

                    <!--                <div class="row">-->
                    <!--                    <div class="col-md-9">-->
                    <!--                        <div class="card mt-5 mb-4 d-flex align-items-center justify-content-between flex-row" style="height: 72px;padding: 32px;">-->
                    <!--                            <div class="left">-->
                    <!--                                <span class="opacity mr-2">Текущий баланс</span>-->
                    <!--                                <b style="font-size: 22px;">--><!-- р.</b>-->
                    <!--                            </div>-->
                    <!---->
                    <!--                            <input type="text" class="text-center" placeholder="Укажите сумму вывода (руб.)">-->
                    <!---->
                    <!--                            <button class="btn btn-primary">Вывод средств</button>-->
                    <!--                        </div>-->
                    <!--                    </div>-->
                    <!--                </div>-->
                    <br>


                    <!-- Table -->

                    <div class="d-flex align-items-center mt-5" style="width:500px;justify-content: space-between">
                        <div>
                            <h3><b>Транзакции</b></h3>
                        </div>
                        <div>
                            <input type="date">
                        </div>
                        <div>
                            <a href="" class="linkwarning">Найти транзакцию</a>
                        </div>
                    </div>

                    <hr class="mt-4">

                    <!-- New table -->
                    <table class="table">
                        <thead>
                        <tr>
                            <th style="width:150px;"></th>
                            <th class="" style="width: 200px;">Вывод</th>
                            <th style="width: 200px;">
                                Чай до <br> комиссии
                            </th>
                            <th style="width: 200px;">
                                Чай после <br> комиссии
                            </th>
                            <th style="width: 180px;">
                                Комиссия на <br> клиенте
                            </th>
                            <th style="width: 200px;">
                                Оценка
                            </th>
                            <!--                            <th style="width: 200px;">-->
                            <!--                                Что <br> понравилось-->
                            <!--                            </th>-->
                            <th style="">Отзывы</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>

                </div>
                <div class="tab-pane fade" id="mounth" role="tabpanel" aria-labelledby="profile-tab">

                </div>
                <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="contact-tab">

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
                        <a href="/profile/action/qrcode.php?text=http://polychay.ru/data/redirect.php?org=55-2&amp;size=3x2" target="_blank">
                            <div class="qr150"></div>
                            111x111
                        </a>
                        <a href="/profile/action/qrcode.php?text=http://polychay.ru/data/redirect.php?org=55-2&amp;size=5x2" target="_blank">
                            <div class="qr250"></div>
                            185x185
                        </a>
                        <a href="/profile/action/qrcode.php?text=http://polychay.ru/data/redirect.php?org=55-2&amp;size=8x2" target="_blank">
                            <div class="qr500"></div>
                            296x296
                        </a>
                        <a href="/profile/action/qrcode.php?text=http://polychay.ru/data/redirect.php?org=55-2&amp;size=10x2" target="_blank">
                            <div class="qr1000"></div>
                            370x370
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript">
        function dateCount (d = 0, m = 0, y = 0) {
            // Получаем сначала сегоднящнюю дату
            var today = new Date();

            // Получаем дату
            var dd = today.getDate()+d;
            var mm = today.getMonth()+m; //January is 0!
            var yyyy = today.getFullYear()+y;

            // Если число = 1, то воплощаем его в 01
            if(dd<10){dd='0'+dd}
            if(mm<10){mm='0'+mm}

            // Возвращаем дату
            return today = yyyy+'-'+mm+'-'+dd;
        }

        function dateToShow (d = 0, m = 0, y = 0) {
            // Получаем сначала сегоднящнюю дату
            var today = new Date();

            // Получаем дату
            var dd = today.getDate()+d;
            var mm = today.getMonth()+m; //January is 0!
            var yyyy = today.getFullYear()+y;

            // Если число = 1, то воплощаем его в 01
            if(dd<10){dd='0'+dd}
            if(mm<10){mm='0'+mm}

            // Возвращаем дату
            return today = dd+'.'+mm+'.'+yyyy;
        }

        fromDate = dateToShow(-7,+1);
        toDate = dateToShow(0,+1);

        $('span#fromshowdate').html(fromDate);
        $('span#toshowdate').html(toDate);


        $('#weekSelect').on('click', function () {
            fromDate = dateToShow(-7, +1);
            toDate = dateToShow(0,+1);

            $('span#fromshowdate').html(fromDate);
            $('span#toshowdate').html(toDate);

            console.log(fromDate);
        });

        $('#monthSelect').on('click', function () {
            fromDate = dateToShow(0, 0);
            toDate = dateToShow(0,+1);

            $('#fromshowdate').html(fromDate);
            $('#toshowdate').html(toDate);

            console.log(fromDate);
        });

        $('#yearSelect').on('click', function () {
            fromDate = dateToShow(0, +1, -1);
            toDate = dateToShow(0,+1);

            $('#fromshowdate').html(fromDate);
            $('#toshowdate').html(toDate);

            console.log(fromDate);
        });
    </script>

    <style>
        .nav-item .nav-link{
            cursor: pointer;
            user-select: none;
        }
        table{
            border-collapse: separate  !important;
            border: none !important;
            vertical-align: center !important;
        }
        table td, table, table th, table tr{
            border: none !important;
            border-top: none !important;
        }
        .table td{
            border-top: none !important;
            vertical-align: inherit !important;
        }
        .table th{
            vertical-align: top !important;
        }
        .table svg{
            width: 35px !important;
        }
    </style>
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
