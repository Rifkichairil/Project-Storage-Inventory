<nav class="sidebar sidebar-offcanvas" id="sidebar">
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="{{route('dashboard')}}">
                <i class="icon-grid menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('inventaris')}}">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Tambah Inventaris</span>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <i class="icon-paper menu-icon"></i>
                <span class="menu-title">Peminjam</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item"> <a class="nav-link" href="{{route('pinjaman')}}">Tambah</a></li>
                    <li class="nav-item"> <a class="nav-link" href="{{route('pinjaman.booking')}}">Booking</a></li>
                </ul>
            </div>
        </li>

    </ul>
</nav>
