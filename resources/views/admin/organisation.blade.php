@extends('layouts.meta')

@section('header')
    @include('admin.layouts.header')
@endsection

@section('content')
    <section class="main-section">
        <div class="row" style="height: 100px;display: flex;align-items: center;">
            <div class="col-xl-5 col-lg-5">
                <h2><b>Организации</b></h2>
            </div>
            <div class="col-lg-7 d-flex justify-content-end align-items-center flex-column">
                <a href="add-organisation" class="btn btn-warning">Добавить организацию</a>
            </div>
        </div>
        <div class="col-12">
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
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                            </div>
                            <div class="table__seach-field" id="search1">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>

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
                                                    <path d="M10.726 6.712a.694.694 0 1 1 0 1.388.694.694 0 0 1 0-1.388zm0 3.016a.694.694 0 1 1 0 1.387.694.694 0 0 1 0-1.387zm3.018-3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM16.727 8.1V4.286c0-.764-.623-1.386-1.388-1.386h-.902v.693a.693.693 0 0 1-1.387 0V2.9H9.893v.693a.693.693 0 0 1-1.388 0V2.9H5.383v.693a.693.693 0 0 1-1.387 0V2.9h-.867c-.766 0-1.388.622-1.388 1.386V15.1c0 .764.622 1.386 1.388 1.386h8.186v-2.842a2.777 2.777 0 0 1 2.776-2.773h3.33a.694.694 0 0 1 .5 1.175l-5.412 5.614a.694.694 0 0 1-.569.21.697.697 0 0 1-.07.003H3.13A2.777 2.777 0 0 1 .353 15.1V4.286A2.777 2.777 0 0 1 3.13 1.514h.867V.82a.693.693 0 0 1 1.387 0v.694h3.122V.82a.693.693 0 0 1 1.388 0v.694h3.157V.82a.694.694 0 0 1 1.387 0v.694h.902a2.777 2.777 0 0 1 2.776 2.772V8.1a.693.693 0 0 1-1.388 0zm-4.024 7.361l3.087-3.202h-1.7c-.765 0-1.387.622-1.387 1.386zM4.69 6.712a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM4.69 12.743a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-6.03a.693.693 0 1 1 0 1.386.693.693 0 0 1 0-1.387z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="table__seach-field" id="search2">
                                <label>От <input type="date" name="paid_period_start1" min="1994-01-01" max="2022-02-12"></label>
                                <label>До <input type="date" name="paid_period_start2" min="1994-01-01" max="2022-02-12"></label>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                        <g>
                                            <g>
                                                <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search3">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>
                                </ul>
                            </div>
                        </td>
                        <td>
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                        <g>
                                            <g>
                                                <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search4">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>

                                </ul>
                            </div>
                        </td>
                        <td>
                            <!-- Тип организации -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                        <g>
                                            <g>
                                                <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search5">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>

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
                                                    <path d="M10.726 6.712a.694.694 0 1 1 0 1.388.694.694 0 0 1 0-1.388zm0 3.016a.694.694 0 1 1 0 1.387.694.694 0 0 1 0-1.387zm3.018-3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM16.727 8.1V4.286c0-.764-.623-1.386-1.388-1.386h-.902v.693a.693.693 0 0 1-1.387 0V2.9H9.893v.693a.693.693 0 0 1-1.388 0V2.9H5.383v.693a.693.693 0 0 1-1.387 0V2.9h-.867c-.766 0-1.388.622-1.388 1.386V15.1c0 .764.622 1.386 1.388 1.386h8.186v-2.842a2.777 2.777 0 0 1 2.776-2.773h3.33a.694.694 0 0 1 .5 1.175l-5.412 5.614a.694.694 0 0 1-.569.21.697.697 0 0 1-.07.003H3.13A2.777 2.777 0 0 1 .353 15.1V4.286A2.777 2.777 0 0 1 3.13 1.514h.867V.82a.693.693 0 0 1 1.387 0v.694h3.122V.82a.693.693 0 0 1 1.388 0v.694h3.157V.82a.694.694 0 0 1 1.387 0v.694h.902a2.777 2.777 0 0 1 2.776 2.772V8.1a.693.693 0 0 1-1.388 0zm-4.024 7.361l3.087-3.202h-1.7c-.765 0-1.387.622-1.387 1.386zM4.69 6.712a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.016a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zM4.69 12.743a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm3.018 3.015a.693.693 0 1 1 0 1.387.693.693 0 0 1 0-1.387zm0-6.03a.693.693 0 1 1 0 1.386.693.693 0 0 1 0-1.387z">
                                                    </path>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="table__seach-field" id="search6">
                                <label>От <input type="date" name="connection_date1" min="1994-01-01" max="2022-02-12"></label>
                                <label>До <input type="date" name="connection_date2" min="1994-01-01" max="2022-02-12"></label>
                            </div>
                        </td>
                        <td>
                            <!-- Город -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                        <g>
                                            <g>
                                                <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search7">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>

                                </ul>
                            </div>
                        </td>
                        <td>
                            <!-- Источник -->
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                        <g>
                                            <g>
                                                <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                            </g>
                                        </g>
                                    </svg></div>
                            </div>
                            <div class="table__seach-field" id="search8">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80">
                                            <g>
                                                <g>
                                                    <path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path>
                                                </g>
                                            </g>
                                        </svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param">
                                    <li class="table__seach-param-item">
                                        <label><input class="all" type="checkbox" name=""><span class="checks"></span> <span class="table__seach-name">Выделить все</span></label>
                                    </li>

                                </ul>
                            </div>
                        </td>
                        <td></td>
                    </tr>
                    </tbody>

                    <tbody class="organizations_field_list">
                    <!--                    -->
                    </tbody>
                </table>
            </form>
        </div>
    </section>

@endsection
