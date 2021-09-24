<div class="wrapper">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{URL::to('images/logo/mahaputra1.png')}}" class=" img-fluid" style="max-width: 185px; height: auto; margin-left: 10%; margin-right: 10%;" alt="logo icon">
            </div>
            <div>

            </div>
            <div class="toggle-icon ms-auto"><i class=''></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu">
            <li>
                <a href="{{URL::to('/admin/dashboard')}}" class="">
                    <div class="parent-icon"><i class='bx bx-home-circle'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
                <ul>
                    <li>
                        <a href="{{URL::to('/admin/create-team')}}"><i class="fadeIn animated bx bx-user-plus"></i>Tambah Team</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/admin/tambah-foto')}}"><i class="fadeIn animated bx bx-plus-circle"></i>Tambah Foto</a>
                    </li>
                    <li>
                        <a href="{{URL::to('/admin/create-berita')}}"><i class="fadeIn animated bx bx-book-add"></i>Buat Berita</a>
                    </li>
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
            </li>
        </ul>
    </div>

    <!--end sidebar wrapper -->

    <!--start page wrapper -->

</div>
