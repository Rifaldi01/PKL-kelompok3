<!--start header -->
<header>
    <div class="topbar d-flex align-items-center">
        <nav class="navbar navbar-expand">
            <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
            </div>

            <div class="top-menu ms-auto">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item mobile-search-icon">
                        <a class="nav-link" href="#">	<i class='bx bx-search'></i>
                        </a>
                    </li>
                    <li class="nav-item dropdown dropdown-large">
                        <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">	<i class='bx bx-category'></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                            <div class="row row-cols-3 g-3 p-3">
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-success text-white"><a href="{{url('admin/create-team')}}" class='bx bx-user-plus'></a>
                                    </div>
                                    <div class="app-title">Add Teams</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-success text-white"><a href="{{url('/admin/tambah-foto/')}}" class='bx bx-plus'></a>
                                    </div>
                                    <div class="app-title">Add foto</div>
                                </div>
                                <div class="col text-center">
                                    <div class="app-box mx-auto bg-success text-white"><a href="{{url('/admin/create-berita/')}}" class='bx bx-book-add'></a>
                                    </div>
                                    <div class="app-title">Add News</div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="user-box dropdown">
                <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="{{URL::to('images/logo/logo.png')}}" class="user-img" alt="user avatar">
                    <div class="user-info ps-3">
                        <p class="user-name mb-0">{{Auth::user()->name}}</p>
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li><a class="dropdown-item" href="{{route('logout')}}"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                            <i class='bx bx-log-out-circle'></i>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="">
                                @csrf
                            </form>

                            <span></span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</header>
<!--end header -->
