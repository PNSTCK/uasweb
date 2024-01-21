@extends('layout.fe.template')
@section('title', 'KANTOR SUKSES MAKMUR')
@section('content')
    <style>
        .custom-gallery img {
            margin-right: 40px;
            margin-bottom: 40px;
        }

        .content {
            display: flex;
            align-items: center;

        }

        .image-container {
            flex: 0 0 auto;
            margin-right: 80px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .text-container {
            flex: 1;
        }

        #about {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .faded-text {
            color: #808080;
        }
    </style>

    </head>

    <body>

        <div id="carouselExampleCaptions" class="carousel slide mb-3" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Carousel Item 1 -->
                <div class="carousel-item active">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/pegawai 1.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block text-center">
                        <h5 style="font-size: 50px">PEGAWAI KANTOR</h5>
                    </div>
                </div>
                <!-- Carousel Item 2 -->
                <div class="carousel-item">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/pegawai bank.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block text-center">
                        <h5 style="font-size: 50px">PEGAWAI KANTOR</h5>
                    </div>
                </div>
                <!-- Carousel Item 3 -->
                <div class="carousel-item">
                    <img class="img-fluid w-100 h-100 overflow-hidden" src="/frontend/images/karyawan.jpg"
                        class="d-block w-100" alt="...">
                    <div class="carousel-caption d-block text-center ">
                        <h5 style="font-size: 50px ">PEGAWAI KANTOR</h5>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>

        <!-- ======= Sambutan Section ======= -->
        <section id="about" class="about mt-5">
            <div class="container-fluid">
                <h2 class="h1-responsive font-weight-bold text-center my-2">HALO BUDAK KORPORAT!!</h2>
                <!--Section description-->
                <p class="text-center w-responsive mx-auto mb-1">selamat datang di website kami!</p>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #04e2ff;">
                <div class="row flex-lg-row pt-5 pb-5">

                    <div class="col-lg-5 align-items-center text-center">
                        <img style="width: 300px; height: 400px;" src="/frontend/images/pegawai bank.jpg" class="mx-auto"
                            alt="">
                    </div>

                    <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch">

                        <div class="container faded-text">
                            <h3>Assalamu’alaikum Warahmatullah Wabarakatuh</h3>
                            <p style="text-align: justify">
                                &emsp;&emsp;
                                Kinerja karyawan adalah bagian yang tidak dapat terpisahkan dari ruang lingkup organisasi
                                atau perusahaan, dan semua pihak yang terlibat di dalam perusahaan tersebut. Kinerja
                                karyawan juga berperan penting sebagai acuan dalam penilaian kualitas karyawan demi
                                mempertahankan produktivitas seluruh karyawan yang bekerja di perusahaan tersebut. Jika
                                kinerja seorang karyawan dinilai baik, maka karyawan tersebut berhak untuk mendapat
                                apresiasi atau reward dalam bentuk lainnya dari perusahaan.
                            </p>
                            <p style="text-align: justify">
                                &emsp;&emsp;Kinerja karyawan adalah ukuran sejauh mana seorang karyawan berhasil mencapai
                                tujuan-tujuan dan standar yang telah ditetapkan oleh perusahaan atau organisasi tempat
                                mereka bekerja. Kinerja karyawan juga dapat diartikan sebagai hasil yang dicapai oleh
                                seorang karyawan dalam menjalankan tugas dan tanggung jawabnya dalam organisasi
                            </p>
                            <h3>Waalaikumussalam Warahmatullah Wabaraakatuh.</h3>
                            <p>Mataram, Januari 2022</p>
                            <br>
                            <p>Kepala,</p>
                            <h3>Yang Mulia ChatGPT, spd. MM</h3>
                        </div>

                    </div>

                </div>

            </div>
        </section><!-- End About Section -->

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <div class="container-fluid px-4">
                    <div class="row g-3 my-2">
                        <div class="col-md-3">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $jumlahPegawai }}</h3>
                                    <p class="fs-5 text-white">Pegawai</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $kinerja }}</h3>
                                    <p class="fs-5 text-white">Kineja Pegawai</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div
                                class="p-3 bg-primary shadow-sm d-flex justify-content-around align-items-center rounded border border-black border-5">
                                <div>
                                    <h3 class="fs-2 text-white text-center">{{ $pangkat }}</h3>
                                    <p class="fs-5 text-white">Pangkat Pegawai</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
        </section>

        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Berita dan Info Terkait</h2>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #04e2ff;">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/pegawai 2.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cara untuk menjadi karyawan yang baik</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/hak-karyawan.jpg" class="img-fluid" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Pengertian Hak Karyawan dan Jenis-jenis yang Perlu Diketahui</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card box">
                            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                                <img src="/frontend/artikel/cara-merekrut.jpg"
                                    class="img-fluid" width="400px" height="200px" />
                                <a href="#!">
                                    <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                                </a>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title">Cara Merekrut Karyawan yang Berkualitas & Bermutu</h5>
                                <a href="#!" class="btn btn-primary">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <section id="about" class="about">
            <div class="container course pb-5 pt-5">
                <h2 class="h1-responsive font-weight-bold text-center my-4">Galeri</h2>
                <hr class="mx-auto" style="width: 50%; border-top: 2px solid #04e2ff;">

                <!-- Galeri dengan Card -->
                <div class="row row-cols-1 row-cols-md-3 g-4 text-center custom-gallery">
                    @forelse ($data as $row)
                        <div class="col">
                            <div class="card h-100">
                                <img src="/galery/{{ $row->image }}" class="card-img-top rounded" alt="Gambar"
                                    style="margin: 10px; max-width: 94%; max-height: 100%;"
                                    style="object-fit: cover; object-position: center">
                            </div>
                        </div>
                    @empty
                        <div class="alert alert-danger">
                            Data galeri belum tersedia.
                        </div>
                    @endforelse
                </div>
                <!-- Galeri dengan Card -->
            </div>
        </section>
    </body>
@endsection
