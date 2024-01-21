<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard-index') }}">
                <i class="fa-solid fa-gauge"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link " href="{{ route('pegawai.index') }}">
                <i class="fa-solid fa-chalkboard-user"></i>
                <span>Pegawai</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('kinerja.index') }}">
                <i class="fa-solid fa-users"></i>
                <span>Kinerja</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('galeri.index') }}">
                <i class="fa-regular fa-image"></i>
                <span>Gallery</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link " href="{{ route('kepangkatan.index') }}">
                <i class="fa-solid fa-bars"></i>
                <span>Pangkat</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->
