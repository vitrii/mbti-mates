<header class="top-header">
    <nav class="navbar navbar-expand bg-info align-items-center gap-4">
        <div class="btn-toggle">
            <a href="javascript:;"><i class="material-icons-outlined text-white">menu</i></a>
        </div>
        <div class="search-bar flex-grow-1">
            <div class="position-relative">
                <span
                    class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 search-close">close</span>
                <div class="search-popup p-3">
                    <div class="card rounded-4 overflow-hidden">
                        <div class="card-header d-lg-none">
                            <div class="position-relative">
                               
                                <span
                                    class="material-icons-outlined position-absolute me-3 translate-middle-y end-0 top-50 mobile-search-close">close</span>
                            </div>
                        </div>
                        <div class="card-body search-content">
                            <hr>           
                            <hr>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <ul class="navbar-nav gap-1 nav-right-links align-items-center">
            <li class="nav-item d-lg-none mobile-search-btn">
            </li>
            <li class="nav-item dropdown position-static d-md-flex d-none">
                <div class="dropdown-menu dropdown-menu-end mega-menu shadow-lg p-4 p-lg-5">
                    <div class="mega-menu-widgets">
                        <!--end row-->
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
            </li>
            <li class="nav-item dropdown">
                <div class="dropdown-menu dropdown-notify dropdown-menu-end shadow">
                    <div class="notify-list">
                        <div>
                            <a class="dropdown-item border-bottom py-2" href="javascript:;">
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="user-wrapper bg-primary text-primary bg-opacity-10">
                                        <span>RS</span>
                                    </div>
                                    <div class="">
                                        <h5 class="notify-title">New Account Created</h5>
                                        <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                        <p class="mb-0 notify-time">Yesterday</p>
                                    </div>
                                    <div class="notify-close position-absolute end-0 me-3">
                                        <i class="material-icons-outlined fs-6">close</i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="">
                                        <img src="../assets/images/apps/13.png" class="rounded-circle" width="45"
                                            height="45" alt="">
                                    </div>
                                    <div class="">
                                        <h5 class="notify-title">Payment Recived</h5>
                                        <p class="mb-0 notify-desc">New payment recived successfully</p>
                                        <p class="mb-0 notify-time">1d ago</p>
                                    </div>
                                    <div class="notify-close position-absolute end-0 me-3">
                                        <i class="material-icons-outlined fs-6">close</i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="">
                                        <img src="../assets/images/apps/14.png" class="rounded-circle" width="45"
                                            height="45" alt="">
                                    </div>
                                    <div class="">
                                        <h5 class="notify-title">New Order Recived</h5>
                                        <p class="mb-0 notify-desc">Recived new order from michle</p>
                                        <p class="mb-0 notify-time">2:15 AM</p>
                                    </div>
                                    <div class="notify-close position-absolute end-0 me-3">
                                        <i class="material-icons-outlined fs-6">close</i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-item border-bottom py-2" href="javascript:;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="">
                                        <img src="https://placehold.co/110x110/png" class="rounded-circle" width="45"
                                            height="45" alt="">
                                    </div>
                                    <div class="notify-close position-absolute end-0 me-3">
                                        <i class="material-icons-outlined fs-6">close</i>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div>
                            <a class="dropdown-item py-2" href="javascript:;">
                                <div class="d-flex align-items-center gap-3">
                                    <div class="user-wrapper bg-danger text-danger bg-opacity-10">
                                        <span>PK</span>
                                    </div>
                                    <div class="">
                                        <h5 class="notify-title">New Account Created</h5>
                                        <p class="mb-0 notify-desc">From USA an user has registered.</p>
                                        <p class="mb-0 notify-time">Yesterday</p>
                                    </div>
                                    <div class="notify-close position-absolute end-0 me-3">
                                        <i class="material-icons-outlined fs-6">close</i>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a href="javascrpt:;" class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                    <img src="../assets/images/me.jpg" class="rounded-circle p-1 border" width="45" height="45"
                        alt="">
                </a>
                <a class="dropdown-item d-flex align-items-center gap-2 py-2 text-white" href="{{route('logout')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons-outlined text-white">power_settings_new</i>Logout
                    </a>
                <div class="dropdown-menu dropdown-user dropdown-menu-end shadow">
                    <a class="dropdown-item  gap-2 py-2" href="javascript:;">
                        <div class="text-center">
                            <img src="../assets/images/me.jpg" class="rounded-circle p-1 shadow mb-3"
                                width="90" height="90" alt="">
                        </div>
                    </a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i
                            class="material-icons-outlined">person_outline</i>Admin</a>
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="javascript:;"><i class="bi bi-telephone"></i>+62 895-0394-9649</a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item d-flex align-items-center gap-2 py-2" href="{{route('logout')}}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                        <i class="material-icons-outlined">power_settings_new</i>Logout
                    </a>
                    <form action="{{route('logout')}}" method="post" id="logout-form">
                        @csrf
                    </form>
                </div>
            </li>
        </ul>
  
    </nav>
  </header>