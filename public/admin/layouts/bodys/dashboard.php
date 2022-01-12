<?php
$transactsAmount = $Db->fQuery("SELECT SUM(`amount`) AS amount FROM `transacts`");

$city = $Db->query("SELECT `city` FROM `users`");
$cities = array();

while ($cityOne = mysqli_fetch_assoc($city)) {
    $cities[] = $cityOne['city'];
}

$cities = array_unique($cities);

?>

<div class="row" style="height: 50px;display: flex;align-items: center;margin-top: 20px;">
    <div class="col-xl-12 col-lg-12">
        <h2><b>Статистика</b></h2>
    </div>
</div>

<div class="row">
    <div class="col-md-12 col-lg-12 col-xl-12">
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
                <div class="d-flex align-items-center" style="width:97%;max-width:1200px;display:flex;justify-content:space-between;">
                    <div class="">
                        <!-- Calendar 1 -->
                        <div class="calendar-select" style="">
                            <div class="table__seach-btn">
                                <div class="table__date-wrap" style="display: flex;margin-left: auto;margin-right: auto;">
                                    <span> Диапазон дат &nbsp;</span>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="#79899c">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M10.726 6.712a.694.694 0 1 1 0 1.388.694.694 0 0 1 0-1.388zm0 3.016a.694.694 0 1 1 0 1.387.694.694 0 0 1 0-1.387zm3.018-3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM16.727 8.1V4.286c0-.764-.623-1.386-1.388-1.386h-.902v.693a.693.693 0 0 1-1.387 0V2.9H9.893v.693a.693.693 0 0 1-1.388 0V2.9H5.383v.693a.693.693 0 0 1-1.387 0V2.9h-.867c-.766 0-1.388.622-1.388 1.386V15.1c0 .764.622 1.386 1.388 1.386h8.186v-2.842a2.777 2.777 0 0 1 2.776-2.773h3.33a.694.694 0 0 1 .5 1.175l-5.412 5.614a.694.694 0 0 1-.569.21.697.697 0 0 1-.07.003H3.13A2.777 2.777 0 0 1 .353 15.1V4.286A2.777 2.777 0 0 1 3.13 1.514h.867V.82a.693.693 0 0 1 1.387 0v.694h3.122V.82a.693.693 0 0 1 1.388 0v.694h3.157V.82a.694.694 0 0 1 1.387 0v.694h.902a2.777 2.777 0 0 1 2.776 2.772V8.1a.693.693 0 0 1-1.388 0zm-4.024 7.361l3.087-3.202h-1.7c-.765 0-1.387.622-1.387 1.386zM4.69 6.712a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM4.69 12.743a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-6.03a.693.693 0 1 1 0 1.386.693.693 0 0 1 0-1.387z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="table__seach-field" style="top: calc(100% + -1050px);" id="search2">
                                <label>От <input type="date" name="paid_period_start1" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                                <label>До <input type="date" name="paid_period_start2" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <b>Фильтр по:</b>
                        <a style="margin-left: 15px;cursor: pointer;" id="priceSet">Заработку <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="6px" height="14px">
                        <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUbGHUa2DUbGHUa2DUbGHUbGHTa2DUbGHUa2DUa2DUbGHUa2DUbGHUa2DUa2DUbGHUbGHUbGHUbGHTa2DUbGHTa2DUbGHUbGHUbGHUa2DUbGHUbGHUbGHUa2DUbGHUbGHUa2DUa2DTa2D///9dLRnhAAAAJHRSTlMARagEWdAJVsoIygjKViRVywIL0XNIvxbIQNq2zsm2NuqrVKPjgWrWAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBM6GzaH70UAAABFSURBVAjXY2BgYGRiZgACFlY2EMXOwQmmuLixUDxgOV4IBebxMfALCAoxCIuIiolLMEhKScvIyjEwyCuoKIJMU1IWZwAAXHwDOGBeIQEAAAAASUVORK5CYII=" />
                        </svg></a>
                        <a style="margin-left: 15px;cursor: pointer;" id="ratingSet">Рейтингу <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="6px" height="14px">
                                <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUa2DUbGHUa2DTa2DUbGHUbGHUa2DUbGHUbGHUa2DUa2DUbGHUa2DUbGHUbGHUbGHTa2DUbGHUa2DUa2DUbGHTa2DUbGHUbGHUa2DUbGHUa2DUa2DTa2DUa2DUbGHUa2DUbGHUa2DUbGH////U+n7tAAAAJHRSTlMAVKMWNuqrCUDats7J0XNIv8gkVcsCC1bKCMpWCFYIWdBFqATnMOWVAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBQAIklkr7EAAABISURBVAjXTclHEoAgAMDAKPbeRcTu/9+o4MXTziSA4wrA8+8gJIqTNEvIi7ISNQ1t1w/vHOWEQVlmpS1fXKT+WH9x20PDcV48rR0D+ji28akAAAAASUVORK5CYII=" />
                                </svg></a>
                    </div>



                    <div style="position: relative;">
                    <div class="table__seach-btn">
                        <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></div>
                        <span>&nbsp; Источник</span>
                    </div>
                    <div class="table__seach-field">
                        <div class="inputSearch">
                            <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></label>
                            <input type="text" autocomplete="off" placeholder="Поиск" id="search1">
                        </div>
                        <hr class="hr">
                        <ul class="table__seach-param" id="sortname">
                                <li class="table__seach-param-item show">
                                    <label>
                                        <input type="checkbox" class="all" name="" value="all" onclick="$('#sortname #name:checkbox').prop('checked', true);">
                                        <span class="checks"></span>
                                        <span class="table__seach-name"> Выделить все</span>
                                    </label>
                                </li>
                                <li class="table__seach-param-item show" id="name">
                                    <label>
                                        <input type="checkbox" name="" value="Агент">
                                        <span class="checks"></span>
                                        <span class="table__seach-name"> Агент</span>
                                    </label>
                                </li>
                                <li class="table__seach-param-item show" id="name">
                                    <label>
                                        <input type="checkbox" name="" value="Заведение">
                                        <span class="checks"></span>
                                        <span class="table__seach-name"> Заведение</span>
                                    </label>
                                </li>
                        </ul>
                    </div>
    </div>
                    <div style="position: relative;">
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></div>
                            <span>&nbsp;  Город</span>
                        </div>
                        <div class="table__seach-field">
                            <div class="inputSearch">
                                <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></label>
                                <input type="text" autocomplete="off" placeholder="Поиск" id="search1">
                            </div>
                            <hr class="hr">
                            <ul class="table__seach-param" id="sortname">
                                <li class="table__seach-param-item show">
                                    <label><input type="checkbox" class="all" name="" value="all" onclick="$('#sortname #name:checkbox').prop('checked', true);"><span class="checks"></span><span class="table__seach-name">Выделить все</span></label>
                                </li>
                                <?php foreach ($cities as $city): ?>
                                <li class="table__seach-param-item show" id="name">
                                    <label><input type="checkbox" name="" value="<?= $city ?>"><span class="checks"></span><span class="table__seach-name"> <?= $city ?></span></label>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                    <div style="position: relative;">
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg>

                                <span>&nbsp; Тип организации</span>

                            </div>
                        </div>
                        <div class="table__seach-field">
                            <div class="inputSearch">
                                <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></label>
                                <input type="text" autocomplete="off" placeholder="Поиск" id="search1">
                            </div>
                            <hr class="hr">
                            <ul class="table__seach-param" id="sortname">
                                <li class="table__seach-param-item show">
                                    <label><input type="checkbox" name="" value="all" class="all" onclick="$('#sortname #name:checkbox').prop('checked', true);"><span class="checks"></span><span class="table__seach-name">Выделить все</span></label>
                                </li>
                                <li class="table__seach-param-item show" id="name">
                                    <label><input type="checkbox" name="" value="Ресторан"><span class="checks"></span><span class="table__seach-name"> Ресторан</span></label>
                                </li>
                                <li class="table__seach-param-item show" id="name">
                                    <label><input type="checkbox" name="" value="Кафе"><span class="checks"></span><span class="table__seach-name"> Кафе</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <!-- New table -->
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 300px;">Имя</th>
                            <th style="width: 300px;">
                                Текущий баланс
                            </th>
                            <th style="width: 300px;">
                                Рейтинг
                            </th>
                            <th style="width: 300px;">
                                Чаевые
                            </th>
                            <th style="width:50px;"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($org = mysqli_fetch_assoc($orgs)):
                            $amount = $Db->fQuery("SELECT SUM(`balance`) AS amount FROM `employeers` WHERE `company`='{$org['id']}'");
                            $allAmount = $Db->fQuery("SELECT SUM(`balance`) AS allAmount FROM `employeers`");
                            ?>
                        <tr style="" class="exportedItem">
                            <td><a href="organisation-stat?id=<?=$org['id'];?>"><?=$org['name'];?></a></td>
                            <td><?= intval($amount['amount']) ?> р.</td>
                            <td><svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                        width="22px" height="21px" style="margin-top: -5px;margin-right: 5px;">
                                    <path fill-rule="evenodd"  fill="rgb(240, 108, 96)"
                                          d="M20.987,6.826 C20.689,6.563 20.322,6.394 19.926,6.337 L15.074,5.631 L12.905,1.234 C12.728,0.874 12.453,0.578 12.112,0.375 C11.795,0.187 11.432,0.088 11.062,0.088 C10.692,0.088 10.329,0.187 10.012,0.375 C9.671,0.578 9.396,0.874 9.219,1.234 L7.050,5.631 L2.198,6.337 C1.802,6.394 1.435,6.563 1.137,6.826 C0.861,7.069 0.654,7.384 0.540,7.736 C0.425,8.088 0.407,8.464 0.488,8.823 C0.575,9.211 0.773,9.564 1.060,9.843 L4.570,13.266 L3.741,18.100 C3.639,18.699 3.803,19.308 4.193,19.771 C4.586,20.237 5.160,20.504 5.767,20.504 C6.097,20.504 6.428,20.422 6.723,20.267 L11.062,17.985 L15.401,20.267 C15.696,20.422 16.027,20.504 16.357,20.504 C16.964,20.504 17.537,20.237 17.930,19.771 C18.321,19.308 18.485,18.699 18.383,18.100 L17.554,13.266 L21.064,9.843 C21.351,9.564 21.549,9.211 21.636,8.823 C21.717,8.464 21.699,8.088 21.584,7.736 C21.470,7.384 21.263,7.069 20.987,6.826 ZM20.007,8.758 L16.131,12.539 C16.003,12.663 15.945,12.842 15.975,13.018 L16.890,18.356 C16.950,18.706 16.672,18.990 16.357,18.990 C16.274,18.990 16.188,18.970 16.106,18.926 L11.314,16.406 C11.235,16.365 11.148,16.344 11.062,16.344 C10.976,16.344 10.889,16.365 10.810,16.406 L6.018,18.926 C5.935,18.970 5.850,18.990 5.767,18.990 C5.451,18.990 5.174,18.706 5.234,18.356 L6.149,13.018 C6.179,12.842 6.121,12.663 5.993,12.539 L2.116,8.758 C1.795,8.445 1.973,7.900 2.416,7.836 L7.774,7.057 C7.950,7.031 8.102,6.921 8.181,6.761 L10.577,1.904 C10.676,1.703 10.869,1.603 11.062,1.603 C11.255,1.603 11.448,1.703 11.547,1.904 L13.943,6.761 C14.022,6.921 14.174,7.031 14.350,7.057 L19.708,7.836 C20.151,7.900 20.328,8.445 20.007,8.758 Z"/>
                                </svg> 5,0</td>
                            <td>
                                <?php
                                    $amount = 0;

                                    $employersForAmount = $Db->query("SELECT * FROM `employeers` WHERE `company`='{$org['id']}'");
                                    while ($employer = mysqli_fetch_assoc($employersForAmount)) {
                                        $transacts = $Db->query("SELECT * FROM `transacts` WHERE `employeer`='{$employer['id']}'");
                                        while ($transact = mysqli_fetch_assoc($transacts)) {
                                            $amount = $amount + $transact['amount'];
                                        }
                                    }

                                    echo intval($amount);
                                ?>

                                р.</td>
                            <td>
                                <a href="/admin/action/ac-org.php?id=<?=$org['id'];?>&act=delete">
                                    <svg  viewBox="-40 0 427 427.00131" width="18" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"/><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"/></svg>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                    <tfoot>
                    <tr style="background: rgba(0,0,0,0);">
                        <td style="font-weight: bolder;font-size: 24px;">ИТОГО</td>
                        <td style="font-weight: bolder;font-size: 24px;"><?= intval($allAmount['allAmount']) ?> р.</td>
                        <td></td>
                        <td style="font-weight: bolder;font-size: 24px;"><?=$transactsAmount['amount']?> р.</td>
                        <td></td>
                        <td></td>
                    </tr>
                    </tfoot>
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







    let priceSet = "DESC";
    let ratingSet = "ASC";

    $('#priceSet').on('click', function(){
        selectAllValues();
    });
    $('#ratingSet').on('click', function(){
        selectAllValues();
    });



    $('#source').on('input', function(){
        selectAllValues();
    });

    $('#city').on('input', function(){
        selectAllValues();
    });

    $('#type').on('input', function(){
        selectAllValues();
    });

    /*
     * Выделение рейтинга
     */
    $("input[name='paid_period_start1']").on('click', function(){
        if (ratingSet == "ASC") {
            ratingSet = "DESC";
            $('#ratingSet svg').remove();
            $('#ratingSet').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px" height="14px">  <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUbGHUa2DUbGHUa2DUbGHUbGHTa2DUbGHUa2DUa2DUbGHUa2DUbGHUa2DUa2DUbGHUbGHUbGHUbGHTa2DUbGHTa2DUbGHUbGHUbGHUa2DUbGHUbGHUbGHUa2DUbGHUbGHUa2DUa2DTa2D///9dLRnhAAAAJHRSTlMARagEWdAJVsoIygjKViRVywIL0XNIvxbIQNq2zsm2NuqrVKPjgWrWAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBM6GzaH70UAAABFSURBVAjXY2BgYGRiZgACFlY2EMXOwQmmuLixUDxgOV4IBebxMfALCAoxCIuIiolLMEhKScvIyjEwyCuoKIJMU1IWZwAAXHwDOGBeIQEAAAAASUVORK5CYII=" />  </svg>');
        } else {
            ratingSet = "ASC";
            $('#ratingSet svg').remove();
            $('#ratingSet').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px" height="14px">  <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUa2DUbGHUa2DTa2DUbGHUbGHUa2DUbGHUbGHUa2DUa2DUbGHUa2DUbGHUbGHUbGHTa2DUbGHUa2DUa2DUbGHTa2DUbGHUbGHUa2DUbGHUa2DUa2DTa2DUa2DUbGHUa2DUbGHUa2DUbGH////U+n7tAAAAJHRSTlMAVKMWNuqrCUDats7J0XNIv8gkVcsCC1bKCMpWCFYIWdBFqATnMOWVAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBQAIklkr7EAAABISURBVAjXTclHEoAgAMDAKPbeRcTu/9+o4MXTziSA4wrA8+8gJIqTNEvIi7ISNQ1t1w/vHOWEQVlmpS1fXKT+WH9x20PDcV48rR0D+ji28akAAAAASUVORK5CYII=" />  </svg>');
        }
    });

    /*
     * Выделение цены
     */
    $("input[name='paid_period_start2']").on('click', function(){
       if (priceSet == "ASC") {
           priceSet = "DESC";
           $('#priceSet svg').remove();
           $('#priceSet').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px" height="14px">  <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUbGHUa2DUbGHUa2DUbGHUbGHTa2DUbGHUa2DUa2DUbGHUa2DUbGHUa2DUa2DUbGHUbGHUbGHUbGHTa2DUbGHTa2DUbGHUbGHUbGHUa2DUbGHUbGHUbGHUa2DUbGHUbGHUa2DUa2DTa2D///9dLRnhAAAAJHRSTlMARagEWdAJVsoIygjKViRVywIL0XNIvxbIQNq2zsm2NuqrVKPjgWrWAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBM6GzaH70UAAABFSURBVAjXY2BgYGRiZgACFlY2EMXOwQmmuLixUDxgOV4IBebxMfALCAoxCIuIiolLMEhKScvIyjEwyCuoKIJMU1IWZwAAXHwDOGBeIQEAAAAASUVORK5CYII=" />  </svg>');
       } else {
           priceSet = "ASC";
           $('#priceSet svg').remove();
           $('#priceSet').append('<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6px" height="14px">  <image  x="0px" y="0px" width="6px" height="14px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAYAAAAOCAMAAAA7QZ0XAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAAclBMVEX////Ua2DUa2DUbGHUa2DTa2DUbGHUbGHUa2DUbGHUbGHUa2DUa2DUbGHUa2DUbGHUbGHUbGHTa2DUbGHUa2DUa2DUbGHTa2DUbGHUbGHUa2DUbGHUa2DUa2DTa2DUa2DUbGHUa2DUbGHUa2DUbGH////U+n7tAAAAJHRSTlMAVKMWNuqrCUDats7J0XNIv8gkVcsCC1bKCMpWCFYIWdBFqATnMOWVAAAAAWJLR0QAiAUdSAAAAAd0SU1FB+UDDBQAIklkr7EAAABISURBVAjXTclHEoAgAMDAKPbeRcTu/9+o4MXTziSA4wrA8+8gJIqTNEvIi7ISNQ1t1w/vHOWEQVlmpS1fXKT+WH9x20PDcV48rR0D+ji28akAAAAASUVORK5CYII=" />  </svg>');
       }
    });

    /*
     * Формирование запроса с выделением значений
     */
    function selectAllValues() {
        let dateAt = $("input[name='paid_period_start1']").html();
        let dateTo = $("input[name='paid_period_start2']").html();

        let source = $('#source').val();
        let city = $('#city').val();
        let type = $('#type').val();

        exportData(dateAt, dateTo, priceSet, ratingSet, source, city, type);
    }

    /*
     * Запрос к обработчику
     */
    function exportData(dateAt, dateTo, priceSet, ratingSet, source, city, type) {
        $.post(
            '/ajax/selectForDashboard.php',
            {
                dateAt: dateAt,
                dateTo: dateTo,
                priceSet: priceSet,
                ratingSet: ratingSet,
                source: source,
                city: city,
                type: type
            },
            function (data) {
                $('table .exportedItem').remove();
                $('table tbody').append(data);
            }
        );
    }

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

    $('#fromshowdate').html(fromDate);
    $('#toshowdate').html(toDate);

    //убирает модалку когда кликаем вне модалки
    $(document).on('mouseup', function(e){
        if (!$('.table__seach-field').is(e.target) && $('.table__seach-field').has(e.target).length === 0) {
            $('.table__seach-field').removeClass('active');
        }
    });


    //при выборе "выбрать все" выбираются все опции
    $('input.all').on('click', function(){
        if ($(this).is(':checked')) {
            $('.table__seach-field.active input').prop('checked', true);
        } else {
            $('.table__seach-field.active input').prop('checked', false);
        }
    });

    $('#weekSelect').on('click', function () {
        fromDate = dateCount(-7, +1);
        toDate = dateCount(0,+1);

        $('#fromshowdate').html(fromDate);
        $('#toshowdate').html(toDate);

        console.log(fromDate);
    });

    $('#monthSelect').on('click', function () {
        fromDate = dateCount();
        toDate = dateCount(0, +1);

        $('#fromshowdate').html(fromDate);
        $('#toshowdate').html(toDate);
    });

    $('#yearSelect').on('click', function () {
        fromDate = dateCount(0, +1, -1);
        toDate = dateCount(0, +1);

        $('#fromshowdate').html(fromDate);
        $('#toshowdate').html(toDate);
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

    select{
        border: none;
        width: 150px;
        height: 44px;
        padding: 5px 10px;
        border-radius: 22px;
        margin-left: 15px;
    }
    .table__seach-field {
        z-index: 1000;
        width: 230px;
    }
    .table__seach-field {
        position: absolute;
        left: 16px;
        padding: 30px 20px 50px;
        box-shadow: 0 1px 23px 1px rgba(42, 49, 57, .14);
        border-radius: 22px;
        background-color: #fff;
        transition: .3s ease-in-out;
        padding: 20px 20px;
    }

</style>


<script type="text/javascript" src="/admin/assets/js/scripts.min.js"></script>