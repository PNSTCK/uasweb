<style>
    .logo-container {
        display: flex;
        align-items: center;
    }

    .logo-image {
        margin-right: 10px;
    }
</style>
<header>
    <section id="topbar"
        class="mb-2 mb-lg-0 mb-sm-0 d-none d-lg-flex align-items-center pt-2 pb-2 bg-primary text-white topbar-transparent">
        <div class="container">
            <div class="row">
                <div style="text-align: center">
                    <a href="https://twitter.com/smanju_mataram?lang=id" style="color: white" class="me-4"><i
                            class="bi bi-twitter"></i></a>
                    <a href="https://m.facebook.com/profile.php?id=972717242792743" style="color: white"
                        class="me-4"><i class="bi bi-facebook"></i></a>
                    <a href="https://www.instagram.com/smanjumtr/?hl=id" style="color: white" class="me-4"><i
                            class="bi bi-instagram"></i></a>
                    <a href="https://github.com/mthoriqpancamukti112/uasweblanjutrpl" style="color: white"
                        class="me-4"><i class="bi bi-github"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('halaman-index') }}">
                <div class="logo-container">
                    <img src="/frontend/images/logo pegawai.png" alt="Logo pegawai" class="logo-image" width="50px"
                        height="50px">
                    <h2 class="fw-bold mb-2 mb-lg-0 mb-sm-0 text-primary">KANTOR PEGAWAI</h2>
                </div>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="bi bi-list"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ url('/halaman') }}">Beranda</a>
                    </li>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/kontak') }}">Kontak</a>
                    </li>
                </ul>
                <ul class="navbar-nav mb-2 mb-lg-0 action-menu">
                    <li class="nav-item">
                        <a class="nav-link " href="{{ url('/login') }}">
                            <i class="bi bi-person "></i>Login
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--Navbar End-->
</header>
