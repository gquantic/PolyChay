

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="viewport" content="width=device-width, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" href="/profile/assets/img/min-logo.png" type="image/png">

    <title><?if(!isset($pageTitle) || $pageTitle == '') echo "Личный кабинет"; else echo $pageTitle;?> | Получай</title>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
            integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">

    <script src="https://kit.fontawesome.com/ada758ae4a.js" crossorigin="anonymous"></script>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <link rel="stylesheet" href="/admin/assets/css/navbar.css">
    <link rel="stylesheet" href="/admin/assets/css/styles.min.css">

    <!-- Font awesome -->
    <style type="text/css">
        body {
            font-family: "Gilroy Regular";
        }

        table td, .table  td {
            font-family: "Gilroy Regular" !important;
        }
        table th, .table  th {
            font-family: "Gilroy Bold" !important;
        }
    </style>

    <!-- Icons connect -->
    <?php include 'assets/icons/icons.php'; ?>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-xl-3 col-md-3 col-sm-3 col-3 headermenu-col" id="header-col">
            <div class="menu-vertical" style="position: fixed; z-index: 999;" id="vertical-menu">
                <nav class="navbar navbar-expand-lg navbar-light catalog-navbar">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <img src="/profile/assets/img/icons/down-arrow.svg" alt="">
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto d-block">
                            <li class="header-logo mt-2">
                                <a class="nav-link max-logo" href="/"><img src="/profile/assets/img/logo.png" alt="" width="180px"></a>
                                <a class="nav-link min-logo" href="/"><img src="/profile/assets/img/min-logo.png" alt=""></a>
                            </li>

                            <div class="links">
                                <li class="nav-item">
                                    <a class="nav-link" href="/profile/">
                                        <svg transform="translate(1, 1) scale(1.15)"><use xlink:href="#icon-tower"></use></svg>
                                        <span>Организации</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="dashboard">
                                        <svg><use xlink:href="#icon-chart"></use></svg>
                                        <span>Статистика</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="transacts?showTransacts=pay">
                                        <svg transform="translate(1)"><use xlink:href="#icon-cash"></use></svg>
                                        <span>Транзакции</span>
                                    </a>
                                </li>
                                <?php if (isset($_GET['showTransacts'])): ?>
                                <div class="sub-links" style="margin-top: -8px;margin-bottom: 5px;">
                                    <a class="sub-link <?php if ($_GET['showTransacts'] == 'pay') echo "active"; ?>"
                                        href="transacts?showTransacts=pay">
                                        <span>Входящие</span>
                                    </a>
                                    <a class="sub-link <?php if ($_GET['showTransacts'] == 'out') echo "active"; ?>"
                                       href="transacts?showTransacts=out">
                                        <span>Исходящие</span>
                                    </a>
                                </div>
                                <?php endif; ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="referals">
                                        <svg transform="translate(1)"><use xlink:href="#icon-referals"></use></svg>
                                        <span>Рефералы</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/exit.php">
                                        <svg class="icon_logout"
                                                xmlns="http://www.w3.org/2000/svg"
                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                width="24px" height="24px"
                                             transform="translate(1.3)">
                                            <path dominant-baseline="central"
                                                  d="M19.590,23.500 L4.035,23.500 C2.086,23.500 0.500,21.914 0.500,19.965 L0.500,4.410 C0.500,2.461 2.086,0.875 4.035,0.875 L19.590,0.875 C21.539,0.875 23.125,2.461 23.125,4.410 L23.125,6.178 C23.125,6.666 22.729,7.061 22.241,7.061 C21.753,7.061 21.357,6.666 21.357,6.178 L21.357,4.410 C21.357,3.435 20.564,2.643 19.590,2.643 L4.035,2.643 C3.060,2.643 2.267,3.435 2.267,4.410 L2.267,19.965 C2.267,20.939 3.060,21.732 4.035,21.732 L19.590,21.732 C20.564,21.732 21.357,20.939 21.357,19.965 L21.357,18.197 C21.357,17.709 21.753,17.313 22.241,17.313 C22.729,17.313 23.125,17.709 23.125,18.197 L23.125,19.965 C23.125,21.914 21.539,23.500 19.590,23.500 ZM23.125,12.187 C23.125,12.676 22.729,13.071 22.241,13.071 L12.829,13.071 C12.341,13.071 11.945,12.676 11.945,12.187 C11.945,11.699 12.341,11.304 12.829,11.304 L22.241,11.304 C22.729,11.304 23.125,11.699 23.125,12.187 ZM9.534,12.816 L12.839,16.162 C13.182,16.509 13.179,17.069 12.831,17.412 C12.659,17.582 12.435,17.667 12.210,17.667 C11.982,17.667 11.754,17.579 11.581,17.404 L8.278,14.060 C7.247,13.026 7.248,11.346 8.281,10.312 L11.586,7.011 C11.931,6.666 12.490,6.666 12.835,7.011 C13.180,7.357 13.180,7.916 12.835,8.261 L9.530,11.562 C9.186,11.907 9.186,12.468 9.530,12.812 C9.532,12.814 9.533,12.815 9.534,12.816 Z"/>
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
                                    <a class="nav-link" href="/exit.php">
                                        <svg class="icon_logout"
                                             xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             width="34px" height="34px">
                                            <path dominant-baseline="central" transform="translate(15 3)"
                                                  d="M19.590,23.500 L4.035,23.500 C2.086,23.500 0.500,21.914 0.500,19.965 L0.500,4.410 C0.500,2.461 2.086,0.875 4.035,0.875 L19.590,0.875 C21.539,0.875 23.125,2.461 23.125,4.410 L23.125,6.178 C23.125,6.666 22.729,7.061 22.241,7.061 C21.753,7.061 21.357,6.666 21.357,6.178 L21.357,4.410 C21.357,3.435 20.564,2.643 19.590,2.643 L4.035,2.643 C3.060,2.643 2.267,3.435 2.267,4.410 L2.267,19.965 C2.267,20.939 3.060,21.732 4.035,21.732 L19.590,21.732 C20.564,21.732 21.357,20.939 21.357,19.965 L21.357,18.197 C21.357,17.709 21.753,17.313 22.241,17.313 C22.729,17.313 23.125,17.709 23.125,18.197 L23.125,19.965 C23.125,21.914 21.539,23.500 19.590,23.500 ZM23.125,12.187 C23.125,12.676 22.729,13.071 22.241,13.071 L12.829,13.071 C12.341,13.071 11.945,12.676 11.945,12.187 C11.945,11.699 12.341,11.304 12.829,11.304 L22.241,11.304 C22.729,11.304 23.125,11.699 23.125,12.187 ZM9.534,12.816 L12.839,16.162 C13.182,16.509 13.179,17.069 12.831,17.412 C12.659,17.582 12.435,17.667 12.210,17.667 C11.982,17.667 11.754,17.579 11.581,17.404 L8.278,14.060 C7.247,13.026 7.248,11.346 8.281,10.312 L11.586,7.011 C11.931,6.666 12.490,6.666 12.835,7.011 C13.180,7.357 13.180,7.916 12.835,8.261 L9.530,11.562 C9.186,11.907 9.186,12.468 9.530,12.812 C9.532,12.814 9.533,12.815 9.534,12.816 Z"/>
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
        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-9">

            <!-- Начало тела -->
            <section class="main-section">