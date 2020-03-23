<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rekat Anak Bangsa</title>
    <link rel="shortcut icon" type="image/png" href="img/logo.png">
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/all.min.css">
    <link rel="stylesheet" href="swiper/css/swiper.min.css">
</head>

<style>
    :root {
        --swiper-theme-color: #eb2a2a;
    }   
    .swiper-wrapper{
        padding-bottom: 2rem;
    }
    .swiper-slide{
        margin-bottom: 2rem;
    }
    .swiper-pagination-bullet{
        width: 12px;
        height: 12px;
    }
</style>
<body>

    <!-- --- awal loader --- -->
    <!-- <div class="preloader">
        <div class="loader">
            <div class="loader__circle"></div>
            <div class="loader__circle"></div>
        </div>
    </div> -->
    <!-- --- akhir loader --- -->

    <!-- --- awal navigation --- -->
    <div class="navigation">
        <input type="checkbox" class="navigation__checkbox" id="navi-toggle">

        <label for="navi-toggle" class="navigation__button">
            <span class="navigation__icon">&nbsp;</span>
        </label>

        <div class="navigation__background">&nbsp;</div>

        <nav class="navigation__nav">
            <ul class="navigation__list">
                <li class="navigation__item active"><a href="#" class="navigation__link"><span>01</span>home</a></li>
                <li class="navigation__item"><a href="#about" class="navigation__link"><span>02</span>history</a></li>
                <li class="navigation__item"><a href="#service" class="navigation__link"><span>03</span>Services</a></li>
                <li class="navigation__item"><a href="#project" class="navigation__link"><span>04</span>project</a></li>
                <li class="navigation__item"><a href="#team" class="navigation__link"><span>05</span>Team</a></li>
                <li class="navigation__item"><a href="#contact" class="navigation__link"><span>06</span>Contact Us</a></li>
            </ul>
        </nav>
    </div>
    <!-- --- akhir navigation --- -->

    <!-- --- awal-header --- -->
    <header class="header">
        <div class="header__logo-box">
            <img src="img/logo.png" alt="Logo-Maxsol" class="header__logo">
        </div>
        <div class="header__text-box">
            <h1 class="heading-primary u-margin-bottom-medium">
                <span class="heading-primary--1">rekat anak bangsa</span>
                <span class="heading-primary--2">rumah moderasi</span>
                <span class="heading-primary--3">beragama dan berideologi</span>
            </h1>
            <a href="#about" class="btn btn--red btn--animated">Load more</a>
        </div>
        <div class="header__img-box">
            <img src="img/banner.png" alt="" class="header__img-1">
            <div class="kotak">&nbsp;</div>
        </div>
    </header>
    <!-- --- akhir-header --- -->
    
    <main>

        <!-- --- awal-about --- -->
        <section class="section-about" id="about">

            <div class="row">
                <div class="col-1-of-2">
                    <img src="img/about.png" alt="Photo about" class="gambar__about">
                    <div class="gambar">
                        <img src="img/kompak.jpg" alt="Photo 1" class="gambar__photo gambar__photo--p1">
                        <img src="img/ibadah.jpg" alt="Photo 2" class="gambar__photo gambar__photo--p2">
                        <img src="img/garuda.jpg" alt="Photo 3" class="gambar__photo gambar__photo--p3">
                    </div>
                </div>
                
                <div class="col-1-of-2">
                    <div class="description">
                        <div class="u-center-text">
                            <h2 class="heading-secondary">
                                History of Company
                            </h2>
                        </div>

                        <h3 class="heading-tertiary u-margin-bottom-medium u-center-text">
                            Awal Mula Terbentuk
                        </h3>
                        <p class="paragraph u-justify-text">
                            Lahir dari keinginan menyatukan kembali semua anak bangsa yang terkotak - kotak pasca PilPres 2019 dengan menggelorakan kembali nilai - nilai Pancasila dan semangat Sumpah Pemuda. Internalisasi dan implementasi Pancasila senantiasa relevan dan menjadi kepentingan semua pihak agar perjalanan politik serta kehidupan berbangsa dan bernegara dipimpin, dihikmati, dan didasari oleh Pancasila. Oleh karena itu, Rekat Anak Bangsa menggandeng berbagai elemen bangsa utamanya infrastruktur pemerintahan, Badan Usaha Milik Negara, dan pihak swasta — kelompok maupun perorangan yang memiliki semangat dan kepedulian yang sama merawat dan mengawal Pancasila. Rakyat yang bersatu adalah sumber pertahanan yang terkuat. 
                        </p>
                        <a href="#popupAbout" class="btn-text">Learn more &rarr;</a>
                    </div>
                </div>
             </div>
            
        </section>
        <!-- --- akhir-about --- -->

        <!-- --- awal-service --- -->
        <section class="section-service" id="service">
            <div class="row">
                <div class="col-1-of-2">
                    <div class="u-center-text">
                        <h3 class="heading-tertiary">
                            What We Do
                        </h3>
                        <h2 class="heading-secondary u-margin-bottom-small">
                            Our core services
                        </h2>
                        <p class="paragraph u-margin-bottom-medium">
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam est optio at rem magnam autem sunt, ducimus nulla soluta, inventore dolorum asperiores molestias, laborum minima? Rerum.
                        </p>
                    </div>

                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fas fa-laptop-code"></i>
                            </div>
                            <h5 class="judul u-center-text">
                                Web development
                            </h5>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fab fa-sketch"></i>
                            </div>
                            <h5 class="judul u-center-text">
                                Graphic & ui design
                            </h5>
                        </div>
                    </div>
                    <div class="col-1-of-3">
                        <div class="service">
                            <div class="service__icon">
                                <i class="fab fa-node-js"></i>
                            </div>
                            <h4 class="judul u-center-text">
                                Software development
                            </h4>
                        </div>
                    </div>

                </div>
                <div class="col-1-of-2">
                    <img src="img/service.png" alt="Photo Service" class="service__photo">
                </div>
            </div>
        </section>
        <!-- --- akhir-service --- -->

        <!-- --- awal-project --- -->
        <section class="section-project" id="project">
            <div class="u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Our projects
                </h2>
                <p class="paragraph u-margin-bottom-small">
                    These are some of our latest portfolio which we are proud to show off.
                </p>
            </div>

            <div class="u-right-text">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--1">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul  judul__break">
                                    Project 1
                                </h4>
                                <p class="paragraph">www.project1.com</p>
                            </div>
                            <img src="img/project.png" alt="Project 1" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--2">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Project 2
                                </h4>
                                <p class="paragraph">www.project2.com</p>
                            </div>
                            <img src="img/project.png" alt="Project 2" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--3">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul  judul__break">
                                    Project 3
                                </h4>
                                <p class="paragraph">www.project3.com</p>
                            </div>
                            <img src="img/project.png" alt="Project 3" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--4">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Project 4
                                </h4>
                                <p class="paragraph">www.project4.com</p>
                            </div>
                            <img src="img/project.png" alt="Project 4" class="swiper-project__photo">
                        </div>
                        <div class="swiper-slide swiper-project">
                            <div class="swiper-project__back">
                                <div class="swiper-project__back--5">&nbsp;</div>
                            </div>
                            <div class="swiper-project__text">
                                <h4 class="judul judul__break">
                                    Project 5
                                </h4>
                                <p class="paragraph">www.project5.com</p>
                            </div>
                            <img src="img/project.png" alt="Project 5" class="swiper-project__photo">
                        </div>

                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>

        </section>
        <!-- --- akhir-project --- -->

        <!-- --- awal team --- -->
        <section class="section-team" id="team">
            <div class="team u-center-text">
                <h2 class="heading-secondary u-margin-bottom-small">
                    Our team
                </h2>
                <p class="paragraph u-margin-bottom-big">
                    Meet our energetics team dedicated to provide the best services you can acquire.
                </p>

                <div class="team__slider">
                    <div class="swiper-container2 swiper-container">
                        <div class="swiper-wrapper" style="margin: 5rem auto;">
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team1.jpg" alt="Team 1" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Pembina</p>
                                                <p class="card__price-value">Ryamizard</p>
                                            </div>
                                            <a href="#popupTeam1" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team2.jpg" alt="Team 2" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">ketua umum</p>
                                                <p class="card__price-value">Eno</p>
                                            </div>
                                            <a href="#popupTeam2" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team3.jpg" alt="Team 3" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Ketua Harian</p>
                                                <p class="card__price-value">Eka</p>
                                            </div>
                                            <a href="#popupTeam3" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team4.jpg" alt="Team 4" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Wakil Ketua</p>
                                                <p class="card__price-value">Endraswari</p>
                                            </div>
                                            <a href="#popupTeam4" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team5.jpg" alt="Team 5" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Sekretaris Jenderal</p>
                                                <p class="card__price-value">Fristian</p>
                                            </div>
                                            <a href="#popupTeam5" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="card">
                                    <div class="card__side card__side--front">
                                        <div class="card__picture">
                                            <img src="img/team6.jpg" alt="Team 6" class="team__slider--photo">
                                        </div>
                                    </div>
                                    <div class="card__side card__side--back">
                                        <div class="card__cta">
                                            <div class="card__price-box">
                                                <p class="card__price-only">Bendahara</p>
                                                <p class="card__price-value">Susanty</p>
                                            </div>
                                            <a href="#popupTeam6" class="btn btn--red">View More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Add Arrows -->
                        <div class="swiper-pagination"></div>
                    </div>
                </div>

            </div>
        </section>
        <!-- --- akhir team --- -->

        <!-- --- awal contact --- -->
        <section class="section-contact" id="contact">
            <div class="u-center-text">
                <h2 class="heading-secondary u-margin-bottom-medium">
                    Contact Us
                </h2>
            </div>
            
            <div class="row">
                <div class="col-1-of-2">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d32657804.199417885!2d99.42209316074624!3d-2.3198595950317995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2c4c07d7496404b7%3A0xe37b4de71badf485!2sIndonesia!5e0!3m2!1sid!2sid!4v1581831383940!5m2!1sid!2sid" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" class="iframe"></iframe>
                </div>
                <div class="col-1-of-2">
                    <h3 class="heading-tertiary">
                        Thank you for your interest.
                    </h3>
                    <p class="paragraph">
                        Please fill out the form below.
                    </p>
                    <form action="#" class="form">
                        <div class="form__type-input">
                            <input type="text" name="nama" placeholder="Full Name" class="form__type-input--input" required>
                            <input type="email" name="email" placeholder="Email Address" class="form__type-input--input" required>
                        </div>
                        <textarea name="pesan" id="" rows="10" placeholder="Writing Message" class="form__textarea u-margin-bottom-medium" required></textarea>
                    </form>
                    <button class="btn btn--red">Send &rarr;</button>
                </div>
            </div>

        </section>
        <!-- --- akhir contact --- -->
    </main>
    
    <!-- --- awal footer --- -->
    <footer class="footer">
        <div class="footer__logo-box">
            <img src="img/logo.png" alt="Full logo" class="footer__logo">
        </div>
        <div class="row">
            <div class="col-1-of-2">
                <div class="footer__navigation">
                    <ul class="footer__list">
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-phone"></i></label>
                            <p class="paragraph footer__item--p">+62 812345678910</p>
                        </li>
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-map-marker-alt"></i></label>
                            <p class="paragraph footer__item--p">Jl. Sekar Sari No.01, <br> Kota Denpasar, Bali</p>
                        </li>
                        <li class="footer__item footer__item--1">
                            <label for="paragraph"><i class="fas fa-envelope"></i></label>
                            <p class="paragraph footer__item--p">business@nextIn.id</p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-1-of-2">
            <div class="footer__navigation">
                    <ul class="footer__list footer__list--2">
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-facebook-f"></i>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-twitter"></i>
                            </label>
                        </li>
                        <li class="footer__item footer__item--2">
                            <label for="paragraph">
                                <i class="fab fa-linkedin-in"></i>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- --- akhir footer --- -->

<!-- --- Awal Popup About --- -->
<div class="popup" id="popupAbout">
    <div class="popup__content">
    <a href="#about" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="popup__text">
                <h2 class="heading-secondary">History</h2>
                <hr class="heading-line">
                <h4 class="popup-judul u-margin-bottom-small">Awal Mula terbentuk</h4>
                <p class="paragraph u-margin-bottom-medium">Lahir dari keinginan menyatukan kembali semua anak bangsa yang terkotak - kotak pasca PilPres 2019 dengan menggelorakan kembali nilai - nilai Pancasila dan semangat Sumpah Pemuda. Internalisasi dan implementasi Pancasila senantiasa relevan dan menjadi kepentingan semua pihak agar perjalanan politik serta kehidupan berbangsa dan bernegara dipimpin, dihikmati, dan didasari oleh Pancasila. Oleh karena itu, Rekat Anak Bangsa menggandeng berbagai elemen bangsa utamanya infrastruktur pemerintahan, Badan Usaha Milik Negara, dan pihak swasta — kelompok maupun perorangan yang memiliki semangat dan kepedulian yang sama merawat dan mengawal Pancasila. Rakyat yang bersatu adalah sumber pertahanan yang terkuat.</p>
                <h4 class="popup-judul u-margin-bottom-small">Membumikan Pancasila</h4>
                <p class="paragraph u-margin-bottom-medium">Internalisasi dan implementasi Pancasila harus dilakukan melalui berbagai pendekatan sehingga dapat diterima oleh semua pihak pun berbeda pandangan dan pilihan politik, suku, agama, dan ras untuk menangkal radikalisme, serta nilai dan ideologi lain yang bertentangan dengan Pancasila. Apalagi sekadar "kontestasi politik lima tahunan" jangan sampai memecah belah anak bangsa. </p>
                <a href="#about" class="btn btn--red">Back &rarr;</a>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup About --- -->

<!-- --- Awal Popup Team 1--- -->
<div class="popup" id="popupTeam1">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team1.jpg" alt="Team 1">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Pembina</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Ryamizard Ryacudu</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 21 April 1950)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">Menteri Pertahanan</p>
                                <p class="popup-judul__sub u-margin-bottom-small">27 Oktober 2014 - 20 Oktober 2019</p>
                            </li>
                            <li>
                                <p class="popup-judul">Kepala Staf Angkatan Darat</p>
                                <p class="popup-judul__sub u-margin-bottom-small">4 Juni 2002 - 5 Februari 2005</p>
                            </li>
                            <li>
                                <p class="popup-judul">Pangkostrad</p>
                                <p class="popup-judul__sub u-margin-bottom-medium">1 Agustus 2000 - 4 Juni 2002</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 1--- -->

<!-- --- Awal Popup Team 2--- -->
<div class="popup" id="popupTeam2">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team2.jpg" alt="Team 2">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Ketua Umum</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Eno Syafrudien</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 17 Agustus 1960)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">Ketua</p>
                                <p class="popup-judul__sub u-margin-bottom-small">di Sekolah Tinggi Agama Islam Shalahudin Al Ayubi (STAISA)</p>
                            </li>
                            <li>
                                <p class="popup-judul">Penerjemah dan Penulis</p>
                                <p class="popup-judul__sub u-margin-bottom-small">Buku-Buku Filsafat, Agama, dan Kemanusiaan</p>
                            </li>
                            <li>
                                <p class="popup-judul">Pemikir Aktivis Moderasi beragama dan berideologi</p>
                                <p class="popup-judul__sub u-margin-bottom-medium">di The Institute Wasathiyah, Jakarta</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 2--- -->

<!-- --- Awal Popup Team 3--- -->
<div class="popup" id="popupTeam3">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team3.jpg" alt="Team 3">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Ketua Harian</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Eka Gumilar</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 26 Agustus 1971)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">Pendiri</p>
                                <p class="popup-judul__sub u-margin-bottom-small">Barisan Putra dan Putri Indonesia</p>
                                <p class="popup-judul__sub u-margin-bottom-small">Forum Rekat Indonesia</p>
                            </li>
                            <li>
                                <p class="popup-judul">Inisiator</p>
                                <p class="popup-judul__sub u-margin-bottom-medium">Ekonomi Kerakyatan</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 3--- -->

<!-- --- Awal Popup Team 4--- -->
<div class="popup" id="popupTeam4">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team4.jpg" alt="Team 4">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Wakil Ketua</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Endraswari Safitri</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 12 Desember 1969)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">COO</p>
                                <p class="popup-judul__sub u-margin-bottom-small">Katahati Institute</p>
                            </li>
                            <li>
                                <p class="popup-judul">Pendiri </p>
                                <p class="popup-judul__sub u-margin-bottom-small">Indonesia Berhati Greenheart Movement</p>
                            </li>
                            <li>
                                <p class="popup-judul">Aktivis Perempuan</p>
                                <p class="popup-judul__sub u-margin-bottom-medium">di Perhimpunan Pengusaha Perempuan Indonesia (PPPI) C4Y Perempuan Indonesia Maju</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 4--- -->

<!-- --- Awal Popup Team 5--- -->
<div class="popup" id="popupTeam5">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team5.jpg" alt="Team 5">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Sekretaris Jenderal</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Fristian Griec H.</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 12 Oktober 1988)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">Broadcast Journalist</p>
                                <p class="popup-judul__sub u-margin-bottom-small">di salah satu stasiun televisi berita nasional</p>
                            </li>
                            <li>
                                <p class="popup-judul u-margin-bottom-medium">Lawyer</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 5--- -->

<!-- --- Awal Popup Team 6--- -->
<div class="popup" id="popupTeam6">
    <div class="popup__content">
    <a href="#team" class="popup__close">&times;</a>
        <div class="popup__main">
            <div class="row">
                <div class="col-1-of-2">
                    <img class="popup__photo" src="img/team6.jpg" alt="Team 6">
                </div>
                <div class="col-1-of-2">
                    <div class="popup__text">
                        <h2 class="heading-secondary">Bendahara</h2>
                        <hr class="heading-line">
                        <h4 class="popup-judul">Susanty</h4>
                        <p class="popup-judul__sub u-margin-bottom-small">(Lahir 24 Mei 1971)</p>
                        <h3 class="popup-judul__sub-judul">Riwayat Kerja</h3>
                        <ol type="1" class="list-jabatan">
                            <li>
                                <p class="popup-judul">Kreatif</p>
                                <p class="popup-judul__sub u-margin-bottom-small">di dunia perfilman</p>
                            </li>
                            <li>
                                <p class="popup-judul">Ketua Umum</p>
                                <p class="popup-judul__sub u-margin-bottom-small">Rakyat Cinta Peduli Sosial (RCPS)</p>
                            </li>
                            <li>
                                <p class="popup-judul">Pengurus</p>
                                <p class="popup-judul__sub u-margin-bottom-medium">Pertiwi Berdikari Sejahtera (PBS)</p>
                            </li>
                        </ol>
                        <a href="#team" class="btn btn--red">Back &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- --- Akhir Popup Team 2--- -->

<!-- 
    <div class="row">
        <div class="col-1-of-2">
            col 1 of 2
        </div>
        <div class="col-1-of-2">
            col 1 of 2
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-3">
            col 1 of 3
        </div>
        <div class="col-1-of-3">
            col 1 of 3
        </div>
        <div class="col-1-of-3">
            col 1 of 3
        </div>
    </div>
    <div class="row">
        <div class="col-1-of-2">
            col 1 of 2
        </div>
        <div class="col-1-of-2">
            col 1 of 2
        </div>
    </div> -->
        
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="font-awesome/js/all.min.js"></script>
        <script src="swiper/js/swiper.min.js"></script>
    
    <!-- --- awal-slider --- -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 30,
            keyboard: {
                enabled: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            
        });

        var swiper = new Swiper('.swiper-container2', {
            slidesPerView: 1,
            spaceBetween: 10,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
                delay: 3000,
                dynamicBullets: true,
            },
            breakpoints: {
                500: {
                    slidesPerView: 2,
                    spaceBetween: 20,
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 40,
                },
                1024: {
                    slidesPerView: 3,
                    spaceBetween: 50,
                },
            }
        });
    </script>
    <!-- --- akhir-slider --- -->

    <!-- --- awal-menu-active --- -->
    <script>
        $(document).on('click', 'ul li', function(){
            $(this).addClass('active').siblings().removeClass('active')
        })
    </script>
    <!-- --- akhir-menu-active --- -->

    <!-- --- awal-loader --- -->
    <script>
        $(document).ready(function(){
            setTimeout(function() {
                $(".preloader").fadeOut();
            }, 4000);
        })
    </script>
    <!-- --- awal-loader --- -->
</body>
</html>