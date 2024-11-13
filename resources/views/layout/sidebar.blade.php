<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
        <img src="/dist/img/AdminLTELogo.png" alt="belum muncul nih" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">Surya company</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="/dist/img/suryapp.jpg" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="{{url('profile')}}" class="d-block" @if($sb_submenu == 'profile')active @endif>{{ $user->fullname }}</a>
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                    aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar" data-widget="treeview" role="menu"
                data-accordion="false">
                <li class="nav-item @if($sb_menu =='perkuliahan')menu-open @endif">
            <a href="#" class="nav-link">
                <i class="fa-brands fa-github"></i>
              <p>
                Perkuliahan
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{url('jadwalkuliah')}}" class="nav-link @if($sb_submenu == 'Jadwal kuliah')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Kuliah</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('jadwalujian')}}" class="nav-link @if($sb_submenu == 'Jadwal ujian')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Jadwal Ujian</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('absenmahasiswa')}}" class="nav-link @if($sb_submenu == 'Absen mahasiswa')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Absen Mahasiswa</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{url('nilaimahasiswa')}}" class="nav-link @if($sb_submenu == 'Nilai mahasiswa')active @endif">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Nilai Mahasiswa</p>
                </a>
              </li>
            </ul>
          </li> 
                
                <li class="nav-item @if($sb_menu =='mahasiswa')menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="fa-sharp fa-light fa-globe"></i>
                      <p>
                        Mahasiswa
                        <i class="right fas fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                        <a href="{{url('masterMahasiswa')}}" class="nav-link @if($sb_submenu == 'mastermahasiswa')active @endif">
                            <i class="fa-sharp fa-regular fa-hand"></i>
                          <p>Master Mahasiswa</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('masterMK')}}" class="nav-link @if($sb_submenu == 'masterMK')active @endif">
                            <i class="fa-sharp fa-solid fa-lock"></i>
                          <p>Master MK</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('dataMahasiswa')}}" class="nav-link @if($sb_submenu == 'masterKelas')active @endif">
                            <i class="fa-solid fa-school"></i>
                          <p>Data Mahasiswa</p>
                        </a>
                      </li>
                      <li class="nav-item">
                        <a href="{{url('masterDosen')}}" class="nav-link @if($sb_submenu == 'masterDosen')active @endif">
                            <i class="fa-solid fa-chalkboard-user"></i>
                          <p>Master Dosen</p>
                        </a>
                      </li>
                    </ul>
                  </li>
            


                <li class="nav-header">Pages</li>
                <li class="nav-item">
                    <a href="{{url('calendar')}}" class="nav-link @if($sb_submenu == 'calendar')active @endif">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Calendar
                            
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('gallery')}}" class="nav-link @if($sb_submenu == 'gallery')active @endif">
                        <i class="nav-icon far fa-image"></i>
                        <p>
                            Gallery
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{url('kanban')}}" class="nav-link @if($sb_submenu == 'kanban')active @endif">
                        <i class="nav-icon fas fa-columns"></i>
                        <p>
                            Kanban Board
                        </p>
                    </a>
                </li>
                <li class="nav-item"  @if($sb_menu =='mailbox')menu-open @endif>
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-envelope"></i>
                        <p>
                            Mailbox
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pages/mailbox/mailbox" class="nav-link @if($sb_submenu == 'inbox')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inbox</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/mailbox/compose" class="nav-link @if($sb_submenu == 'compose')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Compose</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/mailbox/read-mail" class="nav-link @if($sb_submenu == 'read')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Read</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item @if($sb_menu =='User')menu-open @endif">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-book"></i>
                        <p>
                            User
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{url('profile')}}" class="nav-link @if($sb_submenu == 'profile')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('users')}}" class="nav-link @if($sb_submenu == 'dataUser')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Mahasiswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/users/{user}')}}  @if($sb_submenu == 'show')active @endif" >
                            
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/users/{user}/edit')}}">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('/users/{user}')}}">
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('e-commerce')}}" class="nav-link @if($sb_submenu == 'e-commerce')active @endif">
                                <p>E-commerce</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('invoice')}}" class="nav-link @if($sb_submenu == 'invoice')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Invoice</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('faq')}}" class="nav-link @if($sb_submenu == 'faq')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>FAQ</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{url('contact')}}" class="nav-link @if($sb_submenu == 'contacts')active @endif">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Teman</p>
                            </a>
                        </li>
                    </ul>
                    {{-- <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="nav-icon fas fa-book"></i>
                            <p>
                                Project
                                <i class="fas fa-angle-left right"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pages/project/project" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/project/project-add" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Add</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/project/project-edit" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Edit</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/project/project-detail" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Project Detail</p>
                            </a>
                        </li>
                    </ul>
                </li> --}}
                {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-plus-square"></i>
                        <p>
                            Halaman Login
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/pages/login/login" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Login</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/login/register" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Register</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/login/forgot-password" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Forgot Password</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/pages/User/recover-password" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Recover Password</p>
                            </a>
                        </li> --}}
                    </ul>
            </ul>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
