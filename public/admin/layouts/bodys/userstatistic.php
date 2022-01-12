<?php
$emp = $Db->fQuery("SELECT * FROM `employeers` WHERE `id`='{$_GET['id']}'");

$transacts = $Db->query("SELECT * FROM `transacts` WHERE `employeer`='{$_GET['id']}'");

$feedbacks = $Db->query("SELECT * FROM `feedbacks` WHERE `employer`='{$_GET['id']}'");
$rating = $Db->fQuery("SELECT AVG(`stars`) AS midlestars FROM `feedbacks` WHERE `employer`='{$_GET['id']}'");
$sum = $Db->fQuery("SELECT SUM(`amount`) AS amount FROM `transacts` WHERE `employeer`='{$_GET['id']}'");
$middle = $Db->fQuery("SELECT AVG(`amount`) AS average FROM `transacts` WHERE `employeer`='{$_GET['id']}'");
?>

<div class="row" style="display: flex;align-items: center;margin-top: 20px;">
    <div class="col-xl-5 col-lg-5">
        <h2><b>Статистика сотрудника</b></h2>
    </div>
    <div class="col-lg-7 d-flex justify-content-end align-items-center flex-column">
        <a href="edit-employeer?id=<?=$user['id'];?>" class="btn btn-warning btn-leftborder mr-0">Редактировать профиль</a>
    </div>
</div>

<div class="row mt-4 d-flex align-items-center justify-content-start">
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4 d-flex justify-content-center">
        <div class="card corpcard">
            <div class="w-100 d-flex justify-content-start align-items-center btn btn-default">
                <img src="
                <?php if ($user['img'] == '' || $user['img'] == null): ?>
                    https://yt3.ggpht.com/a/AATXAJzfkIJxzExWhC_Dm8GJSld8sFbNwH7py2olkJ79=s900-c-k-c0xffffffff-no-rj-mo
                <?php else:
                    echo "/profile/uploads/orgs/".$user['img'];
                endif; ?>
                        "    alt="" width="50px" style="margin-right: 15px;border-radius: 10px;">
                <h2 style="text-align: left;"><?=$user['name'];?></h2>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4 d-flex justify-content-center align-items-center">
        <img src="/profile/assets/icons/star.svg" width="35px" class="mr-2" alt="">
        <b style="font-size: 25px;" class="mr-3"><?php if (strlen($rating['midlestars']) == 1) echo $rating['midlestars'].",0"; else echo $rating['midlestars']; ?></b>
        <span style="color: #7a899c;"><b><?=$company['type']?></b> "<?=$company['name']?>"</span>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4 d-flex justify-content-center">
        <b class="mr-3"><?=$Db->viewOrg($emp['company']);?>-<?=$Db->viewEmp($emp['employer_number']);?></b>
        <span style="color: #7a899c;">Личный номер сотрудника</span>
    </div>
    <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 mb-4 d-flex justify-content-center">
        <img src="/profile/assets/img/qrcode.png" alt="" style="margin-top: 5px;">
        <a href="" style="color:#ef7d74;width:68px;text-align:center;line-height:15px;margin-top:5px;font-size: 14px;">Скачать
            <br> <b>QR code</b></a>
    </div>
</div>

<div class="row">
    <div class="col-xl-11 col-lg-12 col-md-12 col-sm-12 col-12">
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

                <div class="row d-flex justify-content-center" style="max-width:800px;">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 d-flex justify-content-center mb-4">
                        <!-- Calendar 1 -->
                        <div class="calendar-select" style="">
                            <span id="fromshowdate">19.01.21</span> - <span id="toshowdate">19.01.21</span>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 text-center">
                        <span class="opacity">Рейтинг</span>
                        <br> <b><?php if (strlen($rating['midlestars']) == 1) echo $rating['midlestars'].",0"; else echo $rating['midlestars']; ?></b>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 text-center">
                        <span class="opacity">Кол-во чаевых</span>
                        <br> <b><?= mysqli_num_rows($Db->query("SELECT * FROM `transacts` WHERE `employeer`='{$_GET['id']}'")) ?> шт.</b>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-12 text-center">
                        <span class="opacity">Сумма “Чая” чистыми</span>
                        <br> <b><?= $sum['amount'] ?> р.</b>
                    </div>
                </div>

<!--                <div class="row">-->
<!--                    <div class="col-md-9">-->
<!--                        <div class="card mt-5 mb-4 d-flex align-items-center justify-content-between flex-row" style="height: 72px;padding: 32px;">-->
<!--                            <div class="left">-->
<!--                                <span class="opacity mr-2">Текущий баланс</span>-->
<!--                                <b style="font-size: 22px;">--><?//=$user['balance'];?><!-- р.</b>-->
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
                        <th style="width: 200px;">
                            Что <br> понравилось
                        </th>
                        <th style="width: 400px;">
                            Отзывы
                        </th>
                    </tr>
                    </thead>

                    <tbody>
                    <?php $count = 0; while($transact = mysqli_fetch_assoc($transacts)): $count++; ?>
                        <tr>
                            <td><?=$Db->dateToNormal($transact['date'], "date");?>     <span class="opacity"><?=$Db->dateToNormal($transact['date'], "time");?></span></td>
                            <td><?php if ($transact['type'] == 'pay') echo "Перевод чаевых"; ?></td>
                            <td>
                                <?php
                                if($transact['fee_on_client'] == "true") {
                                    echo $transact['amount'];
                                } else {
                                    echo $transact['amount'] + $transact['fee'];
                                }
                                ?>
                                р.</td>
                            <td><?=$transact['amount'];?> р.</td>
                            <td>
                                <?php if ($transact['fee_on_client'] == 'true') echo "Да"; else echo "Нет"; ?>
                            </td>
                            <td><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="22px" height="21px" style="margin-top: -5px;margin-right: 5px;">
                                    <path fill-rule="evenodd"  fill="rgb(240, 108, 96)"
                                          d="M20.987,6.826 C20.689,6.563 20.322,6.394 19.926,6.337 L15.074,5.631 L12.905,1.234 C12.728,0.874 12.453,0.578 12.112,0.375 C11.795,0.187 11.432,0.088 11.062,0.088 C10.692,0.088 10.329,0.187 10.012,0.375 C9.671,0.578 9.396,0.874 9.219,1.234 L7.050,5.631 L2.198,6.337 C1.802,6.394 1.435,6.563 1.137,6.826 C0.861,7.069 0.654,7.384 0.540,7.736 C0.425,8.088 0.407,8.464 0.488,8.823 C0.575,9.211 0.773,9.564 1.060,9.843 L4.570,13.266 L3.741,18.100 C3.639,18.699 3.803,19.308 4.193,19.771 C4.586,20.237 5.160,20.504 5.767,20.504 C6.097,20.504 6.428,20.422 6.723,20.267 L11.062,17.985 L15.401,20.267 C15.696,20.422 16.027,20.504 16.357,20.504 C16.964,20.504 17.537,20.237 17.930,19.771 C18.321,19.308 18.485,18.699 18.383,18.100 L17.554,13.266 L21.064,9.843 C21.351,9.564 21.549,9.211 21.636,8.823 C21.717,8.464 21.699,8.088 21.584,7.736 C21.470,7.384 21.263,7.069 20.987,6.826 ZM20.007,8.758 L16.131,12.539 C16.003,12.663 15.945,12.842 15.975,13.018 L16.890,18.356 C16.950,18.706 16.672,18.990 16.357,18.990 C16.274,18.990 16.188,18.970 16.106,18.926 L11.314,16.406 C11.235,16.365 11.148,16.344 11.062,16.344 C10.976,16.344 10.889,16.365 10.810,16.406 L6.018,18.926 C5.935,18.970 5.850,18.990 5.767,18.990 C5.451,18.990 5.174,18.706 5.234,18.356 L6.149,13.018 C6.179,12.842 6.121,12.663 5.993,12.539 L2.116,8.758 C1.795,8.445 1.973,7.900 2.416,7.836 L7.774,7.057 C7.950,7.031 8.102,6.921 8.181,6.761 L10.577,1.904 C10.676,1.703 10.869,1.603 11.062,1.603 C11.255,1.603 11.448,1.703 11.547,1.904 L13.943,6.761 C14.022,6.921 14.174,7.031 14.350,7.057 L19.708,7.836 C20.151,7.900 20.328,8.445 20.007,8.758 Z"/>
                                </svg> 5,0</td>

        <?php

        // Вытаскиваем отзывы
        $feedDate = substr($transact['date'], 0, 13);
        $feedbacks = $Db->query("SELECT * FROM `feedbacks` WHERE `add_date` LIKE '%%$feedDate%%'");

        ?>
                            <td>
                            <?php while ($feedback = mysqli_fetch_assoc($feedbacks)): ?>
                                    <?php if ($feedback['quality'] == "true") echo "<img src='/profile/assets/icons/like.svg' class='mr-1' width='20px'>"; ?>
                                    <?php if ($feedback['food'] == "true") echo "<img src='/profile/assets/icons/burger.svg' class='mr-1' width='20px'>"; ?>
                                    <?php if ($feedback['communication'] == "true") echo "<img src='/profile/assets/icons/smile.svg' class='mr-1' width='20px'>"; ?>
                            <?php endwhile;  ?>
                            </td>

                            <td>
                                <?php
                                $feedDate = substr($transact['date'], 0, 13);
                                $feedbacks = $Db->query("SELECT * FROM `feedbacks` WHERE `add_date` LIKE '%%$feedDate%%'");



                                $feedbacks_comment = mysqli_fetch_assoc($feedbacks)['comment'];
                                    if(!empty($feedbacks_comment)){
                                        echo mb_strimwidth($feedbacks_comment, 0, 13, "...");
                                        echo "<a href='' data-toggle='modal' data-target='#reviews-$count'><img style='margin-left: 5px;margin-top: -3px;' src='/profile/assets/img/plus.png' alt=''></a>";
                                    } else {
                                       echo "<a href='' data-toggle='modal' data-target='#reviews-$count'><img style='margin-left: 5px;margin-top: -3px;' src='/profile/assets/img/plus.png' alt=''></a>";
                                    }




                                ?>

                                <div class="modal bd-example-modal-lg fade" id="reviews-<?=$count;?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" style="width: 100% !important;">
                                    <div class="modal-dialog" role="document" style="width: 800px !important; max-width: 800px !important;">
                                        <div class="modal-content" style="background: #efefef;">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Отзывы</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body" style="width: 100% !important;">
                                                <table class="table">
                                                    <?php $feedDate = substr($transact['date'], 0, 13);
                                                    $feedbacks = $Db->query("SELECT * FROM `feedbacks` WHERE `add_date` LIKE '%%$feedDate%%'"); ?>
                                                    <thead>
                                                    <tr>
                                                        <th style="width:150px;">
                                                            Оценка
                                                        </th>
                                                        <th class="" style="width: 200px;">
                                                            Что понравилось
                                                        </th>
                                                        <th class="" style="width: 200px;">
                                                            Отзыв
                                                        </th>
                                                        <th style="width: 200px;">
                                                            Дата
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <?php
                                                    while($feedback = mysqli_fetch_assoc($feedbacks)): ?>
                                                        <tr>
                                                            <td><svg
                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="22px" height="21px" style="margin-top: -5px;margin-right: 0px;">
                                                                    <path fill-rule="evenodd"  fill="rgb(240, 108, 96)"
                                                                          d="M20.987,6.826 C20.689,6.563 20.322,6.394 19.926,6.337 L15.074,5.631 L12.905,1.234 C12.728,0.874 12.453,0.578 12.112,0.375 C11.795,0.187 11.432,0.088 11.062,0.088 C10.692,0.088 10.329,0.187 10.012,0.375 C9.671,0.578 9.396,0.874 9.219,1.234 L7.050,5.631 L2.198,6.337 C1.802,6.394 1.435,6.563 1.137,6.826 C0.861,7.069 0.654,7.384 0.540,7.736 C0.425,8.088 0.407,8.464 0.488,8.823 C0.575,9.211 0.773,9.564 1.060,9.843 L4.570,13.266 L3.741,18.100 C3.639,18.699 3.803,19.308 4.193,19.771 C4.586,20.237 5.160,20.504 5.767,20.504 C6.097,20.504 6.428,20.422 6.723,20.267 L11.062,17.985 L15.401,20.267 C15.696,20.422 16.027,20.504 16.357,20.504 C16.964,20.504 17.537,20.237 17.930,19.771 C18.321,19.308 18.485,18.699 18.383,18.100 L17.554,13.266 L21.064,9.843 C21.351,9.564 21.549,9.211 21.636,8.823 C21.717,8.464 21.699,8.088 21.584,7.736 C21.470,7.384 21.263,7.069 20.987,6.826 ZM20.007,8.758 L16.131,12.539 C16.003,12.663 15.945,12.842 15.975,13.018 L16.890,18.356 C16.950,18.706 16.672,18.990 16.357,18.990 C16.274,18.990 16.188,18.970 16.106,18.926 L11.314,16.406 C11.235,16.365 11.148,16.344 11.062,16.344 C10.976,16.344 10.889,16.365 10.810,16.406 L6.018,18.926 C5.935,18.970 5.850,18.990 5.767,18.990 C5.451,18.990 5.174,18.706 5.234,18.356 L6.149,13.018 C6.179,12.842 6.121,12.663 5.993,12.539 L2.116,8.758 C1.795,8.445 1.973,7.900 2.416,7.836 L7.774,7.057 C7.950,7.031 8.102,6.921 8.181,6.761 L10.577,1.904 C10.676,1.703 10.869,1.603 11.062,1.603 C11.255,1.603 11.448,1.703 11.547,1.904 L13.943,6.761 C14.022,6.921 14.174,7.031 14.350,7.057 L19.708,7.836 C20.151,7.900 20.328,8.445 20.007,8.758 Z"/>
                                                                </svg> <?=$feedback['stars']?></td>
                                                            <td>
                                                                <?php if ($feedback['quality'] == "true") echo "<img src='/profile/assets/icons/like.svg' class='mr-1' width='20px'>"; ?>
                                                                <?php if ($feedback['food'] == "true") echo "<img src='/profile/assets/icons/burger.svg' class='mr-1' width='20px'>"; ?>
                                                                <?php if ($feedback['communication'] == "true") echo "<img src='/profile/assets/icons/smile.svg' class='mr-1' width='20px'>"; ?>
                                                            </td>
                                                            <td><?= $feedback['comment'] ?></td>
                                                            <td><?=$Db->dateToNormal($feedback['add_date'], "date");?>     <span class="opacity"><?=$Db->dateToNormal($feedback['add_date'], "time");?></span></td>
                                                        </tr>
                                                    <?php endwhile; ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </td>
                        </tr>

                    <?php endwhile; ?>
                    </tbody>
                </table>

                <?php $SITE->echoEmployee('week'); ?>
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