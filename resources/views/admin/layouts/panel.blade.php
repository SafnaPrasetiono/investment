<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('head')
    <link rel="stylesheet" href="{{ asset('/assets/app/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/icons/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/assets/dist/css/index.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    @livewireStyles
</head>

<body>

    <div class="wrapper">
        <nav class="navbar navbar-expand-md navbar-light bg-light py-1">
            <div class="container-fluid">
                <button class="btn btn-default" id="btn-slider" type="button">
                    <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
                </button>
                <a class="navbar-brand me-auto text-danger" href="#">Dash<span
                        class="text-warning">Board</span></a>
                <ul class="nav ms-auto">
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
                            <i class="fa fa-bell py-2" aria-hidden="true"></i>
                            <span class="badge bg-danger">10</span>
                        </a>
                        <div class="dropdown-menu mt-2 p-0" style="width: 400px" aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom align-items-cente mb-2">
                                <i class="fa fa-bell me-3" aria-hidden="true"></i>
                                <span class="fw-bold lh-1">Notifikasi</span>
                            </div>
                            <div class="d-block w-100 px-2 pb-2">
                                <a class="dropdown-item position-relative rounded px-1" style="text-wrap: balance;" href="#">
                                    <div class="dropdown-icons bg-primary">
                                        <i class="fa fa-envelope fa-sm"></i>
                                    </div>
                                    <div class="d-block lh-1 ms-2" style="padding-left: 42px">
                                        <p class="fw-bold mb-1">Message</p>
                                        <small class="truncated">Your storage is full, delete some files out of range will be pased into your head and memories for mail.</small>
                                    </div>
                                </a>
                                <a class="dropdown-item position-relative rounded px-1" style="text-wrap: balance;" href="#">
                                    <div class="dropdown-icons bg-warning">
                                        <i class="fa fa-file-o fa-sm"></i>
                                    </div>
                                    <div class="d-block lh-1 ms-2" style="padding-left: 42px">
                                        <p class="fw-bold mb-1">Storage</p>
                                        <small class="truncated">Your storage is full, delete some files out of range will be pased into your head and memories for mail.</small>
                                    </div>
                                </a>
                                <a class="dropdown-item position-relative rounded px-1" style="text-wrap: balance;" href="#">
                                    <div class="dropdown-icons bg-danger">
                                        <i class="fa fa-hdd-o fa-sm"></i>
                                    </div>
                                    <div class="d-block lh-1 ms-2" style="padding-left: 42px">
                                        <p class="fw-bold mb-1">Storage</p>
                                        <small class="truncated">Your storage is full, delete some files out of range will be pased into your head and memories for mail.</small>
                                    </div>
                                </a>

                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropstart">
                        <a class="nav-link text-dark ps-3 pe-1" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown">
                            <img src="{{ asset('/images/user/user.png') }}" alt="user" class="img-user">
                        </a>
                        <div class="dropdown-menu mt-2 p-0 rounded shadow overflow-hidden border-0" style="width: 300px"
                            aria-labelledby="navbarDropdown">
                            <div class="d-flex p-3 border-bottom">
                                <img src="{{ asset('/images/user/user.png') }}" alt="user" class="img-user me-2">
                                <div class="d-block">
                                    <p class="fw-bold m-0 lh-1">YourName</p>
                                    <small>YourAccount@gmail.com</small>
                                </div>
                            </div>
                            <div class="p-2">
                                <a class="dropdown-item rounded m-0 py-2" href="#">
                                    <i style="width: 28px" class="fa fa-user" aria-hidden="true"></i>Profile
                                </a>
                                <a class="dropdown-item rounded m-0 py-2" href="#">
                                    <i style="width: 28px" class="fa fa-cog" aria-hidden="true"></i>Setting
                                </a>
                                <a class="dropdown-item rounded m-0 py-2" href="#">
                                    <i style="width: 28px" class="fa fa-sign-out" aria-hidden="true"></i>LogOut
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="slider" id="sliders">
            <div class="slider-head">
                <div class="d-block pt-4 pb-3 px-3">
                    <img src="{{ asset('/images/user/user.png') }}" alt="user" class="slider-img-user mb-2">
                    <p class="fw-bold mb-0 lh-1 text-white">YourName</p>
                    <small class="text-white">YourAccount@gmail.com</small>
                </div>
            </div>
            <div class="slider-body px-1" id="navAccordion">
                <nav class="nav flex-column">
                    <a class="nav-slide nav-link active" href="#">
                        <i class="fa fa-home fa-lg box-icon" aria-hidden="true"></i>Home
                    </a>
                    <a class="nav-slide nav-link" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <i class="fa fa-user fa-lg box-icon" aria-hidden="true"></i>Profile
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="nav-slide nav-link" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne">
                        <i class="fa-solid fa-money-bill-1 fa-lg box-icon"></i>Transaction
                        <i class="fas fa-angle-left fa-sm icon-acr"></i>
                    </a>
                    <div class="accordion-collapse collapse" id="collapseOne" data-bs-parent="#navAccordion">
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Deal Entry
                        </a>
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Deal Correction
                        </a>
                        <a class="nav-slide-two nav-link" href="{{ route('admin.transaction.dealapproval') }}">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Deal Approval
                        </a>
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Deal Ammendemen
                        </a>
                        <hr class="soft my-1 text-white">
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Settelment
                        </a>
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Market
                        </a>
                        <hr class="soft my-1 text-white">
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Transaction Other
                        </a>
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>Transaction Import
                        </a>
                        <hr class="soft my-1 text-white">
                        <a class="nav-slide-two nav-link" href="#">
                            <i class="far fa-circle fa-sm box-icon" aria-hidden="true"></i>View Diary
                        </a>
                    </div>
                    <hr class="soft my-1 text-white">
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-dropbox fa-lg box-icon" aria-hidden="true"></i>Product
                    </a>
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-calendar fa-lg box-icon" aria-hidden="true"></i>Pleanning
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-bell fa-lg box-icon" aria-hidden="true"></i>Notifikasi
                    </a>
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-envelope fa-lg box-icon" aria-hidden="true"></i>Message
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-id-card fa-lg box-icon" aria-hidden="true"></i>License
                    </a>
                    <hr class="soft my-1 text-white">
                    <a class="nav-slide nav-link" href="#">
                        <i class="fa fa-sign-out fa-lg box-icon" aria-hidden="true"></i>LogOut
                    </a>
                </nav>
            </div>
        </div>

        <div class="main-pages">
            @yield('pages')
        </div>
    </div>

    <div class="slider-background" id="sliders-background"></div>
    <script src="{{ asset('/assets/dist/js/jquery.js') }}"></script>
    <script src="{{ asset('/assets/dist/js/popper.js') }}"></script>
    <script src="{{ asset('/assets/app/js/bootstrap.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="{{ asset('assets/dist/js/index.js') }}"></script>
    @livewireScripts
    @yield('script')

</body>

</html>
