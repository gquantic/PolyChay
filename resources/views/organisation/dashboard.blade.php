@extends('layouts.meta')

@section('header')
    @include('layouts.header')
@endsection

@section('content')
    <section class="main-section"><div class="row" style="height: 50px;display: flex;align-items: center;margin-top: 20px;">
            <div class="col-xl-4 col-lg-5">
                <h2><b>Статистика</b></h2>
            </div>
            <div class="col-lg-7 d-flex justify-content-end align-items-center flex-column">
                <a href="{{route('add-employeer')}}" class="btn btn-warning">Добавить сотрудника</a>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 col-lg-12">
                <ul class="nav nav-tabs mt-5" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link" id="weekSelect" data-toggle="tab" role="tab" aria-controls="home" aria-selected="true">Неделя</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="monthSelect" data-toggle="tab" role="tab" aria-controls="profile" aria-selected="false">Месяц</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="yearSelect" data-toggle="tab" role="tab" aria-controls="contact" aria-selected="false">Год</a>
                    </li>
                </ul>
                <div class="tab-content mt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="week" role="tabpanel" aria-labelledby="home-tab">
                        <div class="mb-4" style="width: 670px;display: flex;justify-content: space-between;align-items: center;">
                            <span class="opacity"><b>Фильровать по дате</b></span>
                            <input id="fromDate" type="date">
                            <input id="toDate" type="date">
                            <a href="" class="linkwarning">Найти транзакцию</a>
                        </div>

                        <!-- New table -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th class="">Имя</th>
                                <th style="width: 200px;">
                                    Рейтинг
                                </th>
                                <th style="width: 200px;">
                                    Кол-во чаевых
                                </th>
                                <th style="width: 200px;">
                                    Средний "чай"
                                </th>
                                <th style="width: 200px;">
                                    Чаевые итого
                                </th>
                                <th style="width: 120px;">
                                    Отзывы
                                </th>
                                <th style="width: 150px;">Номер</th>
                                <th style=""></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr style="">
                                <td>{{   $user->name  }}<a href="#"></a></td>
                                <td><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="21px" style="margin-top: -5px;margin-right: 5px;">
                                        <path fill-rule="evenodd" fill="rgb(240, 108, 96)" d="M20.987,6.826 C20.689,6.563 20.322,6.394 19.926,6.337 L15.074,5.631 L12.905,1.234 C12.728,0.874 12.453,0.578 12.112,0.375 C11.795,0.187 11.432,0.088 11.062,0.088 C10.692,0.088 10.329,0.187 10.012,0.375 C9.671,0.578 9.396,0.874 9.219,1.234 L7.050,5.631 L2.198,6.337 C1.802,6.394 1.435,6.563 1.137,6.826 C0.861,7.069 0.654,7.384 0.540,7.736 C0.425,8.088 0.407,8.464 0.488,8.823 C0.575,9.211 0.773,9.564 1.060,9.843 L4.570,13.266 L3.741,18.100 C3.639,18.699 3.803,19.308 4.193,19.771 C4.586,20.237 5.160,20.504 5.767,20.504 C6.097,20.504 6.428,20.422 6.723,20.267 L11.062,17.985 L15.401,20.267 C15.696,20.422 16.027,20.504 16.357,20.504 C16.964,20.504 17.537,20.237 17.930,19.771 C18.321,19.308 18.485,18.699 18.383,18.100 L17.554,13.266 L21.064,9.843 C21.351,9.564 21.549,9.211 21.636,8.823 C21.717,8.464 21.699,8.088 21.584,7.736 C21.470,7.384 21.263,7.069 20.987,6.826 ZM20.007,8.758 L16.131,12.539 C16.003,12.663 15.945,12.842 15.975,13.018 L16.890,18.356 C16.950,18.706 16.672,18.990 16.357,18.990 C16.274,18.990 16.188,18.970 16.106,18.926 L11.314,16.406 C11.235,16.365 11.148,16.344 11.062,16.344 C10.976,16.344 10.889,16.365 10.810,16.406 L6.018,18.926 C5.935,18.970 5.850,18.990 5.767,18.990 C5.451,18.990 5.174,18.706 5.234,18.356 L6.149,13.018 C6.179,12.842 6.121,12.663 5.993,12.539 L2.116,8.758 C1.795,8.445 1.973,7.900 2.416,7.836 L7.774,7.057 C7.950,7.031 8.102,6.921 8.181,6.761 L10.577,1.904 C10.676,1.703 10.869,1.603 11.062,1.603 C11.255,1.603 11.448,1.703 11.547,1.904 L13.943,6.761 C14.022,6.921 14.174,7.031 14.350,7.057 L19.708,7.836 C20.151,7.900 20.328,8.445 20.007,8.758 Z"></path>
                                    </svg> -</td>
                                <td>2222</td>
                                <td>{{$user->minimal_commission}}</td>
                                <td>444</td>
                                <td>555<a href="#"><img style="margin-left: 5px;margin-top: -3px;" src="{{asset('img/plus.png')}}" alt=""></a></td>
                                <td>666</td>
                                <td><a href="#"><svg height="25px" width="25px"><use xlink:href="#icon-pencil"></use></svg></a></td>
                            </tr>
                            @endforeach
                            <tr style="background: #dee1ec;">
                                <td>Итого</td>
                                <td><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="22px" height="21px" style="margin-top: -5px;margin-right: 5px;">
                                        <path fill-rule="evenodd" fill="rgb(240, 108, 96)" d="M20.987,6.826 C20.689,6.563 20.322,6.394 19.926,6.337 L15.074,5.631 L12.905,1.234 C12.728,0.874 12.453,0.578 12.112,0.375 C11.795,0.187 11.432,0.088 11.062,0.088 C10.692,0.088 10.329,0.187 10.012,0.375 C9.671,0.578 9.396,0.874 9.219,1.234 L7.050,5.631 L2.198,6.337 C1.802,6.394 1.435,6.563 1.137,6.826 C0.861,7.069 0.654,7.384 0.540,7.736 C0.425,8.088 0.407,8.464 0.488,8.823 C0.575,9.211 0.773,9.564 1.060,9.843 L4.570,13.266 L3.741,18.100 C3.639,18.699 3.803,19.308 4.193,19.771 C4.586,20.237 5.160,20.504 5.767,20.504 C6.097,20.504 6.428,20.422 6.723,20.267 L11.062,17.985 L15.401,20.267 C15.696,20.422 16.027,20.504 16.357,20.504 C16.964,20.504 17.537,20.237 17.930,19.771 C18.321,19.308 18.485,18.699 18.383,18.100 L17.554,13.266 L21.064,9.843 C21.351,9.564 21.549,9.211 21.636,8.823 C21.717,8.464 21.699,8.088 21.584,7.736 C21.470,7.384 21.263,7.069 20.987,6.826 ZM20.007,8.758 L16.131,12.539 C16.003,12.663 15.945,12.842 15.975,13.018 L16.890,18.356 C16.950,18.706 16.672,18.990 16.357,18.990 C16.274,18.990 16.188,18.970 16.106,18.926 L11.314,16.406 C11.235,16.365 11.148,16.344 11.062,16.344 C10.976,16.344 10.889,16.365 10.810,16.406 L6.018,18.926 C5.935,18.970 5.850,18.990 5.767,18.990 C5.451,18.990 5.174,18.706 5.234,18.356 L6.149,13.018 C6.179,12.842 6.121,12.663 5.993,12.539 L2.116,8.758 C1.795,8.445 1.973,7.900 2.416,7.836 L7.774,7.057 C7.950,7.031 8.102,6.921 8.181,6.761 L10.577,1.904 C10.676,1.703 10.869,1.603 11.062,1.603 C11.255,1.603 11.448,1.703 11.547,1.904 L13.943,6.761 C14.022,6.921 14.174,7.031 14.350,7.057 L19.708,7.836 C20.151,7.900 20.328,8.445 20.007,8.758 Z"></path>
                                    </svg> 5,0</td>
                                <td>0 р.</td>
                                <td>0 р.</td>
                                <td>0 р.</td>
                                <td>0 шт. <a href=""><img style="margin-left: 5px;margin-top: -3px;" src="{{asset('img/plus.png')}}" alt=""></a></td>
                                <td></td>
                                <td></td>
                            </tr>
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

            fromDate = dateCount(0,+1);
            toDate = dateCount(0,+1);

            $('#fromDate').val(fromDate);
            $('#toDate').val(toDate);


            $('#weekSelect').on('click', function () {
                fromDate = dateCount(-7, +1);
                toDate = dateCount(0,+1);

                $('#fromDate').val(fromDate);
                $('#toDate').val(toDate);
            });

            $('#monthSelect').on('click', function () {
                fromDate = dateCount();
                toDate = dateCount(0, +1);

                $('#fromDate').val(fromDate);
                $('#toDate').val(toDate);
            });

            $('#yearSelect').on('click', function () {
                fromDate = dateCount(0, +1, -1);
                toDate = dateCount(0, +1);

                $('#fromDate').val(fromDate);
                $('#toDate').val(toDate);
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
            .table td, .table th{
                border-top: none !important;
                vertical-align: inherit !important;
            }
            .table svg{
                width: 35px !important;
            }
        </style><div class="tech">
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
