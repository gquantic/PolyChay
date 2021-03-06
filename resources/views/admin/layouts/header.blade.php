@extends('layouts.meta')
@section('header')

    <div class="col-lg-3 col-xl-3  headermenu-col" id="header-col">
        <div class="menu-vertical"  id="vertical-menu">
            <nav class="navbar navbar-expand-lg navbar-light catalog-navbar">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <img src="{{asset('icons/down-arrow.svg')}}" alt="">
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav m-auto d-flex flex-column align-items-center justify-content-between" style="height: 100%;">
                        <li class="header-logo mt-2">
                            <a class="nav-link max-logo" href="/"><img src="{{asset('img/logo.png')}}" alt="" width="180px" style="top: -300px;"></a>
                            <a class="nav-link min-logo" href="/"><img src="{{asset('img/min-logo.png')}}" alt=""></a>
                        </li>

                        <div class="links">
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <svg transform="translate(1, 1) scale(1.15)"><use xlink:href="#icon-tower"></use></svg>
                                    <span>Организации</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin-dashboard')}}">
                                    <svg><use xlink:href="#icon-chart"></use></svg>
                                    <span>Статистика</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin-transacts')}}">
                                    <svg transform="translate(1)"><use xlink:href="#icon-cash"></use></svg>
                                    <span>Транзакции</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('admin-referals')}}">
                                    <svg transform="translate(1)"><use xlink:href="#icon-referals"></use></svg>
                                    <span>Рефералы</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/exit.php">
                                    <svg class="icon_logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" transform="translate(1.3)">
                                        <path dominant-baseline="central" d="M19.590,23.500 L4.035,23.500 C2.086,23.500 0.500,21.914 0.500,19.965 L0.500,4.410 C0.500,2.461 2.086,0.875 4.035,0.875 L19.590,0.875 C21.539,0.875 23.125,2.461 23.125,4.410 L23.125,6.178 C23.125,6.666 22.729,7.061 22.241,7.061 C21.753,7.061 21.357,6.666 21.357,6.178 L21.357,4.410 C21.357,3.435 20.564,2.643 19.590,2.643 L4.035,2.643 C3.060,2.643 2.267,3.435 2.267,4.410 L2.267,19.965 C2.267,20.939 3.060,21.732 4.035,21.732 L19.590,21.732 C20.564,21.732 21.357,20.939 21.357,19.965 L21.357,18.197 C21.357,17.709 21.753,17.313 22.241,17.313 C22.729,17.313 23.125,17.709 23.125,18.197 L23.125,19.965 C23.125,21.914 21.539,23.500 19.590,23.500 ZM23.125,12.187 C23.125,12.676 22.729,13.071 22.241,13.071 L12.829,13.071 C12.341,13.071 11.945,12.676 11.945,12.187 C11.945,11.699 12.341,11.304 12.829,11.304 L22.241,11.304 C22.729,11.304 23.125,11.699 23.125,12.187 ZM9.534,12.816 L12.839,16.162 C13.182,16.509 13.179,17.069 12.831,17.412 C12.659,17.582 12.435,17.667 12.210,17.667 C11.982,17.667 11.754,17.579 11.581,17.404 L8.278,14.060 C7.247,13.026 7.248,11.346 8.281,10.312 L11.586,7.011 C11.931,6.666 12.490,6.666 12.835,7.011 C13.180,7.357 13.180,7.916 12.835,8.261 L9.530,11.562 C9.186,11.907 9.186,12.468 9.530,12.812 C9.532,12.814 9.533,12.815 9.534,12.816 Z"></path>
                                    </svg>
                                    <span>Выйти</span>
                                </a>
                            </li>
                        </div>

                        <div class="min_links">
                            <li class="nav-item">
                                <a class="nav-link" href="/profile/">
                                    <svg transform="translate(-5 0)"><use xlink:href="#icon-testing"></use></svg>
                                    <span>Организация</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard">
                                    <svg transform="translate(-8 0)"><use xlink:href="#icon-profits"></use></svg>
                                    <span>Статистика</span>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="">
                                    <svg class="icon_logout" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="34px" height="34px">
                                        <path dominant-baseline="central" transform="translate(15 3)" d="M19.590,23.500 L4.035,23.500 C2.086,23.500 0.500,21.914 0.500,19.965 L0.500,4.410 C0.500,2.461 2.086,0.875 4.035,0.875 L19.590,0.875 C21.539,0.875 23.125,2.461 23.125,4.410 L23.125,6.178 C23.125,6.666 22.729,7.061 22.241,7.061 C21.753,7.061 21.357,6.666 21.357,6.178 L21.357,4.410 C21.357,3.435 20.564,2.643 19.590,2.643 L4.035,2.643 C3.060,2.643 2.267,3.435 2.267,4.410 L2.267,19.965 C2.267,20.939 3.060,21.732 4.035,21.732 L19.590,21.732 C20.564,21.732 21.357,20.939 21.357,19.965 L21.357,18.197 C21.357,17.709 21.753,17.313 22.241,17.313 C22.729,17.313 23.125,17.709 23.125,18.197 L23.125,19.965 C23.125,21.914 21.539,23.500 19.590,23.500 ZM23.125,12.187 C23.125,12.676 22.729,13.071 22.241,13.071 L12.829,13.071 C12.341,13.071 11.945,12.676 11.945,12.187 C11.945,11.699 12.341,11.304 12.829,11.304 L22.241,11.304 C22.729,11.304 23.125,11.699 23.125,12.187 ZM9.534,12.816 L12.839,16.162 C13.182,16.509 13.179,17.069 12.831,17.412 C12.659,17.582 12.435,17.667 12.210,17.667 C11.982,17.667 11.754,17.579 11.581,17.404 L8.278,14.060 C7.247,13.026 7.248,11.346 8.281,10.312 L11.586,7.011 C11.931,6.666 12.490,6.666 12.835,7.011 C13.180,7.357 13.180,7.916 12.835,8.261 L9.530,11.562 C9.186,11.907 9.186,12.468 9.530,12.812 C9.532,12.814 9.533,12.815 9.534,12.816 Z"></path>
                                    </svg>
                                    <span>Выйти</span>
                                </a>
                            </li>
                        </div>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <form id="logout" class="visually-hidden" method="post" action="/logout">
        @csrf
        <button type="submit" style="display: none;"></button>
    </form>
@endsection
