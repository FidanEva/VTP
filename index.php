<!DOCTYPE html>
<html lang="en" style="transition-duration: 1500ms;">

<head>

    <?php include "meta.php" ?>

    <!-- /Yandex.Metrika counter -->
    <meta charset="utf-8" />
    <title>Virtual Təcrübə Proqramı-2022</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta name="description"
        content="Rəqəmsal mühitin üstünlüyündən yararlanaraq karyeranızda ilk addımı bizimlə atın." />
    <meta name="keywords" content="VTP 2021, Təcrübə Proqramı, Internship, Bayburt, Buta, Özgün Yapı, VTP" />
    <meta
        content="Şirkətimiz  tamamilə yenilənmiş və daha əhatəli 'VTP 2021' adlı təcrübə proqramı layihəsini elan edir. Rəqəmsal mühitin üstünlüklərindən yararlanaraq, öyrənərək təcrübə qazanmağa və karyeranızda ilk addımı atmağa sizləri dəvət edirik. Bu fürsətdən yararlanmağın tam zamanıdır."
        name="VTP" />
    <!-- favicon -->
    <link rel="canonical" href="http://ozgun.recruit.az">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Tamma+2:400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css" />
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css" />
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css" />
    <link rel="stylesheet" type="text/css" href="css/util.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css?ver=1.0" />
    <link href="css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="css/pe-icon-7.css" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!--Slider-->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="css/style.min.css" rel="stylesheet" type="text/css" />
    <!-- css -->
    <link rel="stylesheet" href="css/custom.css">

    <link rel="stylesheet" type="text/css" href="css/style_yaz.css?ver=<?=time()?>" />
    <link rel="stylesheet" type="text/css" href="css/style2.css?ver=<?=time()?>" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>

</head>

<body>
    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark navbar-light"
        style="position: fixed !important;">
        <div class="container d-block">
            <div class="row">
                <!-- LOGO -->
                <div class="col-5 col-sm-5 col-md-2">
                    <a class="navbar-brand logo" href="index.php">
                        <img src="images/logo-ozgun.svg" alt="Ozgun Yapı" class="logo-light" width="130">
                        <img src="images/ozgun.png" alt="Ozgun Yapı" class="logo-dark" width="185"
                            style="left: -15px; position: absolute; top: -4px;">
                    </a>
                </div>
                <div class="col-7 col-sm-7 col-md-10" style="padding-top: 16px;">
                    <div class="d-sm-none row d-lg-flex dontshow" style="width:106% !important">
                        <div class="col-2" style="position:relative;top: 10px; text-align:center;padding:0">
                            <a href="#about">
                                <button class="menu_add vtp20" type="text"
                                    style="color:white; font-size:22px; position:relative;text-align:center;">
                                    Haqqımızda
                                </button>
                            </a>
                        </div>
                        <div class="col-2" style="position:relative;top: 10px; text-align:center;padding:0">
                            <a href="organizational_chart.php">
                                <button class="menu_add vtp20" type="text"
                                    style="color:white; font-size:22px; position:relative;text-align:center;">
                                    Komandamız
                                </button>
                            </a>
                        </div>
                        <div class="dropdown col-2"
                            style="position:relative; top: 10px; text-align:center; line-height: 1.7; padding:0">
                            <button onclick="myFunction1()" class="menu_add vtp20" type="text" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                style="color:white; font-size:22px; position:relative; text-align:center; width: max-content;">
                                İştirakçılar
                                <i id="dropdown-arrow-d" class="fas fa-caret-down"></i>
                            </button>

                            <div id="desktop-drop"
                                style="display:none; box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; position:fixed; width: fit-content; background: white; padding: 5px;"
                                aria-labelledby="dropdownMenuButton">
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal1">VTP 22 Yay</button>
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal2">VTP 22 Yaz</button>
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal3">VTP 21 Payız</button>
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal4">VTP 21 Yay</button>
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal5">VTP 21 Yaz</button>
                                <button type="button" class="dropdown-item vtp20 btn-lg" style="font-size: 22px"
                                    data-toggle="modal" data-target="#myModal6">VTP 20</button>
                            </div>
                        </div>
                        <div class="col-2" style="position:relative;top: 10px;text-align:center;padding:0">
                            <!-- Button trigger modal -->
                            <a href="#statistics">
                                <button class="menu_add vtp20" type="text"
                                    style="font-size:22px;  padding-right: 40px !important; position:relative; text-align:center">
                                    Statistika
                                </button>
                            </a>
                        </div>
                        <div class="col-2" style="position:relative;top: 10px;text-align:center;padding:0">
                            <!-- Button trigger modal -->
                            <a href="#karusel">
                                <button class="menu_add vtp20" type="text"
                                    style="font-size:22px;  right:20px !important; position:relative; text-align:center">
                                    İştirakçı fikirləri
                                </button>
                            </a>
                        </div>
                        <div id="apply" class="col-2" style="bottom: 0.5rem;padding:0">
                            <a href="#form">
                                <div class="apply" style="width: max-content;">
                                    Müraciət et
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="d-lg-none d-md-block position-relative ">
                        <button id="navbar-toggler" class="d-block navbar-toggler p-0 position-absolute showMenu"
                            style="right: 0px;top:5px" type="button" data-toggle="collapse"
                            data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <i class="fas fa-bars"></i>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row  vtp_menu d-lg-none  txt-center" style="display:none; margin-top: 30px;">
                <div onclick="document.getElementById('navbar-toggler').click();"
                    class="mob-nav col-lg-3 col-md-12 col-sm-12" style="padding-right: 0;">
                    <a href="#about">
                        <button class="menu_add vtp20" type="text"
                            style="color:white; font-size:22px; position:relative; top: 7px;">
                            Haqqımızda
                        </button>
                    </a>
                </div>
                <div id="team_schema" onclick="document.getElementById('navbar-toggler').click();"
                    class="mob-nav col-lg-3 col-md-12 col-sm-12" style="position:relative; top: 5px; padding-right: 0;">
                    <a href="organizational_chart.php">
                        <button class="menu_add vtp20" type="text"
                            style="color:white; font-size:22px; position:relative;">
                            Komandamız
                        </button>
                    </a>
                </div>
                <div class="mob-nav col-lg-3 col-md-12 col-sm-12"
                    style="position:relative; top: 5px; padding-right: 0;">
                    <button onclick="myFunction()" class="menu_add vtp20" type="text" id="dropdownMenuButton"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                        style="color:white; font-size:22px; position:relative; text-align:center">
                        İştirakçılar
                        <i id="dropdown-arrow-m" class="fas fa-caret-down"></i>
                    </button>
                    <div id="mobil-drop"
                        style="margin-bottom: 20px; display: none; box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px; top: 60%"
                        aria-labelledby="dropdownMenuButton">
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal1">VTP 22 Yay</button>
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal2">VTP 22 Yaz</button>
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal3">VTP 21 Payız</button>
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal4">VTP 21 Yay</button>
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal5">VTP 21 Yaz</button>
                        <button type="button" class="dropdown-item vtp20 btn-lg" data-toggle="modal"
                            data-target="#myModal6">VTP 20</button>
                    </div>
                </div>
                <div onclick="document.getElementById('navbar-toggler').click();"
                    class="mob-nav col-lg-3 col-md-12 col-sm-12" style="padding-bottom: 15px; padding-right: 0;">
                    <a href="#statistics">
                        <button class="menu_add vtp20" type="text"
                            style="color:white; font-size:22px; position:relative; top:7px">
                            Statistika
                        </button>
                    </a>
                </div>
                <div onclick="document.getElementById('navbar-toggler').click();"
                    class="mob-nav col-lg-3 col-md-12 col-sm-12" style="padding-bottom: 15px; padding-right: 0;">
                    <a href="#karusel">
                        <button class="menu_add vtp20" type="text"
                            style="color:white; font-size:22px; position:relative; top:-7px">
                            İştirakçı fikirləri
                        </button>
                    </a>
                </div>
                <div class="mob-nav col-lg-3 col-md-12 col-sm-12 col-xs-12" id="apply" style="margin: auto">
                    <a href="#form">
                        Müraciət et
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-2-bg position-relative d-flex align-items-center bg-gradient-primary" id="home">
        <div class="hero-2-bg-overlay"></div>
        <div class="container">
            <div class="hero-2-content">
                <div class="row align-items-center">
                    <div class="col-lg-6 header_content" style="padding-bottom: 140px;">
                        <div class="hero-2-title pr-lg-5">
                            <h1 class="hero-2-title text-white mb-4 font-weight-normal line-height-1_4 basliq">
                                VTP Nədir?.. <br>VTP - Gənclərin iş dünyasını daha yaxşı başa düşməsi üçün virtual
                                şəkildə
                                təşkil olunan Təcrübə Proqramıdır. </h1>
                            <p class="text-white-70 font-weight-light f-18 line-height-1_6 mb-5" id="baslik_paragraph"
                                style="font-size: 22px !important; text-align: justify;color: white; ">
                                Sosial məsuliyyət prinsipindən çıxış edərək "2020-ci ildə 20 gəncin həyatına toxunaq!"
                                şüarı ilə ilk əyani təcrübə proqramımızı həyata keçirdik. 2020-ci ilin ilk yarısında
                                "Covid-19" pandemiyasının qlobal səviyyədə yayılmasından sonra ölkəmizdə müəyyən
                                məhdudiyyətlərin qüvvəyə minməsi ilə əyani təcrübə proqramımızı davam etdirmək mümkün
                                olmadı. Pandemiyanı fürsətə çevirərək daha çox gəncin həyatına toxuna bilmək üçün Özgün
                                Yapı şirkəti olaraq "Virtual Təcrübə Proqramı" layihəsinə start verdik. Belə ki, 2020-ci
                                il 21 oktyabr-21 dekabr tarixləri aralığında ilk "VTP" layihəsini həyata keçirdik.
                                Proqrama olan yüksək tələbat növbəti illər üçün davamlı şəkildə virtual təcrübə
                                proqramları təşkil etməyimizə zərurət yaratdı. Böyük maraqla qarşılanan "VTP'21 Yaz",
                                "VTP'21 Yay", "VTP'21 Payız" və "VTP'22 Yaz" proqramlarını bitirmiş və hal-hazırda
                                "VTP'22 Yay" proqramı ilə sosial layihəmizi davam etdirməkdəyik.
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mt-5 mt-lg-0" style="padding-bottom: 116px;">
                            <img src="images/hero-2-img.png" alt="hero-2" class="img-fluid d-block mx-auto">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- About us Start -->
    <section class="section bg-light" style="padding-top: 120px !important" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8" style="margin-bottom: -20px;">
                    <div class="title text-center mb-5">
                        <h3 class="text-dark" style="font-size: 35px !important; font-weight:bold !important">
                            Haqqımızda
                        </h3>
                        <p class="text-muted napiyon" style="font-size: 22px !important;">Özgün Yapı Sanayi ve Ticaret
                            A.Ş.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p class="text-muted font-weight-light napiyon" style="font-size: 19px;text-align:justify">
                        Özgün Yapı, 1983-cü ildə ölkə iqtisadiyyatının aparıcı sektorlarından biri olan tikinti və
                        inşaat sektorunda keyfiyyətli xidmətləri ilə xalqına qürur verən bir şirkət olmaq missiyasını
                        əsas götürərək fəaliyyətə başlayır. Beynəlxalq bazarda yaratdığı dəyərlər ilə davamlı inkişafını
                        qoruyan, rəqabət gücü ilə seçilən, strateji bir tərəfdaş kimi güvənli olan, zamanın gücü ilə
                        irəliləyən, ətraf mühitə və insana qarşı həssas bir şəkildə dünyanın öndə gedən şirkətlərindən
                        biri olmağı özünə hədəf seçmişdir. Şirkətimiz suvarma, bənd, liman, metro, dəmiryolu, magistral
                        yollar, körpü layihələri ilə tikinti sektoruna öz töhvəsini verir. 11 şirkət və 10 minə yaxın
                        işçisi ilə fəaliyyət göstərən şirkətin Azərbaycan Respublikasındakı filialı 2013-cü ildə
                        qeydiyyata alınaraq öz fəaliyyətinə başlamışdır. Filialın fəaliyyətə başladığı ilk dövrdən əsas
                        hədəfi Azərbaycanda yol tikintisinin inkişafında böyük uğurlara nail olmaq olmuşdur. Fəaliyyət
                        göstərdiyi hər bir sahədə ən yaxşıya imza atmağa çalışan Özgün, yerli və beynəlxalq mühitdə
                        imzasını atdığı uğurlu layihələr ilə gələcəyi şəkilləndirir.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- About us End -->

    <section class="section laptop" id="services" style="padding-bottom:0 !important; padding-top: 50px;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-8">
                    <div class="title text-center mb-5">
                        <h3 class="font-weight-normal text-dark"
                            style="font-size: 30px !important; text-align: center !important;line-height:2;">
                            <strong>Təcrübə Sahələri</strong>
                        </h3>
                        <p class="text-muted napiyon"
                            style="font-size: 18px !important; text-align:justify;line-height:1.6">Təcrübə Proqramının
                            məqsədi
                            gənclərə öz
                            ixtisasları və ya digər sahələr
                            üzrə təcrübə qazanmaq imkanı yaratmaq, gələcək kariyeralarında müvəffəqiyyətə nail
                            olmalarını təmin edəcək bacarıqları və özgüvəni inkişaf etdirmələrinə yardım etmək,
                            cəmiyyətdə ixtisaslı kadrların formalaşmasına dəstək olmaqdır.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 center">
                            <img src="images/accounting.png" alt="accounting" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">Mühasibatlıq</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 center">
                            <img src="images/human.png" alt="human" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">İnsan Resursları</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 text-center">
                            <img src="images/agreement.png" alt="agreement" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">Satınalma/Logistika</h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 center">
                            <img src="images/engineer.png" alt="agreement" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">Yol-İnşaat Mühəndisliyi
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 center">
                            <img src="images/data (1).png" alt="data-info" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">İnformasiya
                            Texnologiyaları (Web)
                        </h5>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="service-box service-warning" style="text-align:center">
                        <div class="mb-5 center">
                            <img src="images/digital-marketing.png" alt="agreement" style="width: 40%;">
                        </div>
                        <h5 class="service-title text-dark font-weight-normal pt-1 mb-4 merkez">İnformasiya
                            Texnologiyaları (Rəqəmsal Marketinq)</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service End -->

    <!-- Features Start -->
    <section class="section" id="features" style="padding-top:0 !important; padding-bottom: 50px !important;">
        <div class="container">
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-5 offset-md-1"
                    style="padding-right: 0 !important; padding-left: 0 !important;margin-left:15px">
                    <div class="features-box mb-4">
                        <div class="ft-text">
                            <div class="ft-content sol">
                                <h2 class="basliq">Təcrübəçilərə tələblər</h2>
                                <ul style="padding-top: 20px;">
                                    <li style="list-style-type: none;">
                                        <div class="flt">
                                            <h6 style="font-size: 20px;"><img src="images/Orange.png" alt="orange"
                                                    width="3%">
                                                &nbsp&nbsp Son kurs tələbələri və ya yeni məzun olmuş şəxslər</h6>
                                        </div>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <div class="flt">
                                            <h6 style="font-size: 20px;"> <img src="images/Orange.png" alt="Orange"
                                                    width="3%"> &nbsp&nbsp Ünsiyyət qurma bacarığı</h6>
                                        </div>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <div class="flt">
                                            <h6 style="font-size: 20px;"><img src="images/Orange.png" alt="Orange"
                                                    width="3%">
                                                &nbsp&nbsp Komandada işləmə bacarığı</h6>
                                        </div>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <div class="flt">
                                            <h6 style="font-size: 20px;"><img src="images/Orange.png" alt="Orange"
                                                    width="3%">
                                                &nbsp&nbsp Daim öyrənmək həvəsi</h6>
                                        </div>
                                    </li>
                                    <li style="list-style-type: none;">
                                        <div class="flt">
                                            <h6 style="font-size: 20px;"><img src="images/Orange.png" alt="Orange"
                                                    width="3%">
                                                &nbsp&nbsp <strong>İş təcrübəsi olmayan namizədlər müraciət
                                                    etsin.</strong></h6>
                                        </div>
                                    </li>
                                    <li style="list-style-type: none;">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 mt-5 mt-sm-0"
                    style="background: url(images/features/features-bg.png) center center; padding-left: 0 !important;">
                    <div class="features-img">
                        <img src="images/features/img-2.png" alt="img-2" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
            <div class="row align-items-center mt-5 justify-content-between">
                <div class="col-md-6 offset-md-1"
                    style="padding-right: 0 !important; padding-left: 0 !important;margin-left:15px">
                    <div class="features-box mt-5 mt-sm-0 mb-4">
                        <div class="ft-content ">
                            <h2 class="basliq">Təcrübə Proqramından əldə edəcəkləriniz</h2>
                            <ul style="list-style-type: none; padding-top: 20px;">
                                <li style="margin-top:8px;">
                                    <h6 style="font-size: 20px;"><img src="images/Purple.png" alt="Purple" width="3%">
                                        &nbsp&nbsp Proqram müddətində müxtəlif təlimlərdə ödənişsiz iştirak</h6>
                                </li>
                                <li style="margin-top:8px;">
                                    <h6 style="font-size: 20px;"><img src="images/Purple.png" alt="Purple" width="3%">
                                        &nbsp&nbsp Məşhur şirkətlərin CEO-ları ilə onlayn görüşlər</h6>
                                </li>
                                <li style="margin-top:8px;">
                                    <h6 style="font-size: 20px;"><img src="images/Purple.png" alt="Purple" width="3%">
                                        &nbsp&nbsp Real iş təcrübəsi</h6>
                                </li>
                                <li style="margin-top:8px;">
                                    <h6 style="font-size: 20px;"><img src="images/Purple.png" alt="Purple" width="3%">
                                        &nbsp&nbsp Bitirmə sertifikatı</h6>
                                </li>
                                <li style="margin-top:8px;">
                                    <h6 style="font-size: 20px;"><img src="images/Purple.png" alt="Purple" width="3%">
                                        &nbsp&nbsp İş imkanı</h6>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="background: url(images/features/features-bg.png) center center">
                    <div class="features-img">
                        <img src="images/features/img-3.png" alt="img-3" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
        </div>
    </section>
    <!-- Features End -->

    <div id="statistics" style="margin-top:110px !important;">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <!-- <ol class="carousel-indicators" style="width: auto !important;">
                <li data-target="#myCarousel" data-slide-to="0"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
                <li data-target="#myCarousel" data-slide-to="4" class="active"></li>
            </ol> -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner">

                <!-- Fifth Counter Start -->
                <section class="item slide section counter-bg"
                    style="background: url(images/abstract.jpg) center; margin-top: 110px !important;">
                    <div class="bg-overlay op-75" style="background-color:#00000087 !important;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-normal text-white mb-2" style="font-size: 50px !important; ">
                                        VTP
                                        2020
                                    </h2>
                                    <h5 class="font-weight-normal text-white-70" style="font-size: 30px !important;">
                                        Layihəsinin Statistikası</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="counter">
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-results-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="43">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Webİnar</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-briefcase-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="23">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14 " style="font-size: 20px;">
                                        Təlİm</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="11">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Tapşırıq</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="13">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Rəhbərlə
                                        görüş
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-candidate-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="74">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        İştİrakçı</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px;" data-count="10">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">İşə
                                        qəbul
                                        olan
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter End -->

                <!-- Fourth Counter Start -->
                <section class="item slide section counter-bg"
                    style="background: url(https://i.pinimg.com/originals/80/e6/56/80e6569be9ce8f1f57d36b38cddf5177.jpg) center; background-repeat: no-repeat; background-size: cover; margin-top:110px !important;">
                    <div class="bg-overlay op-75" style="background-color:#00000087 !important;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-normal text-white mb-2" style="font-size: 50px !important; ">
                                        VTP'21
                                        Yaz
                                    </h2>
                                    <h5 class="font-weight-normal text-white-70" style="font-size: 30px !important;">
                                        Layihəsinin Statistikası</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="counter">
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-candidate-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="1250">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Namİzəd</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="75">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        İştİrakçı</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-results-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="23">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Vebİnar</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="15">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Tapşırıq</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="13">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Rəhbərlə
                                        görüş
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-briefcase-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px;" data-count="46">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Praktİkİ
                                        Görüş
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter End -->

                <!-- Third Counter Start -->
                <section class="item slide section counter-bg"
                    style="background: url(images/abstract_green.png) center;margin-top:110px !important;">
                    <div class="bg-overlay op-75" style="background-color:#00000087 !important;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-normal text-white mb-2" style="font-size: 50px !important; ">
                                        VTP'21
                                        Yay
                                    </h2>
                                    <h5 class="font-weight-normal text-white-70" style="font-size: 30px !important;">
                                        Layihəsinin Statistikası</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="counter">
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-candidate-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="990">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Namİzəd</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="82">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        İştİrakçı</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-results-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="44">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Vebİnar</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="13">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Tapşırıq</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="14">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Rəhbərlə
                                        görüş
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-briefcase-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px;" data-count="47">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Praktİkİ
                                        Görüş
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter End -->

                <!-- Second Counter Start -->
                <section class="item slide section counter-bg"
                    style="background: url('images/Artboard 1özgün.svg') center; margin-top:110px !important;">
                    <div class="bg-overlay op-75" style="background-color:#00000087 !important;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-normal text-white mb-2" style="font-size: 50px !important; ">
                                        VTP'21
                                        Payız
                                    </h2>
                                    <h5 class="font-weight-normal text-white-70" style="font-size: 30px !important;">
                                        Layihəsinin Statistikası</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="counter">
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-candidate-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="889">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Namİzəd</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="88">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        İştİrakçı</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-results-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="54">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Vebİnar</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="15">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Tapşırıq</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="12">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Rəhbərlə
                                        görüş
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-briefcase-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px;" data-count="36">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Praktİkİ
                                        Görüş
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter End -->

                <!-- First Counter Start -->
                <section class="item active slide section counter-bg"
                    style="background: url('images/yay_bg.jpg'); background-repeat: no-repeat; background-size: cover; margin-top:110px !important;">
                    <div class="bg-overlay op-75" style="background-color:rgba(129,185,167,0.7)!important;"></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-6">
                                <div class="text-center mb-5">
                                    <h2 class="font-weight-normal text-white mb-2" style="font-size: 50px !important; ">
                                        VTP'22
                                        Yaz
                                    </h2>
                                    <h5 class="font-weight-normal text-white-70" style="font-size: 30px !important;">
                                        Layihəsinin Statistikası</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row" id="counter">
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-candidate-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="697">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Namİzəd</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="91">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        İştİrakçı</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-results-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="22">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Vebİnar</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-voting-voting-justicon-lineal-justicon-1.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="18">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Tapşırıq</p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-politician-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px !important;" data-count="7">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Rəhbərlə
                                        görüş
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-2 col-md-6">
                                <div class="counter-box text-center text-white mb-4 mb-lg-0">
                                    <img style="filter: brightness(0) invert(1); padding: 25px;"
                                        src="https://img.icons8.com/external-justicon-lineal-justicon/64/undefined/external-briefcase-voting-justicon-lineal-justicon.png" />
                                    <h2 class="mb-2 font-weight-normal"><span class="counter-value mt-4"
                                            style="font-size: 40px;" data-count="45">0</span>
                                    </h2>
                                    <p class="mb-0 text-white-70 text-uppercase f-14" style="font-size: 20px;">
                                        Praktİkİ
                                        Görüş
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Counter End -->
            </div>
            <!-- Left and right controls -->
            <a class="left carousel-control" style="margin-top:110px !important;" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" style="margin-top:110px !important;" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    <!-- Testimonial Start -->
    <section class="section bg-light" id="clients"
        style="padding-top: 40px !important; padding-bottom: 20px !important">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <h3 class="font-weight-normal mt-3 line-height-1_4" style="font-size:xx-large"> <strong>İstifadə
                            olunacaq platformalar</strong></h3>
                    <p style="font-size: 20px; !important">Tətbiqlər haqqında qısa məlumatlar.</p>
                    <div style="background-color:#3f4195 !important;" class="testi-border my-4"></div>
                </div>
                <div class="col-lg-8">
                    <div class="owl-carousel owl-theme">
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/Kaizala.webp" alt="Kaizala"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5>Kaizala</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs  napiyon">
                                        Kaizala interaktiv şəkildə bağlantı qurmaq, viktorinalar təşkil etmək, anketlər
                                        yaratmaq, planlaşdırma aparmaq və anlıq olaraq fəaliyyətlər həyata keçirmək üçün
                                        istifadə edilən platformadır. Yeni olmasına baxmayaraq, istifadə imkanları və
                                        funksiyonallığı yüksək səviyyədə olan bu platformanı həm mobil versiya
                                        üzərindən, həm də veb səhifəsi şəkilində kompüterlərdə istifadə etmək mümkündür.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- owl item and -->
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/Teams.svg" alt="Teams"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5>Microsoft Teams</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs  napiyon">"Microsoft Teams"
                                        platforması video bağlantı
                                        vasitəsilə məsafədən tapşırıqlar vermək, komanda müzakirəsini təşkil etmək üçün
                                        interaktiv alətlərdən istifadə, sillabus, proqram və digər lazımi materialların
                                        ötürülməsi kimi imkanlar yaradır. Həmçinin böyük həcmli materialların
                                        yerləşdirilməsi, qiymətləndirmənin aparılması alətlərində istifadə, qrup işinin
                                        təşkili də bura daxildir.</p>
                                </div>
                            </div>
                        </div>
                        <!-- owl item and -->
                        <!-- owl item and -->
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/Classroom.png" alt="Classroom"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5>Google Classroom</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs  napiyon">“Google” tərəfindən
                                        təhsil və təlim mərkəzləri üçün yaradılan, öyrənmə mərhələlərini kağızsız və
                                        rəqəmsal şəkildə həyata keçirməyi hədəfləyən platformadır. Eyni interaktiv
                                        sinifdə yer alan istifadəçilər öyrənmə, test və dəyərləndirmə kimi proseslərdə
                                        bir arada iştirak edə bilər. Platforma sinifi yaradan admin və ya adminlər
                                        tərəfindən idarə edilir.</p>
                                </div>
                            </div>
                        </div>
                        <!-- owl item and -->
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/download-removebg-preview.png" alt="Notion"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5 style="position: relative; top: 6px;">Bitrix24</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs  napiyon">Bitrix24 standart
                                        CRM proqramından çoxu və biznesin inkişafı vasitəsidir. Bu, biznesdə qarşılıqlı
                                        əlaqələri və daxili kommunikasiyaları bir platformadan idarə etməyə imkan verir.
                                        İstifadə imkanları və funksiyonallığı yüksək
                                        səviyyədə olan bu platformanı həm mobil versiya üzərindən, həm də veb səhifəsi
                                        şəkilində kompüterlərdə istifadə etmək mümkündür.</p>
                                </div>
                            </div>
                        </div>
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4" style="padding-top:13px !important;">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/download-removebg-preview (1).png" alt="Notion"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5 style="position: relative;top: 6px !important;">Odoo</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs  napiyon">Odoo şirkətlərin
                                        bütün ehtiyaclarını əhatə edən açıq mənbəli biznes proqramları toplusudur: CRM,
                                        e-ticarət, mühasibat uçotu, inventar, satış, layihənin idarə edilməsi və s.
                                        Daxilində olan Odoo Games - praktik vərəqlər vasitəsilə "Odoo Scale Up!" biznes
                                        oyunu gənclərə inteqrasiya olunmuş idarəetmə proqramının funksiyalarını
                                        addım-addım kəşf etməyə imkan verir
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- owl item and -->
                        <div class="item" style="background-color: white;">
                            <div class="testi-content m-3 position-relative">
                                <div class="testi-box p-4">
                                    <div class="testi-user mt-4">
                                        <div class="media align-items-center yuxari">
                                            <img src="images/Zoom.svg" alt="Zoom"
                                                class="mr-3 img-fluid d-block rounded-circle">
                                            <div class="media-body">
                                                <h5 style="position: relative; top: 6px;">Zoom</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <p class="text-muted position-relative mb-0 f-14 sjsjs napiyon">Pandemiya dövründə
                                        məhşurlaşan və milyonlarca
                                        istifadəçi sayına çatan Zoom platforması çoxsaylı qruplar, komandalar üçün
                                        məsafədən video bağlantı qurmaq üçün istifadə edilir. Tətbiq sahəsi sadəcə video
                                        bağlantı ilə məhdudlaşmayan bu platformada bağlantı zamanı bir çox inkişaf
                                        etdirilmiş funksiyalardan istifadə etmək mümkündür.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- owl item and -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial End -->

    <!-- Contact Us Start -->
    <section class="program_content" style="padding-top: 80px !important;">
        <div class="container">
            <div class="row justify-content-center" style="position: relative;top: 20px;">
                <div class="col-lg-6 col-md-8">
                    <div class="title text-center mb-5">
                        <h3 class="font-weight-normal text-dark" style="font-size:xx-large !important">
                            <strong>Proqramın Tərkibi</strong>
                        </h3>
                        <p class="text-muted  napiyon" style="font-size: 20px; !important">Proqram müddətində
                            ediləcəklərin yol xəritəsi</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 program_content_sub">
                    <h3 style="margin-bottom:15px; font-size:24px" id="content_heading"><i class="fa fa-briefcase"
                            aria-hidden="true"></i> Sahələr üzrə bölgü</h3>
                    <p style="font-size: 18px; " id="content_p_tags">Proqram müddətində ilk mərhələdə təcrübəçilərin
                        seçmiş olduğu alt proqramlar üzrə bölgüsü
                        aparılacaq. Onlayn formada qruplar (komandalar) yaradılacaq. Sahələr üzrə bölgü aparıldıqdan
                        sonra hər bir şöbə iştirakçısı digər bölmələr üçün təşkil ediləcək onlayn görüşlərdə və
                        tapşırıqlarda da iştirak edə biləcək.</p>
                </div>
                <div class="col-lg-3 program_content_sub">
                    <h3 style="margin-bottom:15px;font-size:24px" id="content_heading"><i class="fa fa-tasks"
                            aria-hidden="true"></i> Tapşırıqlar</h3>
                    <p style=" font-size:18px;" id="content_p_tags">Bu mərhələdə təcrübəçilər iş mühiti ilə tanış olmaq
                        imkanı əldə edəcəklər. Şirkətin idarəetmə sistemi ilə və real iş axışlarının (workflows)
                        gedişatı ilə tanış ola biləcəklər. İş mühitində onlayn olaraq yerinə yetirilməsi mümkün olan
                        tapşırıqlar veriləcək və layihə idarəetməsi şəklində davam edəcək.</p>
                </div>
                <div class="col-lg-3 program_content_sub">
                    <h3 style="margin-bottom:15px;font-size:24px" id="content_heading"><i class="fa fa-cogs"
                            aria-hidden="true"></i> Təlimatlandırma</h3>
                    <p style="font-size:18px;" id="content_p_tags">Hər bir qrup üzrə mentorlar fəaliyyət göstərəcək.
                        Layihə və tapşırıqların tətbiqi zamanı mentor tərəfindən anlıq olaraq və digər zamanlarda
                        təlimatlar veriləcək. Layihələr və tapşırıqlar zamanı yaranan sualları mentorlara ünvanlandıra
                        bilərsiniz.</p>
                </div>
                <div class="col-lg-3 program_content_sub">
                    <h3 style="margin-bottom:15px;font-size:24px" id="content_heading"><i class="fa fa-handshake-o"
                            aria-hidden="true"></i> Təqdimetmə</h3>
                    <p style="font-size:18px; " id="content_p_tags">Verilmiş tapşırıqların tamamlanma mərhələsi
                        təqdimetmə və qiymətləndirmə ilə bitəcək. Qiymətləndirmə şirkət rəhbərliyi və mentorlar
                        tərəfindən, eləcə də komanda üzvləri tərəfindən aparılacaq. Hər bir qiymətləndirmədə
                        təcrübəçilər özləri də iştirak edə biləcəklər.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us End -->

    <section>
        <div id="karusel" class="container" style="padding-top: 120px">
            <div class="row">
                <div class="col-md-12 karusel-div" style="height:680px;">
                    <h2 style="font-weight:bold; text-align:center; font-size: xx-large;">İştirakçı Fikirləri</h2>
                    <p style=" font-size:18px; font-weight:bold; text-align:center;">VTP'20 , VTP'21 Yaz , VTP'21 Yay,
                        VTP'21 Payız və VTP 22 Yaz
                        təcrübə proqramında iştirak edənlərin layihə haqqında düşüncələri
                    </p>
                    <div id="testimonial-slider" class="owl-carousel">
                        <div class="testimonial tsmnl">
                            <h3 class="title">Səbinə İbrahimova (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                Alim bəy, mən də çox təşəkkür edirəm bu proqram üçün. Mənə özümü tapmaqda kömək oldu.
                                Onlayn olması mənim üçün üstünlük idi. Çünki mən rayonda yaşayıram və bu proqramın
                                onlayn olması mənim üçün əsl fürsət oldu. Çox şey öyrəndim, özümü inkişaf etdirdim. Buna
                                vəsilə olduğunuz üçün çox minətdaram sizə. Çox sağ olun, İşlərinizdə uğurlar!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Nadirə Məmmədova (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                İlk öncə bu proqramın təşkili və həyata keçirilməsində əməyi keçən hərkəsə təşəkkür
                                edirəm. Alim bəy, sizin seminarlarınız, Taleh bəyin İR-dən verdiyi məlumatlar və
                                praktiki tapşırıqlar çox faydalı oldu.Təşəkkürlər bütün əməkdaşlarınıza.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Qərib Əşrəfov (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                Bu proqramın təşkil edilib həyata keçirilməsində əmək sərf edən hər kəsə öz təşəkkürümü
                                bildirirəm. Həqiqətən iş və sıx qrafikə baxmayaraq, bizlərə də vaxt ayırıb
                                məlumatlandırdınız. Həqiqətən də təqdirəlayiqdir. Sizlərə, həmçinin digər təcrübəçilərə
                                uğurlar arzulayıram!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Ləman Namazlı (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                Öncəliklə, VTP komandasına dərin təşəkkürlərimi bildirirəm, yaxşı ki, belə bir proqram
                                var və mən də bu proqrama qoşuldum. Mən İnsan Resursları sahəsində karyeramı qurmaq
                                istəyirəm və bu sahədə mənim ilk təcrübəm oldu. Taleh beyin sayəsində bu sahədə biliklər
                                əldə etdim. Praktiki tapşırıqlar çox faydalı oldu. Her şey üçün təşəkkür edirəm. Sizləri
                                tanımaq məniim üçün çox xoş oldu. İşlərinizdə uğurlar arzu edirəm!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Ləman Rəzzaqlı (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                Salam, mənim üçün VTP-nin ən yaxşı xüsusiyyətləridən biri istədiyim şöbələrin dərslərinə
                                qoşula bilməyim idi. Maraqlı olan şöbələrə və maraqlı olan mövzuların görüşlərinə qoşula
                                bilmə fürsəti əldə etdim. Bundan əlavə real iş ortamından insanlarla təşkil edilən
                                görüşlərdə suallarıma cavab tapa bildim. Alim bəyin görüşlərində yeni bilgilər öyrəndim.
                                Ən əsası da bu proqramda nələri bilmədiyimi də öyrəndim. Belə bir fürsəti yaratdığınız
                                üçün əməyi keçən hər kəsə təşəkkürlərimi bildirirəm!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Aydan Şükürlü (VTP'22 Yaz)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">
                                Mən də VTP komandasının hər bir üzvünə öz dərin minnətdarlığımı bildirirəm. Şəxsi
                                inkişafımda yeni bir mərhələ, yeni bir addım oldu. Belə proqramı təşkil edib,
                                tələbələrə, gənclərə şərait yaratdığınız üçün çox sağ olun. HR sahəsində Taleh bəyin
                                sayəsində təməl bilgilərə sahib oldum. Praktiki tapşırıqlar isə ayrıca maraqlı və
                                öyrədici idi. Hər birinizə təşəkkürlər və iş həyatınızda uğurlarr!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Aysel Cabbarov (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Bizə çox
                                faydalı 3 ay bəxş etdiniz. Ən
                                əsası real iş təcrübəsi ilə və kollektivlə tanış olduq. Bütün kollektivə əməkləri üçün
                                təşəkkürlər! Proqramda iştirak edən hər kəsə uğurlar!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Afaq Nəzərəova (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Məndə eyni
                                anda həm Təhsil İnstitunda
                                mentor kimi həm də, VTP-də iştirakın necə olduğunu düşünürdüm. Hər şey maraqlı oldu.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Sücahət Qurbanlı (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Bu təcrübə
                                proqramı vasitəsilə real
                                iş təcrübəsi ilə tanış oldum. IT ilə yanaşı biznesin də əsaslarını öyrəndim. Çox
                                təşəkkür
                                edirəm ki, gənclərə bu şansı yaratdınız.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Zeynəb Muradlı (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Bizə bu imkanı
                                yaratdığınız üçün çox
                                təşəkkürlər. 3 ay boyunca bizə çox böyük qatqılarınız oldu.</p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Günel Yusifova (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Əsas da baxış
                                bucağımı dəyişdiyiniz üçün yeni fikirlər və biliklər qazadırdığınız üçün çox sağolun.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Turanə Həsənli (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Artıq mənim
                                ətrafımda hər kəs qoşulmaq istəyir. Bu 3 ayda bizə geniş vizyon qazandırdınız, çox
                                dəyərli görüşlərimiz oldu, ən əsası daim nəsə öyrətməyə çalışırdınız, suallarımıza aktiv
                                cavab verdiniz. Çox təşəkkür edirəm!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Aydan Heydərli (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Qatıldığım ən
                                gözəl təcrübə proqramı oldu. Bizə qatdıqlarınıza görə hər birinizə dərin minətdarlığımı
                                bildirirəm!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Vüqanə Nuraliyeva (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Proqrama ilk
                                müraciət edəndə virtual təcrübə proqramı olduğu üçün tərəddüd içərisində idim, amma indi
                                görürəm ki, bu 3 ay ərzində bir çox şey əldə etmişəm. Şöbə görüşlərində, karyera
                                görüşlərində, Emre bəylə excel dərslərində və daha bir çox görüşdə bir çox bilik əldə
                                etdim. Buna görə Alim bəyə və proqramda zəhməti olan hər kəsə təşəkkür edirəm.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Kamran Məmmədzadə (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Başda Alim bəy
                                olmaqla HR şöbəsi üzrə bizi dəyərli məlumatlarla sahənin dərinlikləri ilə tanış etdiyinə
                                görə Taleh bəyə dərin təşəkkürümü bildirirəm. VTP boyunca təkcə HR şöbəsi ilə bağlı
                                deyil, digər şöbələrin də görüşlərinə qatılıb hərtərəfli inkişaf üçün faydalandım. Hər
                                bir şöbənin rəhbərinə minnətdaram. Bizə qatdığınız dəyər üçün çox sağolun!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Səma İsparova (VTP'21 Payız)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Bizim üçün bu
                                3 ay çox maraqlı və faydalı təcrübə oldu. Ən bəyəndiyim təlimlər HR və rəhbərlərlə
                                görüşlər idi. Sadəcə istəyərdim ki, HR təlimləri həftədə ya iki dəfə, ya da 1 saat 30
                                dəqiqə olsun. Taleh bəy çox maraqlı izah edirdi təlimi ona görə də doymadım HR
                                təlimlərindən.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-25px;">
                            <h3 class="title">Eyla Musayeva (VTP'21 Yay) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Mən başda
                                Alim bəy olmaqla, təşkilatda əməyi keçən hər kəsə
                                təşəkkürümü bildirirəm. Öyrəndiklərimin kariyerama müsbət təsir edəcəyinə inanıram.
                                Bundan əlavə təcrübə müddətində çox əyləndim, əylənərkən öyrəndim. Ofisi ziyarət etdikdə
                                qonaqpərvərliyiniz, səmimi kollektiviniz xüsusən diqqətimi cəlb etdi. Bütün bunlara
                                görə, yeni VTP-yə qoşulmağa artıq bir neçə dostumu təşviq etmişəm. Heç bir qarşılıq
                                gözləmədən belə layihələr təşkil etdiyiniz üçün bütün gənclər adına minnətdaram!
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-20px">
                             <h3 class="title">Aytac Hacıyeva (VTP'21 Yay)</h3>
                             <p style="font-weight:bold;font-size:16px; color:black;" class="description">Mən də öz
                                adımdan əməyi olan hamına təşəkkür edirəm. Alim bəy, Taleh
                                bəy, Emre hocadan, bütün təlimlərdən, Odoo gamesden çoxlu yeni, maraqlı şeylər öyrəndim.
                                Çox sağolun belə bir program təşkil etdiyiniz üçün. Məhəmməd bəy və Nihal xanıma da
                                bütün suallarımızı cavablandırdıqları, səmimi yanaşmaları üçün təşəkkürlər.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Nİlufər Məmmədova (VTP'21 Yay) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Mən də öz
                                adıma həm ön planda , həm arxa planda çalışan hər kəsə
                                təşəkkürümü bildirirəm. Biz gənclərə dəstək verdiyiniz üçün sizə minnətdaram.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-20px">
                            <h3 class="title">Leyla Cəbİyeva (VTP'21 Yay) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Hər
                                birinizə bizə yaratdığınız bu imkana görə təşəkkür edirəm.
                                İmkanların bu qədər məhdud olduğu bir vaxtda bizə çox şey öyrtədiniz. Xüsusilə Taleh
                                müəllim, bütün suallarımıza səbrlə cavab verdiyiniz, heç bir məsələnin qaranlıq
                                qalmasına imkan vermədiyiniz üçün təşəkkürlər.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-20px">
                            <h3 class="title">Səmayə Hümbətəlİyeva (VTP'21 Yay) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Məndə Alim
                                bəy, Anar bəy, Nihal xanım başda olmaqla, bütün heyətə
                                öz təşəkkürümü bildirirəm. Çox sağolun iş vaxtınızdan bizə zaman ayırdığınız üçün istər
                                sahəmizlə bağlı, istər şəxsi keyfiyyətlərimizi inkişaf etdirməklə bağlı gözəl məlumatlar
                                edindik. Əylənərkən öyrəndik, öyrənərkən əyləndik. Bir daha təşəkkürlərr
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Xəyalə Həzİyeva (VTP'21 Yay)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Hərkəsə öz
                                əməyinə və bizə verdiyi faydalı məlumatlara, yeni
                                biliklərə görə sonsuz təşəkkürümü bildirirəm
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-20px">
                            <h3 class="title">Elgün Sarıyev (VTP'21 Yay) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Təcrübə
                                proqramı boyunca Buta Grup əməkdaşlarına öz səmimiyyətinə
                                və göstərdiyi köməklərinə görə təşəkkür edirəm. Təcrübə proqramı boyunca həqiqətən yeni
                                şeylər öyrəndik, həm şöbələrlə görüşlər, həm rəhbərlər ilə həm də motivasiya videolar
                                hər biri çox şey qatdı bizə. Bütün əziyyətləriniz üçün bir daha Təşəkkürlər
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Zemfİra Quluzadə (VTP'21 Yay)</h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Hər şey üçün
                                təşəkkür edirəm. Unudulmaz bir yay yaşadıq
                                sayəsinizdə. Həm əyləndik, həm öyrəndik. Haqqınızı halal edin. Çox sağ olun.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top:-25px">
                            <h3 class="title">Aybənİz Əlİyeva (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Çox tez
                                keçdi 3 ay. Bu təcrübə proqramına qoşularkən heç də bu
                                qədər çox şey öyrənə biləcəyimi təxmin etmirdim. Virtual olduğu üçün bu qədər səmimi bir
                                mühit olacağını da gözləmirdim. Çox təşəkkürlər hər birinizə, xüsusən də Alim bəy sizə,
                                bizə belə bir fürsət yaratdığınız üçün. Mənim üçün gözəl bir təcrübə oldu. Hər görüşə
                                böyük həvəslə qatılırdım. Digər iştirakçıları tanıdığım üçün də şad oldum. Bir sözlə
                                gözləntilərimin qat-qat üstündə bir praqram oldu. Əziyyətlərinizi halal edin.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 style="text-align:center; " class="title">Günel Ağakİşİyeva (VTP'21
                                Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description"> Başda
                                təşkilatçılıq üçün, Alim bəy, sizə, daha sonra isə Nihal
                                xanım və Amil bəyə bütün suallarıma və təkliflərimə çox səbrli və operativ bir şəkildə
                                cavab verdiyi üçün təşəkkür edirəm. Ümumilikdə hər bir şey əla idi.
                            </p>     
                        </div>
                        <div style="position: relative;top: -4px;" class="testimonial tsmnl">
                            <h3 style="text-align:center;" class="title">Aydan İsgandarova (VTP'21
                                Yaz) 
                            </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Onlayn
                                şəkildə gözlədiyimdən qat-qat çox şey öyrəndim. Ümumiyyətlə,
                                tapşırıqlar, görüşlər maraqlı və öyrədici olurdu. Ən çox sevdiyim "SWOT" analiz,
                                "Process" və "Mind Mapping" şəklində olan tapşırıqlar idi. Praktik olaraq yerinə
                                yetirdiyimiz üçün asanlıqla yadda qalırdı.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: 4px;">
                            <h3 class="title">Rəmzİyyə Əlİyeva (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Mən də təşəkkür
                                edirəm hər şey üçün. Qoşulduğum görüşlərdə özümü
                                daha da inkişaf etdirdiyimi və gələcək üçün mənə böyük faydası olduğunu düşünürəm. Sizin
                                komandanın üzvü olmaq xoş oldu.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: -13px;">
                            <h3 class="title">Nuray Allahverdİyeva (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Xüsusilə
                                pandemiya dövründə belə bir proqramla tanış olub qatılmağım
                                həm motivasiyamı yüksək tutmağıma, həm də səmimi bir mühitdə sosiallaşaraq bərabər
                                öyrənmənin sevincini yaşamağıma səbəb oldu. Sanki 3 aylıq bir məktəbdə oxuduq, indi də
                                məzun oluruq. Həyatımızda gözəl bir iz buraxdığınız üçün hamınız haqqınızı halal edin.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Gülhanə Nəcəflİ (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Mən də hər kəsə
                                təşəkkürümü bildirirəm. Mənim üçün faydalı 3 ay
                                oldu. Hər şeyə görə çox sağolun.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Aytən Qurbanova (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Başda, Alim
                                bəy, siz olmaqla, VTP komandasına təşəkkürlərimi
                                bildirirəm. Bu müddət ərzində çox şey öyrəndik sizlərdən. Və belə aktiv komanda
                                yoldaşlarımla birlikdə olduğuma məmnun oldum. Hər şey üçün təşəkkürlər!
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: -35px;">
                            <h3 class="title">Məhəmməd Quluzadə (VTP'21 Yaz) </h3>
                            <p style="font-weight:bold;font-size:16px; color:black;" class="description">Mən bu təcrübə
                                proqramında həm texniki, həm sosial biliklər əldə
                                etdim. Amma bu proqramda insanların hayatında müsbət dəyişikliklər yaratma, daima
                                öyrənmə, öyrətmə və bundan həzz almaq kimi şeyləri prinsip etməyə çalışdım. Gələcək
                                həyatıma böyük dəyər qatdığımı düşünürəm. Yəni bu texniki və sosial bilikləri bir çox
                                müəssisədə əldə edə bilərik. Amma bu idarəçilik mədəniyyəti örnəyini, geniş vizyonu hər
                                şirkətdə görməyəcəkdik. Bu da gələcəkdə peşəkar həyata daha kiçik baxış bucağı ilə
                                baxmağıma səbəb olacaqdı. Ümumiyyətlə iş dünyasına baxışım dəyişdi. Həqiqətən çox
                                əziyyət çəkdiniz. Hər şey üçün minnətdaram.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: -35px;">
                            <h3 class="title">Səİdə Məmmədova (VTP'21 Yaz) </h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Mən bu
                                təcrübə proqramına müraciət edərkən Satınalma və Mühasibatlıq
                                şöbələri üzrə qərarsız qalmışdım, daha sonra satınalma üzrə təcrübə imkanlarının
                                nisbətən daha az olduğunu düşünüb bu sahəni seçdim. Sizə də təşəkkür edirəm ki, digər
                                şöbələr üzrə də görüşlərə qatılmaq imkanı yaratdınız. Beləliklə, həm Anar bəydən, Mehman
                                bəydən, həm də Mühasibatlıqdan Müslüm və Ceyhun bəydən də çox şey öyrəndim. Təkcə
                                sizlərdən deyil, digər iştirakçılardan da öyrəndiyimiz yeni şeylər oldu. Emre bəyin də
                                zəhməti danılmazdır təbii ki. Təşəkkür edirəm hər birinizə, VTP`21-in bir parçası olmaq
                                çox xoş oldu!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Kənan Əhmədlİ (VTP'21 Yaz) </h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Mən də hər
                                kəsə təşəkkürümü bildirirəm. Bu zaman içində
                                qazandıqlarım karyeram üçün olduqca faydalı olduğunu düşünürəm, həmçinin rəqabətli və
                                səmimi mühitdə olduğuma görə çox məmnun oldum. Bir daha təşəkkürlər!
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: -10px;">
                            <h3 class="title">Şəfəq Süleymanova (VTP'21 Yaz) </h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Mən də
                                təşəkkür edirəm hər kəsə, demək olar ki həftə içi hər gün
                                dəyərli vaxtınızı bizə ayırdığınız üçün. Mənim üçün də faydalı oldu bu proqram, xüsusilə
                                də Mühasibatlıq şöbəsi ilə görüşlər mühasiblik işinə olan marağımı artırdı, karyerama
                                mühasib olaraq başlamaq qərarımı da bu proqrama qoşulduqdan sonra dəqiqləşdirdim. 
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Məhəmməd Nəbİzadə (VTP'21 Yaz) </h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Əvvəla hər
                                kəsə təşəkkür edirəm bu gözəl
                                fürsət üçün. Həqiqətən çox şey öyrəndim və gözlədiyimdən daha da maraqlı və faydalı
                                oldu. 3 illik universitet təhsilimdə öyrəndiyimdən daha çox bilgi əldə etdim bu 3 ayda.
                            </p>
                        </div>
                        <div class="testimonial tsmnl" style="position: relative;top: -16px;">
                            <h3 class="title">Günay Həsənova (VTP'21 Yaz) </h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">VTP'21
                                proqramının istər mənəvi, istərsə də akademik cəhətdən
                                qatdığı dəyər ölçülməzdi mənə görə. Bəlkə günün birində kiməsə karyera rəhbərliyi edə
                                bilsəm, hər halda sözlərimə bu proqramdan əldə etdiklərimlə başlayacam. Elə bir görüş,
                                elə bir video vebinar olmadı ki, burdan nələrisə öyrənməyim. Bizlərə bu cür imkan və
                                şans tanıdığınız üçün başda Alim bəy olmaqla, proqramda əməyi keçən hər kəsə təşəkkür
                                edirəm. Haqqınızı halal edin!
                            </p>
                        </div>
                         <div class="testimonial tsmnl">
                            <h3 class="title">Elvİn Ağalarov (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">2 ay ərzində
                                əməyi keçən hər kəsə təşəkkür edirəm və bu sayədə özümü
                                inkişaf etdirmək şansını verdiyiniz üçün minnətdaram. İnşallah iş həvəsimizlə əla
                                layihələrə imza atarıq.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 style="text-align:center;" class="title">Elmar Xəlilov (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Mən də öz
                                adıma kollektivə təşəkkürümü bildirirəm. Şirkət
                                mədəniyyətinin və iş mühitinin nə dərəcədə önəmli olduğunu, spesifik bilgilərlə bərabər
                                dünya görüşü və hər sahədən nələrisə öyrəndim. Daha yaxşı, uğurlu günlər diləyilə,
                                minnətdaram hər bir kəsə.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Səkİnə Qulİyeva (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Hər birinizə
                                sonsuz təşəkkürümü bildirirəm. Sayənizdə karantin çox
                                maraqlı və öyrədici oldu. Bir çox yeni informasiyalar öyrəndim. Seçilən dostlarımızı
                                təbrik edirəm və bütün proqram iştirakçılarına uğurlar arzu edirəm.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Aydan Atakİşİyeva (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Sadəcə öz
                                adıma deyə bilərəm ki, sizin sayənizdə 2 ay dayanmadan hər
                                gün bir şeylər öyrəndim. Qazandığım hər bir uğurun arxasında həmişə sizin imzanız
                                olacaq. Yeni proqramlarda daha çox insanlara faydalı olacağınıza heç bur şübhəm yoxdur.
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Zəhra Vəlİzadə (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description"> Hər bir
                                iştirakçını təbrik edirəm. Gələcək iş həyatınızda uğurlar!
                                Şübhəsiz ki, "VTP 2021" də çox faydalı bir proqram olacaq 
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Zəhra Sadıqova (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Həqiqətən çox
                                faydalı və maraqlı proqram oldu. Təşəkkürlər bütün
                                komandaya! Hər kəsə uğurlar!
                            </p>
                        </div>
                        <div class="testimonial tsmnl">
                            <h3 class="title">Tərlan Hüseynova (VTP'20)</h3>
                            <p style="  font-weight:bold;font-size:16px; color:black;" class="description">Yeni layihə
                                xeyirli, uğurlu olsun! Yeni layihədə bir daha təlimlərə
                                qoşulmaq istəyirəm.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light" style="padding-bottom: 0; z-index: -1;" id="form">
        <div class="container-login100"
            style="background: linear-gradient(-45deg, #beffd7   0%, #4c9c82  100%) !important;">
            <div class="col-12 text-center">
                <h3 style="color:white;">
                    Virtual Təcrübə Proqramına müraciət bitmişdir. Növbəti proqrama qeydiyyat oktyabr ayında
                    başlayacaqdır!
                </h3>
            </div>
        </div>
    </section>

    <!-- Subscribe End -->
    <section class="reklam" style="z-index: 1;">
        <a href="https://recruitment.az/" target="_blank"> <img class="desktop" src="images/recruitment_reklam_d.png"
                style="width:100%"></a>
        <a href="https://recruitment.az/" target="_blank"> <img class="mobile" src="images/recruitment_reklam_m.png"
                style="width:100%"></a>
    </section>

    <!-- footer Start -->
    <div class="footer" style="padding:10px 0 0 0 !important;">
        <div class="container">
            <div class="row">
                <div id="ftrimg" class=" col-md-6 col-sm-12">
                    <div class="row" style="position: relative;top:10px;">
                        <div class="footer-logo merkez col-md-12 ">
                            <div class="row">
                                <div class="col-md-4 col-sm footer-logo-1">
                                    <a href="http://bayburtgrup.com.tr/" target="_blank"><img src="images/bayburt.png"
                                            alt="footer_logo1" width="100%" height="120%"
                                            style="object-fit: contain;"></a>
                                </div>
                                <div class="col-md-4 col-sm footer-logo-2">
                                    <a href="https://ozguninsaat.com/" target="_blank"><img src="images/ozgun.png"
                                            alt="footer_logo1" width="100%" height="120%"
                                            style="object-fit: contain;"></a>
                                </div>
                                <div class="col-md-4 col-sm footer-logo-2">
                                    <a href="https://www.butagrup.com.tr/?lang=en" target="_blank"> <img
                                            src="images/buta .png" alt="footer_logo2" width="100%" height="127%"
                                            style="object-fit: contain; margin-left: 20px "></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="ftrlnks" class=" col-md-6 col-sm-12">
                    <div class="footer-links merkez son" style="margin-top: 0 !important;">
                        <ul class="merkez-2"
                            style="float: right;position: relative;top: 40px !important;padding-bottom:20px !important">
                            <li style="float: left; width: 45px; list-style: none;"><a target="_blank"
                                    href="https://www.facebook.com/ButaGrupAz/"> <i class="fab fa-facebook fa-2x"
                                        style="font-size: 23px !important;"></i> </li>
                            <li style="float: left; width: 45px;list-style: none;"><a target="_blank"
                                    href="https://www.instagram.com/butagrup.az/"> <i class="fab fa-instagram fa-2x"
                                        style="font-size: 23px !important;"></i> </li>
                            <li style="float: left; width: 45px;list-style: none;"><a target="_blank"
                                    href="https://www.linkedin.com/company/buta-grup-az%C9%99rbaycan/"> <i
                                        class="fab fa-linkedin fa-2x" style="font-size: 23px !important;"></i></li>
                            <li style="float: left; width: 45px;list-style: none;"><a target="_blank"
                                    href="https://twitter.com/butagruptr"> <i class="fab fa-twitter fa-2x"
                                        style="font-size: 23px !important;"></i></li>
                            <li style="float: left; width: 45px;list-style: none;"><a target="_blank"
                                    href="https://www.youtube.com/channel/UCHnlDWK84ZgzQRAZgSb65aQ"> <i
                                        class="fab fa-youtube fa-2x" style="font-size: 23px !important;"></i></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Scroll To Top -->
            <a id="back-to-top" class="back-to-top js-scroll-trigger" href="#main"></a>
            <!-- Scroll To Top Ends-->
        </div>
        <p style="text-align: center;position:relative;top:22px;padding-bottom:10px;">&#169;2022 Powered by <a
                href="http://butagrup.az/" target="_blank">Buta Grup</a></p>
    </div>


    <div class="modal fade" id="myModal1" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP Yay 2022</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab1">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#1a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#2a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#3a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#4a" data-toggle="tab">IT DM</a>
                                </li>
                                <li><a href="#5a" data-toggle="tab">LP</a>
                                </li>
                                <li><a href="#6a" data-toggle="tab">CE</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="1a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="0">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Elnur</div>
                                                <div class="st_column _surname">Rəcəbov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Şirin</div>
                                                <div class="st_column _surname">Cəfərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Rüstəmli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Murad</div>
                                                <div class="st_column _surname">Orucov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Sima</div>
                                                <div class="st_column _surname">Maniyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">İlkin</div>
                                                <div class="st_column _surname">Hacıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Natəvan</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Salahova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Nəzrin</div>
                                                <div class="st_column _surname">Abbaszadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Yusifova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Nəzrin</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Raul</div>
                                                <div class="st_column _surname">Ömərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Vüsal</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">İlqar</div>
                                                <div class="st_column _surname">Əskərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Xalid</div>
                                                <div class="st_column _surname">Məmmədov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Ələkbərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Səbinə</div>
                                                <div class="st_column _surname">Şükürova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Yeganə</div>
                                                <div class="st_column _surname">Muradova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Cavidan</div>
                                                <div class="st_column _surname">Abdulla</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Elcan</div>
                                                <div class="st_column _surname">Eyvazlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Əli</div>
                                                <div class="st_column _surname">Yusifov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Aslan</div>
                                                <div class="st_column _surname">Rüstəmov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">Afər</div>
                                                <div class="st_column _surname">Məhərrəmova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">25</div>
                                                <div class="st_column _name">Əfsanə</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">26</div>
                                                <div class="st_column _name">İsa</div>
                                                <div class="st_column _surname">Heydəroğıu</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">27</div>
                                                <div class="st_column _name">Mahmizər</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">28</div>
                                                <div class="st_column _name">Şəfa</div>
                                                <div class="st_column _surname">Heydərova</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="2a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="1">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Ağabəy</div>
                                                <div class="st_column _surname">Qurbanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Azadə</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Səfərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Şəhanə</div>
                                                <div class="st_column _surname">İsrafilzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Gülarə</div>
                                                <div class="st_column _surname">Quliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Rəvan</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Cəfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Oruc</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Rüstəmlilər</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Şahin</div>
                                                <div class="st_column _surname">Kərimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Alsəfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Ayxan</div>
                                                <div class="st_column _surname">Dadaşov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Nəbiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Amin</div>
                                                <div class="st_column _surname">Muxtarov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Lalə</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Muradlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Nəbizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Nazlı</div>
                                                <div class="st_column _surname">İsmayılova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Şirinova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Səmra</div>
                                                <div class="st_column _surname">Mahmudlu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="3a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="2">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Zenfira</div>
                                                <div class="st_column _surname">Baxışova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Səmimi</div>
                                                <div class="st_column _surname">Mehdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Leyla</div>
                                                <div class="st_column _surname">Mirzəyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Ayşə</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Fatimə</div>
                                                <div class="st_column _surname">Vəliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Nuray</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Telman</div>
                                                <div class="st_column _surname">Baxışlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Sona</div>
                                                <div class="st_column _surname">Nəzərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Leyla</div>
                                                <div class="st_column _surname">Mirzəzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Şəfa</div>
                                                <div class="st_column _surname">Məmmədzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Maişat</div>
                                                <div class="st_column _surname">Vəlimətova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Ceyran</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Gülxar</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Səyyarə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Röya</div>
                                                <div class="st_column _surname">Hümbətova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Nazlı</div>
                                                <div class="st_column _surname">Kərimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Nihalə</div>
                                                <div class="st_column _surname">Musazadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Orxan</div>
                                                <div class="st_column _surname">Mustafayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Rəvan</div>
                                                <div class="st_column _surname">Verdiyev</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="4a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="3">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Zöhrə</div>
                                                <div class="st_column _surname">Aydınova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Gülsabah</div>
                                                <div class="st_column _surname">Mustafayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Lalə</div>
                                                <div class="st_column _surname">İsgəndərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Gülnarə</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Zöhrə</div>
                                                <div class="st_column _surname">Abıyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Süleymanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Cavad</div>
                                                <div class="st_column _surname">Məstizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Əsgərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Gülnar</div>
                                                <div class="st_column _surname">Kətənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Əzimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Abbasqulu</div>
                                                <div class="st_column _surname">Allahverdili</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Zəka</div>
                                                <div class="st_column _surname">Nəcəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Təmraz</div>
                                                <div class="st_column _surname">Qardaşov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Polad</div>
                                                <div class="st_column _surname">Həsənov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="5a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="4">
                                        <header class="st_table_header">
                                            <!-- <h2>CSS3 *~'</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Əhməd</div>
                                                <div class="st_column _surname">Rza</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Şaiq</div>
                                                <div class="st_column _surname">Nağıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Müşfiq</div>
                                                <div class="st_column _surname">Mehtizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Məhəmmədəli</div>
                                                <div class="st_column _surname">Rüstəmov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Hüseyn</div>
                                                <div class="st_column _surname">Rzayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Ruqiyə</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Turqut</div>
                                                <div class="st_column _surname">Vəliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Şirin</div>
                                                <div class="st_column _surname">Şirinzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Arzu</div>
                                                <div class="st_column _surname">Bayramova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Adil</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Bahar</div>
                                                <div class="st_column _surname">Hacıyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Elgün</div>
                                                <div class="st_column _surname">Həmidov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="6a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="5">
                                        <header class="st_table_header">
                                            <!-- <h2>CSS3 *~'</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Aytən</div>
                                                <div class="st_column _surname">Ələsgərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Fərid</div>
                                                <div class="st_column _surname">Şahbazov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Fuad</div>
                                                <div class="st_column _surname">Bəxtiyarov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Fəxri</div>
                                                <div class="st_column _surname">Nəsibov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Tərlan</div>
                                                <div class="st_column _surname">Şəlimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Fatimə</div>
                                                <div class="st_column _surname">Əhmədli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal2" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP Yaz 2022</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab2">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#7a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#8a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#9a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#10a" data-toggle="tab">IT DM</a>
                                </li>
                                <li><a href="#11a" data-toggle="tab">LP</a>
                                </li>
                                <!-- <li><a href="#6a" data-toggle="tab">CE</a>
                            </li> -->
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="7a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="7">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Abbasqulu</div>
                                                <div class="st_column _surname">Allahverdili</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">İlhamə</div>
                                                <div class="st_column _surname">Novruzova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Tural</div>
                                                <div class="st_column _surname">Kərimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Pərviz</div>
                                                <div class="st_column _surname">Prizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Fərzəlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Cabbarlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Zümrüd</div>
                                                <div class="st_column _surname">İsgəndərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Osman</div>
                                                <div class="st_column _surname">Bəşirov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Ayna</div>
                                                <div class="st_column _surname">Aslanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Nadir</div>
                                                <div class="st_column _surname">İsgəndərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Talıblı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Şəfiqə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Asif</div>
                                                <div class="st_column _surname">Mustafayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Murad</div>
                                                <div class="st_column _surname">Orucov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Süleyman</div>
                                                <div class="st_column _surname">Cəbrayılzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Cahandar</div>
                                                <div class="st_column _surname">Hacıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Əli</div>
                                                <div class="st_column _surname">Məhərrəmli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Taleh</div>
                                                <div class="st_column _surname">Məlikov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Elnur</div>
                                                <div class="st_column _surname">Hacıbəyli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Natiq</div>
                                                <div class="st_column _surname">Qədirov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Səkinə</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Abbas</div>
                                                <div class="st_column _surname">Musayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">Rəfael</div>
                                                <div class="st_column _surname">Mehdiyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">25</div>
                                                <div class="st_column _name">Rəmzi</div>
                                                <div class="st_column _surname">Osnanlı</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="8a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="8">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Rəzzaqlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Anar</div>
                                                <div class="st_column _surname">Qurbanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Fərid</div>
                                                <div class="st_column _surname">Qəhrimanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Elgiz</div>
                                                <div class="st_column _surname">Kazımov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Məleykə</div>
                                                <div class="st_column _surname">Abuşova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Elza</div>
                                                <div class="st_column _surname">Kərimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Jalə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Yusif</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Nərgiz</div>
                                                <div class="st_column _surname">Aslanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Şəbnəm</div>
                                                <div class="st_column _surname">Hacızadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Aynur</div>
                                                <div class="st_column _surname">Hüseynzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Ziya</div>
                                                <div class="st_column _surname">Nəcəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Leyla</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Səbinə</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Oruc</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Aydın</div>
                                                <div class="st_column _surname">Salmalı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Rauf</div>
                                                <div class="st_column _surname">Yaqubov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Tural</div>
                                                <div class="st_column _surname">Yaqubov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Səma</div>
                                                <div class="st_column _surname">Abdulhəmidova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Fuad</div>
                                                <div class="st_column _surname">Həşimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Nuray</div>
                                                <div class="st_column _surname">Quliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Röyal</div>
                                                <div class="st_column _surname">Rzayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">İbiş</div>
                                                <div class="st_column _surname">İbişzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">25</div>
                                                <div class="st_column _name">Elmar</div>
                                                <div class="st_column _surname">Qasımov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">26</div>
                                                <div class="st_column _name">Anar</div>
                                                <div class="st_column _surname">Rzayev</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="9a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="9">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Bilal</div>
                                                <div class="st_column _surname">İsmayılzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Azadə</div>
                                                <div class="st_column _surname">Vəlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Mələknaz</div>
                                                <div class="st_column _surname">Mehtiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Aysu</div>
                                                <div class="st_column _surname">Abbasova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Nadirə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Şükürlü</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Bəsti</div>
                                                <div class="st_column _surname">Səfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Qasımova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Yaqubova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Namazlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Səbinə</div>
                                                <div class="st_column _surname">Orucova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Qədirzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Ünbül</div>
                                                <div class="st_column _surname">Seyidzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Ruqiyyə</div>
                                                <div class="st_column _surname">Həsənli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Aygül</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="10a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="10">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Elgün</div>
                                                <div class="st_column _surname">Həsənov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Qərib</div>
                                                <div class="st_column _surname">Əşrəfov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Nəcəfova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Bağırova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Əcəb</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">İradə</div>
                                                <div class="st_column _surname">Camalova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Rəsul</div>
                                                <div class="st_column _surname">Abbasov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Ayxan</div>
                                                <div class="st_column _surname">Həsənov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">İsa</div>
                                                <div class="st_column _surname">İsmailov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Nəzrin</div>
                                                <div class="st_column _surname">Yusibzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Nuray</div>
                                                <div class="st_column _surname">Rəhimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Elnur</div>
                                                <div class="st_column _surname">Xudiyev</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="11a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="11">
                                        <header class="st_table_header">
                                            <!-- <h2>CSS3 *~'</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Ülvi</div>
                                                <div class="st_column _surname">Ağayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Səidə</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Sevinc</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Əminə</div>
                                                <div class="st_column _surname">Mədətova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Yusifzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Rəsulova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Emil</div>
                                                <div class="st_column _surname">Ələsgərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Orxan</div>
                                                <div class="st_column _surname">Nəcəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Kamran</div>
                                                <div class="st_column _surname">Məmmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Ülkər</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Qaçay</div>
                                                <div class="st_column _surname">Novruzzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Simarə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal3" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP Payız 2021</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab3">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#12a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#13a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#14a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#15a" data-toggle="tab">LP</a>
                                </li>
                                <!-- <li><a href="#6a" data-toggle="tab">CE</a>
                            </li> -->
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="12a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="7">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Sücaət</div>
                                                <div class="st_column _surname">Qurbanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Səidə</div>
                                                <div class="st_column _surname">Hümbətəliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Ağayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Əfsanə</div>
                                                <div class="st_column _surname">Əsgərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Zaman</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Cabbarova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Lena</div>
                                                <div class="st_column _surname">Paşayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Səmra</div>
                                                <div class="st_column _surname">Abdurrəhmanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Turqay</div>
                                                <div class="st_column _surname">Məmmədov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Əliməmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Səlimə</div>
                                                <div class="st_column _surname">Şıxlarova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Ülvi</div>
                                                <div class="st_column _surname">Soltanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Həsən</div>
                                                <div class="st_column _surname">Tağıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Murad</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Şahrux</div>
                                                <div class="st_column _surname">İsgəndərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Həbibov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Tağıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Sabir</div>
                                                <div class="st_column _surname">Səlmanzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Müzəffər</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Röyal</div>
                                                <div class="st_column _surname">Abdullazadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Səmra</div>
                                                <div class="st_column _surname">Ağayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Vüsal</div>
                                                <div class="st_column _surname">Durmuşov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="13a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="8">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Vüqanə</div>
                                                <div class="st_column _surname">Nurəliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Rəna</div>
                                                <div class="st_column _surname">Soltanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Nuran</div>
                                                <div class="st_column _surname">Pənahova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Cavidan</div>
                                                <div class="st_column _surname">Əyyubzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Əvəz</div>
                                                <div class="st_column _surname">Yusibov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Bahar</div>
                                                <div class="st_column _surname">Haqverdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Zeynəb</div>
                                                <div class="st_column _surname">Muradlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">İnal</div>
                                                <div class="st_column _surname">Qənbərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Fuad</div>
                                                <div class="st_column _surname">Rəsulov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Ləman</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Alxanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Aynurə</div>
                                                <div class="st_column _surname">İmanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Cəvahir</div>
                                                <div class="st_column _surname">Babanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Şeyxəli</div>
                                                <div class="st_column _surname">Şəliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Şəkər</div>
                                                <div class="st_column _surname">Allahverdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Elnarə</div>
                                                <div class="st_column _surname">Sultanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Ülvi</div>
                                                <div class="st_column _surname">Rəhimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Lamiyə</div>
                                                <div class="st_column _surname">Feyzullayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Rövşən</div>
                                                <div class="st_column _surname">Xuduyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Dəniz</div>
                                                <div class="st_column _surname">Ağaşirinov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="14a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="9">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Kamran</div>
                                                <div class="st_column _surname">Məmmədzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Afaq</div>
                                                <div class="st_column _surname">Nəzərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Turanə</div>
                                                <div class="st_column _surname">Həsənli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Səma</div>
                                                <div class="st_column _surname">İsparova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Yusifova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aysu</div>
                                                <div class="st_column _surname">Musazadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Hüseynzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Paşazadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Heydərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Selcan</div>
                                                <div class="st_column _surname">Əlibəyova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Vüsalə</div>
                                                <div class="st_column _surname">Qafarlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Səma</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Afaq</div>
                                                <div class="st_column _surname">Nəcəfova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Elmira</div>
                                                <div class="st_column _surname">Hacıyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Babək</div>
                                                <div class="st_column _surname">Məmmədzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Elgün</div>
                                                <div class="st_column _surname">Hətəmli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Çingiz</div>
                                                <div class="st_column _surname">Hüseyinov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Rauf</div>
                                                <div class="st_column _surname">Quliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">Hətəmova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Ülviyyə</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Fəxrəndə</div>
                                                <div class="st_column _surname">Ziyadzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Gülnar</div>
                                                <div class="st_column _surname">Abayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Aypara</div>
                                                <div class="st_column _surname">Zeynallı</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="15a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="10">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Tahirə</div>
                                                <div class="st_column _surname">Sadiqbəyli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Vəsilə</div>
                                                <div class="st_column _surname">Ələkbərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Daşdəmirova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Rüfan</div>
                                                <div class="st_column _surname">Zeynalov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Kamran</div>
                                                <div class="st_column _surname">Kərimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Simarə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Dinarə</div>
                                                <div class="st_column _surname">Abdullayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Alvina</div>
                                                <div class="st_column _surname">Bayramlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Eldar</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Xədicə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Xəyalə</div>
                                                <div class="st_column _surname">Mirzəyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Əzizxan</div>
                                                <div class="st_column _surname">Şahverdiyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Ceyran</div>
                                                <div class="st_column _surname">Bədəlzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Daşdəmirova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Fatimə</div>
                                                <div class="st_column _surname">İsmayılova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Yaqub</div>
                                                <div class="st_column _surname">Əzizov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Zeynəb</div>
                                                <div class="st_column _surname">Nəcəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Güllü</div>
                                                <div class="st_column _surname">Qocayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Rəfiqə</div>
                                                <div class="st_column _surname">Əşrəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Seyfət</div>
                                                <div class="st_column _surname">Ağakişizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Orxan</div>
                                                <div class="st_column _surname">Ələsgərov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal4" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP Yay 2021</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab4">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#16a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#17a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#18a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#19a" data-toggle="tab">LP</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="16a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="7">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Zaur</div>
                                                <div class="st_column _surname">Şərifov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Asif</div>
                                                <div class="st_column _surname">Mustafayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Cabbarlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Şahrza</div>
                                                <div class="st_column _surname">Qəhrəmanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Çinarə</div>
                                                <div class="st_column _surname">Gülhüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Şeyda</div>
                                                <div class="st_column _surname">Sultanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Xəyalə</div>
                                                <div class="st_column _surname">Həziyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Nərgiz</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Hafizə</div>
                                                <div class="st_column _surname">Valehzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Rəfiqə</div>
                                                <div class="st_column _surname">Nəzərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Zərqələm</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Arzu</div>
                                                <div class="st_column _surname">Teymurova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Abuzər</div>
                                                <div class="st_column _surname">Kərimzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Nihad</div>
                                                <div class="st_column _surname">Qurbanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Nəzər</div>
                                                <div class="st_column _surname">Nəzərəliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Nuray</div>
                                                <div class="st_column _surname">Dəmirçiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Şəfa</div>
                                                <div class="st_column _surname">Şahgərdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Kənan</div>
                                                <div class="st_column _surname">Salahov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Lamiyə</div>
                                                <div class="st_column _surname">Yusifova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Vəsilə</div>
                                                <div class="st_column _surname">Mahmudlu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="17a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="8">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Elya</div>
                                                <div class="st_column _surname">Musayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Asya</div>
                                                <div class="st_column _surname">Əsədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Şəbnəm</div>
                                                <div class="st_column _surname">İsazadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Ülkər</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Gülnur</div>
                                                <div class="st_column _surname">İmanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Həbibə</div>
                                                <div class="st_column _surname">Həmidova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Sevda</div>
                                                <div class="st_column _surname">Atayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Səbinə</div>
                                                <div class="st_column _surname">Güləhmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Sevil</div>
                                                <div class="st_column _surname">Şərifova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Zeynəb</div>
                                                <div class="st_column _surname">Cəfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Emil</div>
                                                <div class="st_column _surname">Ələkbərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Həmidə</div>
                                                <div class="st_column _surname">Hacıyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Orxan</div>
                                                <div class="st_column _surname">Ələsgərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Fuad</div>
                                                <div class="st_column _surname">Quliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Türkanə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Elşad</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Qəmər</div>
                                                <div class="st_column _surname">Əkbərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Akif</div>
                                                <div class="st_column _surname">Qurbanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Kamil</div>
                                                <div class="st_column _surname">Lətifov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Elmira</div>
                                                <div class="st_column _surname">Babayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Hafiz</div>
                                                <div class="st_column _surname">Mahmudov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Telman</div>
                                                <div class="st_column _surname">Qasımov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Kənan</div>
                                                <div class="st_column _surname">Zeynallı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Səmədzadə</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="18a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="9">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Gülay</div>
                                                <div class="st_column _surname">Fərruxlu</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Leyla</div>
                                                <div class="st_column _surname">Cəbiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Elgün</div>
                                                <div class="st_column _surname">Saniyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Nilufər</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Türkan</div>
                                                <div class="st_column _surname">Rəhimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Hacıyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Hümarə</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Leyla</div>
                                                <div class="st_column _surname">Mahmudova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Mehin</div>
                                                <div class="st_column _surname">Babayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Vəciyyə</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Sevin</div>
                                                <div class="st_column _surname">Bayramova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Nəzrin</div>
                                                <div class="st_column _surname">Kərimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Sonaxanım</div>
                                                <div class="st_column _surname">Qasımova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Arzu</div>
                                                <div class="st_column _surname">Salimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Gülər</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Həsən</div>
                                                <div class="st_column _surname">Əskərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Heydər</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="19a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="10">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Aysun</div>
                                                <div class="st_column _surname">Mikayılova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Hüriyyət</div>
                                                <div class="st_column _surname">Şahmuradova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Rüfət</div>
                                                <div class="st_column _surname">İslamzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">İlyas</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Zenfira</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Səmayə</div>
                                                <div class="st_column _surname">Hümbətəliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Aişə</div>
                                                <div class="st_column _surname">Fərmanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Sevin</div>
                                                <div class="st_column _surname">Şabanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Kamil</div>
                                                <div class="st_column _surname">Paşabəyli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Şəhriyar</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Qurban</div>
                                                <div class="st_column _surname">Hacıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Anar</div>
                                                <div class="st_column _surname">Kərimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Asim</div>
                                                <div class="st_column _surname">Baxışlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Rzayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Tahirli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal5" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP Yay 2021</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab5">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#20a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#21a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#22a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#23a" data-toggle="tab">LP</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="20a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="7">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Ağakişiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Fərhad</div>
                                                <div class="st_column _surname">Əmrah</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Kənan</div>
                                                <div class="st_column _surname">Əhmədli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Məhəmməd</div>
                                                <div class="st_column _surname">Nəbiyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Zivər</div>
                                                <div class="st_column _surname">Haqverdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Abuzar</div>
                                                <div class="st_column _surname">Kərimzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Jalə</div>
                                                <div class="st_column _surname">Bağırova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Günel</div>
                                                <div class="st_column _surname">Kişiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Rəşad</div>
                                                <div class="st_column _surname">Əzimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Rəmziyyə</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Babayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Qönçə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Hüseyn</div>
                                                <div class="st_column _surname">Mirzəyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Ömər</div>
                                                <div class="st_column _surname">Şükürov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Kənan</div>
                                                <div class="st_column _surname">Ağalızadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Olya</div>
                                                <div class="st_column _surname">Verdizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Əsədullah</div>
                                                <div class="st_column _surname">Camalov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Murad</div>
                                                <div class="st_column _surname">Abbaszadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Malik</div>
                                                <div class="st_column _surname">Nuriyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Əlizaman</div>
                                                <div class="st_column _surname">Həbibli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Vahab</div>
                                                <div class="st_column _surname">Cəbrayılov</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="21a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="8">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">İsgəndərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Cavanşir</div>
                                                <div class="st_column _surname">Ənnağıyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Elmir</div>
                                                <div class="st_column _surname">Mahmudzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">İsrafil</div>
                                                <div class="st_column _surname">Baxşızadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Şəfəq</div>
                                                <div class="st_column _surname">Süleymanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Salatin</div>
                                                <div class="st_column _surname">Qəribova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Süleymanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Sadiq</div>
                                                <div class="st_column _surname">Hüseynov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Fəqan</div>
                                                <div class="st_column _surname">Məmmədov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Aytən</div>
                                                <div class="st_column _surname">Qurbanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Xanım</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">İkram</div>
                                                <div class="st_column _surname">Hüseynli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Quliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Əkbər</div>
                                                <div class="st_column _surname">Məmmədov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Eldəniz</div>
                                                <div class="st_column _surname">Mustafayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Zaur</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Sahil</div>
                                                <div class="st_column _surname">Zəkəryəyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Əfsanə</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Nərgiz</div>
                                                <div class="st_column _surname">Talıbova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Fərid</div>
                                                <div class="st_column _surname">Səfərli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="22a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="9">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Aybəniz</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Elnarə</div>
                                                <div class="st_column _surname">Veyisova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Nuray</div>
                                                <div class="st_column _surname">Allahverdiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Sumanə</div>
                                                <div class="st_column _surname">Həşimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Gülhanə</div>
                                                <div class="st_column _surname">Nəcəfli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Minayə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Turqay</div>
                                                <div class="st_column _surname">İsgəndərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Həsən</div>
                                                <div class="st_column _surname">Ərrəhmanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Mahirə</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Əli</div>
                                                <div class="st_column _surname">Səlimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Elmira</div>
                                                <div class="st_column _surname">Qardaşbəyova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Şəlalə</div>
                                                <div class="st_column _surname">Nəzəroova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Səbinə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Səma</div>
                                                <div class="st_column _surname">Ağaməmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Zəhra</div>
                                                <div class="st_column _surname">Quliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Yaqubova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Könül</div>
                                                <div class="st_column _surname">Qulamova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Allahberdi</div>
                                                <div class="st_column _surname">Hüseynzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Gülnar</div>
                                                <div class="st_column _surname">Xasməmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Qədir</div>
                                                <div class="st_column _surname">Nağıyev</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="23a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="10">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Məhəmməd</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Səidə</div>
                                                <div class="st_column _surname">Məmmədova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Ümid</div>
                                                <div class="st_column _surname">Heybətov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Cavid</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Zöhrə</div>
                                                <div class="st_column _surname">Yusifli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Xanım</div>
                                                <div class="st_column _surname">İsmayılzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Sadiq</div>
                                                <div class="st_column _surname">Hüseynzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Murad</div>
                                                <div class="st_column _surname">İsgəndərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Anar</div>
                                                <div class="st_column _surname">Süleymanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Mirməhəmməd</div>
                                                <div class="st_column _surname">Qasımzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Şəbnəm</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="myModal6" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">VTP 2020</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <!-- <p>Some text in the modal.</p> -->
                    <main class="st_viewport">
                        <div id="exTab6">
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a href="#24a" data-toggle="tab">IT Web</a>
                                </li>
                                <li><a href="#25a" data-toggle="tab">ACC</a>
                                </li>
                                <li><a href="#26a" data-toggle="tab">HR</a>
                                </li>
                                <li><a href="#27a" data-toggle="tab">LP</a>
                                </li>
                            </ul>

                            <div class="tab-content clearfix">
                                <div class="tab-pane active" id="24a">
                                    <!-- <h3>Content's background color is the same for the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="7">
                                        <header class="st_table_header">
                                            <!-- <h2>İnformasiya Texnologiyaları</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Tərlan</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">İnci</div>
                                                <div class="st_column _surname">Məmmədzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Ağalarov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Erkin</div>
                                                <div class="st_column _surname">Qarayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Ülviyyə</div>
                                                <div class="st_column _surname">Qardaşova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Abbasova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Aydan</div>
                                                <div class="st_column _surname">Atakişiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Səkinə</div>
                                                <div class="st_column _surname">Quliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">Məhərrəmli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Nərmin</div>
                                                <div class="st_column _surname">Rüstəmli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Orxan</div>
                                                <div class="st_column _surname">Tahirov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Elmar</div>
                                                <div class="st_column _surname">Kərimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Könül</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Oruc</div>
                                                <div class="st_column _surname">İsmayılov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Rağib</div>
                                                <div class="st_column _surname">İsgəndərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Elvin</div>
                                                <div class="st_column _surname">Qurbanov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Samir</div>
                                                <div class="st_column _surname">Əliyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Tariyel</div>
                                                <div class="st_column _surname">Mənsimov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Sübhan</div>
                                                <div class="st_column _surname">Tanrıverdiyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Fatimə</div>
                                                <div class="st_column _surname">Ağasiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Aytac</div>
                                                <div class="st_column _surname">Atakişiyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Elnur</div>
                                                <div class="st_column _surname">Cəfərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Fərid</div>
                                                <div class="st_column _surname">Cəfərov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">Elşən</div>
                                                <div class="st_column _surname">Musayev</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="25a">
                                    <!-- <h3>We use the class nav-pills instead of nav-tabs which automatically creates a background color for
                                    the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="8">
                                        <header class="st_table_header">
                                            <!-- <h2>Holy shit :@</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Elcan</div>
                                                <div class="st_column _surname">Durmuşov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Ülkər</div>
                                                <div class="st_column _surname">Quluzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Aygün</div>
                                                <div class="st_column _surname">Rəsulova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Naidə</div>
                                                <div class="st_column _surname">Sadıqova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Zəhra</div>
                                                <div class="st_column _surname">Sadıqova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Yusif</div>
                                                <div class="st_column _surname">Abasəlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Həsənadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Aynurə</div>
                                                <div class="st_column _surname">Məmmədzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Cəfərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Aytən</div>
                                                <div class="st_column _surname">Cəfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Rüfanə</div>
                                                <div class="st_column _surname">Ələmzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Nicat</div>
                                                <div class="st_column _surname">Məmmədov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Yaşar</div>
                                                <div class="st_column _surname">Nəsirli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Cavad</div>
                                                <div class="st_column _surname">Musafayev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Anar</div>
                                                <div class="st_column _surname">Həşimli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Rəhim</div>
                                                <div class="st_column _surname">Abdinov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Samir</div>
                                                <div class="st_column _surname">Əzizli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Sənubər</div>
                                                <div class="st_column _surname">Cəfərzadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Təzəgül</div>
                                                <div class="st_column _surname">Xanaliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Aynur</div>
                                                <div class="st_column _surname">Cabbarbəyli</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="26a">
                                    <!-- <h3>We applied clearfix to the tab-content to rid of the gap between the tab and the content</h3> -->
                                    <div class="st_wrap_table" data-table_id="9">
                                        <header class="st_table_header">
                                            <!-- <h2>Isn't that nice</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Nigar</div>
                                                <div class="st_column _surname">Abdullayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">İsmayılova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Fidan</div>
                                                <div class="st_column _surname">Sadıqova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Aftab</div>
                                                <div class="st_column _surname">Kələntərli</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">5</div>
                                                <div class="st_column _name">Minayə</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">6</div>
                                                <div class="st_column _name">Nəzrin</div>
                                                <div class="st_column _surname">Baxışlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">7</div>
                                                <div class="st_column _name">Əsmər</div>
                                                <div class="st_column _surname">Həziyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">8</div>
                                                <div class="st_column _name">Günay</div>
                                                <div class="st_column _surname">Almazova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">9</div>
                                                <div class="st_column _name">Gülçin</div>
                                                <div class="st_column _surname">Hüseynova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">10</div>
                                                <div class="st_column _name">Bahar</div>
                                                <div class="st_column _surname">Ağayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">11</div>
                                                <div class="st_column _name">Əfsanə</div>
                                                <div class="st_column _surname">Abbaszadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">12</div>
                                                <div class="st_column _name">Tamerlan</div>
                                                <div class="st_column _surname">Həsənova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">13</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Əlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">14</div>
                                                <div class="st_column _name">Nilgün</div>
                                                <div class="st_column _surname">Şahinqızı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">15</div>
                                                <div class="st_column _name">Gövhər</div>
                                                <div class="st_column _surname">Ağayeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">16</div>
                                                <div class="st_column _name">Bənzər</div>
                                                <div class="st_column _surname">Əliyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">17</div>
                                                <div class="st_column _name">Tamaşa</div>
                                                <div class="st_column _surname">Əsgərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">18</div>
                                                <div class="st_column _name">Həmidə</div>
                                                <div class="st_column _surname">Əzizova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">19</div>
                                                <div class="st_column _name">Lalə</div>
                                                <div class="st_column _surname">Aslanova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">20</div>
                                                <div class="st_column _name">Çinarə</div>
                                                <div class="st_column _surname">Mirzəyeva</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">21</div>
                                                <div class="st_column _name">Natiq</div>
                                                <div class="st_column _surname">İbrahimova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">22</div>
                                                <div class="st_column _name">Nəcməddin</div>
                                                <div class="st_column _surname">Gəncəyev</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">23</div>
                                                <div class="st_column _name">Tərlan</div>
                                                <div class="st_column _surname">Osmanlı</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">24</div>
                                                <div class="st_column _name">Zəhra</div>
                                                <div class="st_column _surname">Vəlizadə</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">25</div>
                                                <div class="st_column _name">Aysel</div>
                                                <div class="st_column _surname">Cəfərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">26</div>
                                                <div class="st_column _name">Cəmilə</div>
                                                <div class="st_column _surname">Soltanlı</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="27a">
                                    <!-- <h3>We use css to change the background color of the content to be equal to the tab</h3> -->
                                    <div class="st_wrap_table" data-table_id="10">
                                        <header class="st_table_header">
                                            <!-- <h2>Native STICKY</h2> -->
                                            <div class="st_row">
                                                <div class="st_column _rank">№</div>
                                                <div class="st_column _name">Ad</div>
                                                <div class="st_column _surname">Soyad</div>
                                            </div>
                                        </header>
                                        <div class="st_table">
                                            <div class="st_row">
                                                <div class="st_column _rank">1</div>
                                                <div class="st_column _name">Elmar</div>
                                                <div class="st_column _surname">Xəlilov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">2</div>
                                                <div class="st_column _name">Aidə</div>
                                                <div class="st_column _surname">İsgəndərova</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">3</div>
                                                <div class="st_column _name">Yusif</div>
                                                <div class="st_column _surname">Abasov</div>
                                            </div>
                                            <div class="st_row">
                                                <div class="st_column _rank">4</div>
                                                <div class="st_column _name">Aynur</div>
                                                <div class="st_column _surname">Eyubova</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </main>
                </div>
            </div>
        </div>
    </div>
    <!-- javascript -->

    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/tilt/tilt.jquery.min.js"></script>
    <script src="js/scrollspy.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <!-- Counter js -->
    <script src="js/counter.int.js"></script>
    <!-- carousel -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- Main Js -->
    <script src="js/app.js"></script>

    <script>
        function myFunction1() {
            var x = document.getElementById("desktop-drop");
            var y = document.getElementById("dropdown-arrow-d");
            var ignoreClickOnMeElement = document.getElementById('desktop-drop');
            var isClickInsideElement = ignoreClickOnMeElement.contains(event.target);
            if (x.style.display === "none") {
                $("#desktop-drop").slideDown();
                y.classList.remove("fa-caret-down")
                y.classList.add("fa-caret-up")
                x.style.display = 'block'
            } else if (x.style.display == "block") {
                $("#desktop-drop").slideUp();
                y.classList.remove("fa-caret-up")
                y.classList.add("fa-caret-down")
            }
        }

        $(document).on('click', function (event) {
            var y = document.getElementById("dropdown-arrow-d");
            if ($(event.target).closest('#desktop-drop').length) {
                $("#desktop-drop").slideDown();;
                y.classList.remove("fa-caret-down")
                y.classList.add("fa-caret-up")
            } else {
                $("#desktop-drop").slideUp();
                y.classList.remove("fa-caret-up")
                y.classList.add("fa-caret-down")
            }
        })

        function myFunction() {
            var x = document.getElementById("mobil-drop");
            var y = document.getElementById("dropdown-arrow-m");
            if (x.style.display === "none") {
                $("#mobil-drop").slideDown();
                y.classList.remove("fa-caret-down")
                y.classList.add("fa-caret-up")
            } else {
                $("#mobil-drop").slideUp();
                y.classList.remove("fa-caret-up")
                y.classList.add("fa-caret-down")
            }
        }

        $(".showMenu").click(function (e) {
            $(".vtp_menu").toggle(400);
        })
    </script>

    <script>
        $(document).ready(function () {
            $("#testimonial-slider").owlCarousel({
                items: 2,
                itemsDesktop: [1000, 2],
                itemsDesktopSmall: [979, 2],
                itemsTablet: [768, 1],
                pagination: false,
                navigation: true,
                navigationText: ["", ""]
                autoPlay: false
            });
        });
    </script>
    <script>
        $(".js-tilt").tilt({
            scale: 1.1,
        });
    </script>

    <script src="js/main.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.5/jquery.inputmask.min.js"
        integrity="sha512-sR3EKGp4SG8zs7B0MEUxDeq8rw9wsuGVYNfbbO/GLCJ59LBE4baEfQBVsP2Y/h2n8M19YV1mujFANO1yA3ko7Q=="
        crossorigin="anonymous"></script>
    <script>
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                $('#baslik_h5').css('color', '#3f4195').show(400);
                $('.menu_add').css('color', '#3f4195');
            } else {
                $('#baslik_h5').css('color', '#fff').hide(400);
                $('.menu_add').css('color', 'white');
            }
        });
    </script>

</body>

</html>