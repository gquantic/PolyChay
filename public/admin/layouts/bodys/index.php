<?php



ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);



require '../profile/assets/layouts/bodys/FilterClass.php';


function csrf_token(){
    $time = time();
    $secretKey = "33Sht?U<up-~f=>@xy8sah3uwA?T(<E8gE92vh5]rs4M3%-EbX,u9SqCk6jQ)}-J";
// $userData тоже может содержать неизвестные злоумышленнику данные.
// Вы свой числовой id на хабре знаете?
    $token = md5($secretKey . $time) . ':' . $time;

    return $token;
}




?>


<div class="row" style="height: 100px;display: flex;align-items: center;">
    <div class="col-xl-5 col-lg-5">
        <h2><b>Организации</b></h2>
    </div>
    <div class="col-lg-7 d-flex justify-content-end align-items-center flex-column">
        <a href="add-organisation" class="btn btn-warning">Добавить организацию</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-md-12">
        <div class="containerWorkFile-wrap">
            <div class="containerWorkFile">

                <form method="POST" class="table__seach__form" enctype="multipart/form-data" autocomplete="off">
                <table class="table" id="table">
                    <thead>
                    <tr>
                        <th class="table__name" style="min-width:150px !important;">Название</th>
                        <th style="max-width:100px !important;">
                            Начало
                            платного
                            периода
                        </th>
                        <th style="min-width:50px !important;max-width: 90px;">
                            Размер
                            комиссии
                        </th>
                        <th style="max-width: 50px !important;">
                            Условия
                            вывода
                        </th>
                        <th style="max-width:120px !important;">
                            Тип
                            организации
                        </th>
                        <th style="max-width:30px !important;">
                            Дата
                            подключения
                        </th>
                        <th>Город</th>
                        <th>Источник</th>
                        <th style="min-width:50px !important;" class="table__offOnn"></th>
                        <th style="width:152px !important;" class="table__func"></th>
                    </tr>
                    </thead>

                    <tbody>
                     <tr class="table__seach">
                        <td>
                                <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"/></g></g></svg></div>
                            </div>
                            <div class="table__seach-field" id="search1">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>

                                    <?php Filter::table_seach_field('name'); ?>

                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="table__date-wrap">
                                    <span>19.01.21 </span>
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
                            <div class="table__seach-field" id="search2">
                                <label>От <input type="date" name="paid_period_start1" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                                <label>До <input type="date" name="paid_period_start2" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                                       fill="#576a80">
                                        <g>
                                            <g>
                                                <path
                                                        d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search3">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <?php Filter::table_seach_field('commission'); ?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                                       fill="#576a80">
                                        <g>
                                            <g>
                                                <path
                                                        d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search4">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <?php Filter::table_seach_field('withdrawal_conditions'); ?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <!-- Тип организации -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                                       fill="#576a80">
                                        <g>
                                            <g>
                                                <path
                                                        d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search5">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <?php Filter::table_seach_field('organization_type'); ?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="table__date-wrap">
                                    <span>19.01.21 </span>
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
                            <div class="table__seach-field" id="search6">
                                <label>От <input type="date" name="connection_date1" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                                <label>До <input type="date" name="connection_date2" min="1994-01-01" max="<?php echo date('Y-m-d');?>"></label>
                            </div>
                        </td>
                        <td>
                            <!-- Город -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                                       fill="#576a80">
                                        <g>
                                            <g>
                                                <path
                                                        d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search7">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <?php Filter::table_seach_field('town'); ?>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <!-- Источник -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                                       fill="#576a80">
                                        <g>
                                            <g>
                                                <path
                                                        d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search8">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21"
                                                                           viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path
                                                            d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z" />
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span
                                                    class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <?php Filter::table_seach_field('source'); ?>
                                </ul>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>

                    <tbody class="organizations_field_list">
                    <?php require '../ajax/FilterHandler.php'; ?>

                    </tbody>
                </table>
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>" />
                </form>
            </div>
        </div>
    </div>
</div>

<style type="text/css">

    .btn{
        min-height: unset !important;
        min-width: unset !important;
    }

    .table__seach-field select{
        min-width:200px;
    }
    table{
        border: none;
    }
    table thead{
        border-bottom: 1px solid #000;
    }
    table tr, table th, table td{
        border-top: none !important;
        vertical-align: middle !important;
    }
    table a, table svg{
        display: inline;
    }
    table a{
        width: 30px;
        margin-right: 15px;
        display: inline;
        text-align: center;
    }
    .table tbody tr.table__seach .table__seach-field{
        z-index: 1000;
        width: 230px;
    }
    .table tbody tr.table__seach .table__seach-field ul{
        list-style: none;
        margin-left: -45px;
    }
</style>



<script>
    /*
    var sortItems = new Array();

    $('#sortname input:checkbox').change(function(){
        let date = document.querySelector('#filter_adddate').value;
        if(this.checked == true){
            sortItems[this.value] = this.value;
        }else{
            delete sortItems[this.value];
        }

        $('table #search_result').remove();

        if(Object.keys(sortItems).indexOf( 'all' ) != -1){
            $('table #search_result').remove();
            $.post(
                "/libs/filter/filterorgs.php",
                {
                    act: "export",
                    from: "users",
                    page: "adminorgs",
                    sortItem: '%%',
                    type: $('select#type').val(),
                    city: $('select#city').val(),
                    source: $('select#source').val(),
                    date: date
                },
                function (data) {
                    $('tbody').append(data);
                }
            );
        }else
        {
            Object.keys(sortItems).forEach(function (i, key) {
                $('table #search_result').remove();
                $.post(
                    "/libs/filter/filterorgs.php",
                    {
                        act: "export",
                        from: "users",
                        page: "adminorgs",
                        sortItem: i,
                        type: $('select#type').val(),
                        city: $('select#city').val(),
                        source: $('select#source').val(),
                        date: date
                    },
                    function (data) {
                        $('tbody').append(data);
                    }
                );
            });
        }

        if(Object.keys(sortItems).length < 1){
            $.post(
                "/libs/filter/filterorgs.php",
                {
                    act: "export",
                    from: "users",
                    page: "adminorgs",
                    sortItem: '%%',
                    type: $('select#type').val(),
                    city: $('select#city').val(),
                    source: $('select#source').val(),
                    date: date
                },
                function (data) {
                    $('tbody').append(data);
                }
            );
        }
    });

    $('#searchbtn').on('click', function () {
        $('table #search_result').remove();

        if(Object.keys(sortItems).length < 1){
            let date = document.querySelector('#filter_adddate').value;
            console.log(date);
            console.log($('select#type').val());

            $.post(
                "/libs/filter/filterorgs.php",
                {
                    act: "export",
                    from: "users",
                    page: "adminorgs",
                    type: $('select#type').val(),
                    city: $('select#city').val(),
                    source: $('select#source').val(),
                    startPayDate: $('#filter_startpaydate').val(),
                    connectDate: $('#filter_adddate').val(),
                    commissionAmount: $('#commissionAmount').val(),
                    sortItem: '%%',
                    date: date
                },
                function (data) {
                    $('tbody').append(data);
                }
            );
        } else {
            $('table #search_result').remove();

            Object.keys(sortItems).forEach(function(i, key) {
                let date = document.querySelector('#filter_adddate').value;
                console.log(date);
                console.log($('select#type').val());

                $.post(
                    "/libs/filter/filterorgs.php",
                    {
                        act: "export",
                        from: "users",
                        page: "adminorgs",
                        type: $('select#type').val(),
                        city: $('select#city').val(),
                        source: $('select#source').val(),
                        startPayDate: $('#filter_startpaydate').val(),
                        connectDate: $('#filter_adddate').val(),
                        commissionAmount: $('#commissionAmount').val(),
                        sortItem: i,
                        date: date
                    },
                    function (data) {
                        $('tbody').append(data);
                    }
                );
            });
        }
    });

*/

</script>

<script type="text/javascript" src="/admin/assets/js/scripts.min.js"></script>