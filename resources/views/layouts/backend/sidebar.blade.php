<div class="sidebar">
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{ auth()->user()->image ? asset('photo/'.auth()->user()->image) : asset('photo/user.png') }}" class="img-circle elevation-2" alt="User Image" style="width:40px; height:40px;">
        </div>
        <div class="info">
            <a href="#" class="d-block">{{ Auth::user()->name }}</a>
        </div>
    </div>

    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-header">MENU</li>
            <li class="nav-item">
                <a href="{{ route('backend.dashboard') }}" class="nav-link {{ Request::is('c-panel/dashboard') || Request::is('c-panel/dashboard/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-home"></i>
                    <p>Beranda</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.pelanggan') }}" class="nav-link {{ Request::is('c-panel/pelanggan') || Request::is('c-panel/pelanggan/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Pelanggan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.kategori-paket') }}" class="nav-link {{ Request::is('c-panel/kategori-paket') || Request::is('c-panel/kategori-paket/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-list"></i>
                    <p>Kategori Paket</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.paket-wisata') }}" class="nav-link {{ Request::is('c-panel/paket-wisata') || Request::is('c-panel/paket-wisata/*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-suitcase-rolling"></i>
                    <p>Paket Wisata</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.pengaturan') }}" class="nav-link {{ Request::is('c-panel/pengaturan*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>Pengaturan</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('backend.profile') }}" class="nav-link {{ Request::is('c-panel/profile*') ? 'active' : '' }}">
                    <i class="nav-icon fas fa-user-cog"></i>
                    <p>Profil</p>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                    <i class="nav-icon fas fa-sign-out-alt"></i>
                    <p>Log Out</p>
                </a>
            </li>
        </ul>
    </nav>
</div>
