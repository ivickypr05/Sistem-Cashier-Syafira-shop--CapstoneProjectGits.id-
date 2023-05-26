    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        {{-- Font Awesome --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
            integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
            crossorigin="anonymous" referrerpolicy="no-referrer" />

        {{-- Font Montserrat --}}
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;800&display=swap"
            rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('assets/css/profile.css') }}">

        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/gh/hung1001/font-awesome-pro-v6@44659d9/css/all.min.css" rel="stylesheet"
            type="text/css" />
        <link rel="stylesheet"
            href="https://fonts.googleapis.com/css2?family=Saira+Condensed:wght@300;400;500&display=swap">

        <title>Sistem Kasir SRC Syafira</title>

    </head>

    <body>
        <header>
            @include('partials.navbar');
            <div class="hero" id="home">
                <div class="container">
                    <div class="box-hero">
                        <div class="box">
                            <h1>Produk Terbaik dari <br> SRC Syafira</h1>
                            <p>
                                Toko Syafira, yang didirikan pada tahun 2017, adalah sebuah perusahaan yang
                                menawarkan pengalaman berbelanja yang unik dan memikat bagi pelanggan
                                . Dengan daya tarik yang kaya akan kebutuhakan pokoknya, toko ini telah
                                menjadi destinasi favorit bagi Ibu rumah tangga, Bapak-bapak, kalangan
                                remaja serta, anak-anak di wilayah
                                kota Cirebon tepatnya pada kelurahan Argasunya kecamatan Harjamukti jalan
                                Dwi Pantara.
                            </p>
                        </div>
                        <div class="box">
                            <img src="assets/img/sembako.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="services" id="services">
            <div class="container">
                <div class="box-services">
                    <div class="box">
                        <i class="fa-solid fa-shirt"></i>
                        <h4>Produk baru</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-mountain-sun"></i>
                        <h4>Tahan lama dan tidak kadaluarsa</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                    </div>
                    <div class="box">
                        <i class="fa-solid fa-wallet"></i>
                        <h4>Harga Terjangkau</h4>
                        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae, corporis.</p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Cards Section --}}
        <div class="card" id="card">
            <div class="container">
                <div class="box-card">
                    <div class="box">
                        <img src="img/sawah.jpg" alt="">
                        <h3>Kebutuhan pokok harian</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium
                            tenetur
                            facere obcaecati. Obcaecati?</p>

                    </div>
                    <div class="box">
                        <img src="img/pantai.jpg" alt="">
                        <h3>Makanan Ringan dan Minuman segar</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium
                            tenetur
                            facere obcaecati. Obcaecati?</p>

                    </div>
                    <div class="box">
                        <img src="Minuman Segar" alt="">
                        <h3>Obat-obatan</h3>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat recusandae laudantium
                            tenetur
                            facere obcaecati. Obcaecati?</p>

                    </div>
                </div>
            </div>
        </div>

        {{-- Footer --}}
        <div class="footer" id="footer">
            <div class="container">
                <div class="box-footer">
                    <div class="box">
                        <h3>Alamat</h3>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0755268190364!2d108.5442965!3d-6.760645099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1de48193cd23%3A0x88cfbe5ae19ff6ea!2sToko%20Safira!5e0!3m2!1sen!2sid!4v1684412941665!5m2!1sen!2sid"
                            width="350" height="200" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                        <p><i class="fas fa-location"></i> Jl. Dwi Pantara, RT.03/RW.01, Argasunya, Kec.
                            Harjamukti, Kota Cirebon, Jawa Barat 45145</a></p>
                    </div>
                    <div class="box">
                        <h3>Kontak Kasir SRC Syafira</h3>
                        <li><i class="fa-solid fa-phone"></i> 085294931090</a></li>
                        <li><i class="fa-solid fa-envelope"></i> srcsyafira@gmail.com</a></li>
                    </div>
                    <div class="box">
                        <p>&copy; Copyright by <span>Kasir Src Syafira</span> All Rights Reserved 2023.</p>
                    </div>
                </div>

            </div>
        </div>

        <script src="js/script.js"></script>
    </body>

    </html>

    {{-- 

<br><br><br>
    <style>
        body {
            background-color: rgb(255, 255, 255);
            background-size: cover;
            background-image: no-repeat;
        }
    </style>
    <section class="py-0">
        <div class="container">
            <div class="row" id="profile"></div>

            <div class="banner_section layout_padding">
                <div id="main_slider" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="container">
                                <div class="row">
                                    <div class="container"><br><br><br>
                                        <hr>
                                        <h1 class="banner_text">
                                            <p>
                                                Toko Syafira, yang didirikan pada tahun 2017, adalah sebuah perusahaan yang
                                                menawarkan pengalaman berbelanja yang unik dan memikat bagi pelanggan
                                                . Dengan daya tarik yang kaya akan kebutuhakan pokoknya, toko ini telah
                                                menjadi destinasi favorit bagi Ibu rumah tangga, Bapak-bapak, kalangan
                                                remaja serta, anak-anak di wilayah
                                                kota Cirebon tepatnya pada kelurahan Argasunya kecamatan Harjamukti jalan
                                                Dwi Pantara, selain menjual kebutuhan Pokok sehari-hari, toko ini juga
                                                menjual minuman-minuman segar seperti Pop Ice, Top Ice serta minuman segar
                                                lainya yang cocok dengan cuaca Panas yang ada di kota cirebon.</p>
                                        </h1>
                                        <hr>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container my-5">
                <footer class="text-center text-white ">
                    <div class="container p-3">
                        <section class="">
                            <div class="row">
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://i.postimg.cc/gJkmWrKh/1.png" class="w-100" />

                                    </div>
                                </div>

                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://mdbootstrap.com/img/new/fluid/city/111.jpg" class="w-100" />

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://mdbootstrap.com/img/new/fluid/city/112.jpg" class="w-100" />

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://mdbootstrap.com/img/new/fluid/city/114.jpg" class="w-100" />

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://mdbootstrap.com/img/new/fluid/city/115.jpg" class="w-100" />

                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-12 mb-4 mb-md-0">
                                    <div class="bg-image hover-overlay ripple shadow-1-strong rounded"
                                        data-ripple-color="light">
                                        <img src="https://mdbootstrap.com/img/new/fluid/city/116.jpg" class="w-100" />
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </footer>
            </div><br><br><br><br>
            <div class="row" id="contact">
                <div class="col-lg-50">
                    <blockquote class="blockquote blockquote-custom p-5 bg-danger shadow rounded">
                        <div class="blockquote-custom-icon bg-dark shadow-sm"><i class="fa fa-quote-left text-light"></i>
                        </div>
                        <footer class="site-footer">
                            <div class="container">
                                <div class="col-md pr-md-5 mb-4 mb-md-0 text-light">
                                    <ul class="list-unstyled quick-info mb-4 text-light">
                                        <li><i class="fas fa-location"></i> Jl. Dwi Pantara, RT.03/RW.01, Argasunya, Kec.
                                            Harjamukti, Kota Cirebon, Jawa Barat 45145</a></li>
                                        <li><i class="fa-solid fa-phone"></i> 085294931090</a></li>
                                        <li><i class="fa-solid fa-envelope"></i> syafira@src.com</a></li>
                                    </ul>
                                </div>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3962.0755268190364!2d108.5442965!3d-6.760645099999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6f1de48193cd23%3A0x88cfbe5ae19ff6ea!2sToko%20Safira!5e0!3m2!1sen!2sid!4v1684412941665!5m2!1sen!2sid"
                                    width="980" height="257 " style="border:0;" allowfullscreen="" loading="lazy"
                                    referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </footer>
                    </blockquote>
                </div>
            </div> <a class="gotopbtn" href="#"> <i class="fas fa-arrow-up"></i> </a>
        </div><br>
        <div class="container text-dark">
            <div class=" align-items-center small">
                <div class="text-center">Copyright &copy; THORNY DEVIL 2023 - All Rights Reserved</div>
            </div>
        </div> --}}
