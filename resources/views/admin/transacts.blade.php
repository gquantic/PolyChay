@extends('layouts.meta')

@section('header')
    @include('admin.layouts.header')
@endsection

@section('content')

    <section class="main-section">

    <div class="row" style="height: 100px;display: flex;align-items: center;">
        <div class="col-xl-12 col-lg-12">
            <h2><b>Транзакции</b></h2>
        </div>
    </div>

    <div class="row mb-0 mt-2">
        <div class="col-12">
            <h6 class="mb-0" style="color: #576a80;">
                Транзакции входящие
            </h6>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-12">
            <div class="d-flex align-items-center" style="width:100%;max-width:1270px;display:flex;justify-content:space-between;">
                <div class="">
                    <!-- Calendar 1 -->
                    <input type="date">
                    <a href="" class="link ml-3">Найти транзакцию</a>
                </div>
            </div>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-12">
            <table class="table" id="table">
                <thead>
                <tr>
                    <th style="width:230px !important;min-width: 230px !important;">
                        Город
                    </th>
                    <th style="width:150px !important;min-width: 150px !important;">
                        Вид
                    </th>
                    <th style="width:100px !important;min-width: 100px !important;">
                        Название
                    </th>
                    <th style="width:100px !important;min-width: 100px !important;">
                        Адрес
                    </th>
                    <th style="width:150px !important;">
                        Сотрудник
                    </th>
                    <th style="width:120px !important;min-width: 120px !important;">Агент</th>
                    <th style="width:100px !important;min-width: 100px !important;">Чаевые</th>
                    <th style="width:100px !important;">Коммиссия на клиенте</th>
                    <th style="width:50px !important;min-width: 50px !important;">% комиссии</th>
                    <th style="width:50px !important;min-width: 50px !important;">Комиссия</th>

                </tr>
                </thead>
                <tbody>
                <tr class="table__seach">
                    <td>
                        <div style="position: relative;">
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                            </div>
                            <div class="table__seach-field">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск" id="search1">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param" id="sortname">
                                    <li class="table__seach-param-item show">
                                        <label><input type="checkbox" class="all" name=""><span class="checks"></span><span class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <li class="table__seach-param-item show">
                                        <label><input type="checkbox" name=""><span class="checks"></span><span class="table__seach-name"> Москва</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </td>
                    <td>
                        <div style="position: relative;">
                            <div class="table__seach-btn">
                                <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                            </div>
                            <div class="table__seach-field">
                                <div class="inputSearch">
                                    <label for="search1" class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></label>
                                    <input type="text" autocomplete="off" placeholder="Поиск" id="search1">
                                </div>
                                <hr class="hr">
                                <ul class="table__seach-param" id="sortname">
                                    <li class="table__seach-param-item show">
                                        <label><input type="checkbox" class="all" name=""><span class="checks"></span><span class="table__seach-name">Выделить все</span></label>
                                    </li>
                                    <li class="table__seach-param-item show">
                                        <label><input type="checkbox" name=""><span class="checks"></span><span class="table__seach-name"> Кафе</span></label>
                                    </li>
                                    <li class="table__seach-param-item show">
                                        <label><input type="checkbox" name=""><span class="checks"></span><span class="table__seach-name"> Ресторан</span></label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </td>
                    <td>
                        <!-- Название -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <select class="form-control" id="city">
                            </select><input type="text" oninput="updateSearch()" id="name">

                        </div>
                    </td>
                    <td>
                        <!-- Адрес -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <input type="text" id="street" oninput="updateSearch()">
                        </div>
                    </td>

                    <td>
                        <!-- Сотрудник -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <select class="form-control" id="employee" oninput="updateSearch()">
                                <option value="%%">Любой</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <!-- Агент -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <select class="form-control" id="agent" oninput="updateSearch()">
                                <option value="%%">Любой</option>
                            </select>
                        </div>
                    </td>

                    <td>
                    </td>


                    <td>
                        <!-- Комиссия на клиенте -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <select class="form-control" id="commission" oninput="updateSearch()">
                                <option value="%">Не учитывать</option>
                                <option value="1">Да</option>
                                <option value="0">Нет</option>
                            </select>
                        </div>
                    </td>

                    <td>
                        <!-- % комиссии -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field">
                            <input type="text" id="commission_value" oninput="updateSearch()">
                        </div>
                    </td>

                    <td>
                        <!-- Комиссия -->
                        <div class="table__seach-btn">
                            <div class="icon"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg></div>
                        </div>
                        <div class="table__seach-field" style="margin-left: -130px;">
                            <input type="text" class="pl-2 rounded" id="commission_total" oninput="updateSearch()" style="border: 1px solid rgba(0,0,0,.05) !important;">
                        </div>
                    </td>

                    <td>
                    </td>
                    <td>
                    </td>
                    <td>
                    </td>




                </tr>

                <tr class="find">
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>


                    <td></td>
                    <td> руб.</td>
                    <td></td>
                    <td>%</td>
                    <td> руб.</td>

                    <td></td>
                    <td></td>
                    <td> руб.</td>
                    <td>%</td>
                    <td> руб.</td>


                </tr>

                </tbody>
                <tfoot class="table">
                <tr class="total">
                    <td style="font-weight: bolder;font-size: 24px;">ИТОГО</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td style="font-weight: bolder;font-size: 20px;"> руб.</td>
                    <td></td>
                    <td></td>
                    <td style="font-weight: bolder;font-size: 20px;"> руб.</td>
                </tr>
                </tfoot>

            </table>

        </div>
    </div>

    <style type="text/css">

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
        }
        .table tbody tr.table__seach .table__seach-field ul{
            list-style: none;
            margin-left: -45px;
        }
        .table tbody tr.table__seach .table__seach-btn {
            max-width: none !important;
        }
    </style>



    <script>




        function updateSearch() {
            var city = $('#city').val();
            var type = $('#type').val();
            var name = $('#name').val();
            var street = $('#street').val();
            var employee = $('#employee').val();
            var source = $('#agent').val();
            var commission = $('#commission').val();
            var commission_amount = $('#commission_value').val();
            var commission_total = $('#commission_total').val();

            $.post(
                '/admin/action/filterTransactionsPay.php',
                {
                    city: city,
                    type: type,
                    name: name,
                    street: street,
                    employee: employee,
                    source: source,
                    commission: commission,
                    commission_amount: commission_amount,
                    commission_total: commission_total
                },
                function(data) {
                    console.log(data);
                    $('tbody .find').remove();
                    $('tbody').append(data);
                }
            );
        }

        var sortItems = new Array();

        $('#sortname input:checkbox').change(function(){
            if(this.checked == true){
                sortItems[this.value] = this.value;
            }else{
                delete sortItems[this.value];
            }

            console.log(sortItems)

            console.log(sortItems.length);
        });


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
    </script>

    <script type="text/javascript" src="{{asset('js/interface.js')}}"></script><!--        <div class="tech">-->
    <!--            <svg class="iconafter" transform="translate(-1 -1)" width="20px" height="20px"><use xlink:href="#icon-msg"></use></svg>-->
    <!--        </div>-->
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
