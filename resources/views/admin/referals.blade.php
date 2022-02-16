@extends('layouts.meta')

@section('header')
    @include('admin.layouts.header')
@endsection

@section('content')

    <section class="main-section">

        <div class="row" style="height: 50px;display: flex;align-items: center;margin-top: 20px;">
            <div class="col-xl-10 col-lg-12 d-flex justify-content-between">
                <h2><b>Реферальная система</b></h2>

                <a href="edit-employeer" class="btn btn-warning" style="width:280px;">Добавить агента</a>
            </div>
        </div>
        <div class="row mt-2">
            <div class="col-xl-10 col-lg-12 d-flex justify-content-end">
                <div class="search-input d-flex align-items-center">
                    <label for="searchInput" style="margin-right: -35px;position:relative;z-index:10;margin-top:3px;">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="#576a80"><g><g><path d="M19.329 20.266c-.196.19-.454.294-.726.294-.288 0-.556-.115-.756-.323l-4.772-4.993a7.917 7.917 0 0 1-4.604 1.462c-4.43 0-8.035-3.626-8.035-8.083C.436 4.166 4.041.54 8.471.54c4.431 0 8.036 3.626 8.036 8.083 0 1.908-.668 3.74-1.886 5.197l4.737 4.955c.4.42.387 1.088-.029 1.491zM2.532 8.623c0 3.294 2.665 5.975 5.94 5.975 3.274 0 5.938-2.68 5.938-5.975 0-3.295-2.664-5.975-5.939-5.975-3.274 0-5.939 2.68-5.939 5.975z"></path></g></g></svg>
                    </label>
                    <input type="text" id="searchInput" style="border-radius: 23px;padding-left: 0px;text-align: center;width:280px;" placeholder="Поиск">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-lg-12 col-xl-10">
                <hr>
                <!-- New table -->
                <table class="table" style="width: 100%;">
                    <thead>
                    <tr>
                        <th style="width: 220px;">
                            ФИО
                        </th>
                        <th style="width: 130px;">
                            Город
                        </th>
                        <th style="width: 150px;">
                            Статус
                        </th>
                        <th>
                            Реферальная система
                        </th>
                        <th style="width:100px;min-width: 100px;text-align: center;"></th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>
                            <span class="link">http://polychay.ru/referalReg.php?id=</span>
                            <a href="">
                                <svg width="35px" height="35px"><use transform="scale(.6) translate(5, 10)" xlink:href="#icon-paper-clip"></use></svg>
                            </a>
                            <input class="link display-inline" style="display: inline;position: absolute;z-index: -1;opacity: 0;" id="link-" value="http://polychay.ru/referalReg.php?id=">
                        </td>
                        <td class="text-center">
                            <a href="/admin/action/ac-org.php?id=45&amp;act=delete">
                                <svg viewBox="-40 0 427 427.00131" width="18" height="22" xmlns="http://www.w3.org/2000/svg"><path d="m232.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m114.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path><path d="m28.398438 127.121094v246.378906c0 14.5625 5.339843 28.238281 14.667968 38.050781 9.285156 9.839844 22.207032 15.425781 35.730469 15.449219h189.203125c13.527344-.023438 26.449219-5.609375 35.730469-15.449219 9.328125-9.8125 14.667969-23.488281 14.667969-38.050781v-246.378906c18.542968-4.921875 30.558593-22.835938 28.078124-41.863282-2.484374-19.023437-18.691406-33.253906-37.878906-33.257812h-51.199218v-12.5c.058593-10.511719-4.097657-20.605469-11.539063-28.03125-7.441406-7.421875-17.550781-11.5546875-28.0625-11.46875h-88.796875c-10.511719-.0859375-20.621094 4.046875-28.0625 11.46875-7.441406 7.425781-11.597656 17.519531-11.539062 28.03125v12.5h-51.199219c-19.1875.003906-35.394531 14.234375-37.878907 33.257812-2.480468 19.027344 9.535157 36.941407 28.078126 41.863282zm239.601562 279.878906h-189.203125c-17.097656 0-30.398437-14.6875-30.398437-33.5v-245.5h250v245.5c0 18.8125-13.300782 33.5-30.398438 33.5zm-158.601562-367.5c-.066407-5.207031 1.980468-10.21875 5.675781-13.894531 3.691406-3.675781 8.714843-5.695313 13.925781-5.605469h88.796875c5.210937-.089844 10.234375 1.929688 13.925781 5.605469 3.695313 3.671875 5.742188 8.6875 5.675782 13.894531v12.5h-128zm-71.199219 32.5h270.398437c9.941406 0 18 8.058594 18 18s-8.058594 18-18 18h-270.398437c-9.941407 0-18-8.058594-18-18s8.058593-18 18-18zm0 0"></path><path d="m173.398438 154.703125c-5.523438 0-10 4.476563-10 10v189c0 5.519531 4.476562 10 10 10 5.523437 0 10-4.480469 10-10v-189c0-5.523437-4.476563-10-10-10zm0 0"></path></svg>
                            </a>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <script type="text/javascript">
            function copyLink(linkId) {
                $(linkId).select();
                document.execCommand('copy');
            }
        </script>

        <style>
            table svg {
                transition: .3s ease;
            }
            table svg:active {
                transform: scale(.9);
            }
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
        </style><!--        <div class="tech">-->
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
