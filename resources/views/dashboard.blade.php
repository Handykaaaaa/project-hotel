<x-app-layout>
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Hotel Citra Megah</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <!-- Add icon logo -->
        <link rel="icon" href="img/rayalpark.png" />

        <!-- Add necessary file and cdn -->
        <link rel="stylesheet" href="style/stylesheet.css" />
        <link rel="stylesheet" href="style/responsive.css" />
        <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined"
        />
        <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"
        />
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.1.3/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
        <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    </head>

        <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
        <script
        src="https://kit.fontawesome.com/18cbcebdd2.js"
        crossorigin="anonymous"
        ></script>
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script src="script.js"></script>
        <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@500&display=swap");
            * {
            box-sizing: border-box;
            scroll-behavior: smooth;
            image-rendering: optimizeSpeed;
            }

            body {
            font-family: "Poppins", sans-serif;
            margin: 0px;
            }

            a {
            font-size: 0.8rem;
            text-decoration: none;
            color: black;
            display: inline-block;
            text-align: right;
            }

            p {
            font-size: 0.8rem;
            font-style: normal;
            color: rgba(60, 60, 60, 0.8);
            }

            h1 {
            font-size: 2rem;
            margin: 0;
            line-height: 70px;
            }

            h2 {
            font-size: 2.3rem;
            }

            h2::after {
            content: "";
            display: block;
            width: 30%;
            border-top: 2.5px solid #1a6b54;
            margin-top: 20px;
            margin: 0 auto;
            }

            h3::after {
            content: "";
            display: block;
            text-align: center;
            width: 30%;
            border-top: 2.5px solid #1a6b54;
            margin-top: 20px;
            margin: 0 auto;
            }

            h5 {
            margin: 15px 0;
            }

            .main-section {
            color: #fff;
            position: relative;
            }

            .logo {
            padding: 0 40px 0 10px;
            }

            .logo a {
            font-weight: bold;
            font-size: 1rem;
            color: #1a6b54;
            }

            .left-navbar {
            display: flex;
            }

            .navbar {
            display: flex;
            background-color: #fff;
            position: absolute;
            top: 50px;
            left: 15%;
            right: 15%;
            padding: 20px;
            border-radius: 5px;
            justify-content: space-between;
            position: fixed;
            z-index: 20;
            box-shadow: 0 1px 10px rgba(0, 0, 0, 0.07), 0 2px 10px rgba(0, 0, 0, 0.07),
                0 3px 10px rgba(0, 0, 0, 0.07);
            }

            .navbar-option a {
            margin: 0 10px;
            }

            .navbar-option a:hover {
            border-bottom: 1px solid #1a6b54;
            transition: 0.5s all;
            }

            .right-navbar a {
            margin: 0 10px;
            padding-top: 2px;
            font-weight: bold;
            font-size: 0.9rem;
            color: #1a6b54;
            }

            .right-navbar a:hover {
            color: #0c382c;
            }

            .navbar .hamburger {
            display: none;
            }

            .container-main {
            width: 60%;
            margin: 0 0 0 200px;
            padding-top: 190px;
            }

            .container-main p {
            color: #fff;
            }

            .main-contents {
            display: flex;
            height: 700px;
            }

            .main-text {
            height: 100%;
            width: 50%;
            background-color: #1a6b54;
            }

            .hero-image {
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            }

            .hotel-card {
            background-color: #fff;
            border-radius: 0.5rem;
            box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
            overflow: hidden;
            }

            .hotel-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            }

            .hotel-card-content {
            padding: 1.5rem;
            }

            .hotel-card-content h3 {
            font-size: 1.25rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            }

            .hotel-card-content p {
            color: #6b7280;
            margin-bottom: 1rem;
            }

            .hotel-card-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 1.5rem;
            border-top: 1px solid #e5e7eb;
            }

            .hotel-card-footer p {
            font-weight: 600;
            color: #1f2937;
            }

            .hotel-card-footer a {
            background-color: #3b82f6;
            color: #fff;
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            transition: background-color 0.3s ease;
            }

            .hotel-card-footer a:hover {
            background-color: #2563eb;
            }

            /* Booking Summary */
            .booking-summary {
                margin: 2rem auto;
                padding: 1rem;
                background-color: #fff;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .popular-title {
                text-align: center;
                font-size: 1.5rem;
                color: #333;
            }

            .card-container {
                width: 90%;
                margin: 0 auto;
            }

            .carousel-inner .carousel-item {
                display: flex;
                justify-content: center;
                align-items: center;
            }

            .card {
                margin: 1rem;
                border: none;
                border-radius: 10px;
                overflow: hidden;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
                transition: transform 0.3s;
            }

            .card:hover {
                transform: scale(1.05);
            }

            .card img {
                width: 100%;
                height: auto;
                border-bottom: 1px solid #ddd;
            }

            .card-details {
                padding: 1rem;
                text-align: center;
            }

            .card-details h4 {
                margin-bottom: 0.5rem;
                font-size: 1.2rem;
                color: #333;
            }

            .card-details p {
                margin-bottom: 1rem;
                color: #777;
            }

            .icon-group {
                display: flex;
                justify-content: center;
                gap: 10px;
                color: #666;
            }

            .carousel-control-prev, .carousel-control-next {
                width: 5%;
            }

            .carousel-control-prev-icon, .carousel-control-next-icon {
                background-color: rgba(0,0,0,0.5);
                border-radius: 50%;
            }

            .about-section {
            padding-top: 120px;
            }

            .about-contents {
            display: flex;
            }

            .image-about {
            width: 50%;
            margin-right: 30px;
            }

            .box-about {
            width: 50%;
            margin-left: 30px;
            }

            .box-contents {
            width: 85%;
            }

            .box-contents h2 {
            margin: 0;
            }

            .box-contents h2::after {
            content: "";
            width: 30%;
            border-top: none;
            }

            .image-about img {
            width: 100%;
            border-radius: 7px;
            }

            .icon-container {
                display: flex;
                justify-content: space-around;
                align-items: center;
                padding: 20px;
                background-color: #f8f8f8;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .icon-item {
                display: flex;
                flex-direction: column;
                align-items: center;
                text-align: center;
                margin: 10px;
            }

            .icon-item i {
                font-size: 2.5rem;
                color: #333;
                margin-bottom: 10px;
                transition: color 0.3s;
            }

            .icon-item p {
                font-size: 1rem;
                color: #666;
            }

            .icon-item:hover i {
                color: #007bff;
            }

            .continue-button a {
            padding: 13px 18px;
            background-color: #000000;
            border-radius: 4px;
            color: #fff;
            }

            .continue-button a:hover {
            background-color: #0c382c;
            transition: 0.5s all;
            }

            .plan-content h2::after {
            width: 0;
            }

            .plan-content h4::after {
            content: "";
            display: block;
            text-align: center;
            width: 30%;
            border-top: 2px solid #1a6b54;
            margin-top: 20px;
            margin: 0 auto;
            }

            .our-services {
            position: relative;
            padding: 175px 0;
            background: url('why/15_9b20e4de.jpg') no-repeat center center/cover; /* URL gambar background */
            color: #fff;
            }

            .container {
            position: relative;
            z-index: 2;
            }

            .services-contents {
            display: flex;
            justify-content: space-between;
            align-items: center;
            }

            .box-description {
            flex: 4;
            margin-bottom: 2px;
            text-align: center;
            }

            .box-description h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            }

            .box-description p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            }

            .services-section {
            margin-top: 20px;
            }

            .services {
            display: flex;
            flex-wrap: wrap;
            }

            .services-icon {
            flex: 1;
            min-width: 200px;
            margin: 10px;
            text-align: center;
            background-color: rgba(255, 255, 255, 0.7); /* Warna latar belakang transparan */
            border-radius: 10px; /* Mengatur radius sudut untuk membuat kartu */
            padding: 20px; /* Memberikan ruang di dalam kartu */
            }

            .services-icon h4 {
            font-size: 1.2rem;
            margin-top: 10px;
            }

            .services-icon span {
            font-size: 2rem;
            display: block;
            margin-bottom: 10px;
            }

            .services-icon .orange {
            color: orange;
            }

            .services-icon .blue {
            color: blue;
            }

            .services-icon .green {
            color: green;
            }

            .services-icon .purple {
            color: purple;
            }

            .image-services {
            flex: 1;
            margin-left: 20px;
            }

            .image-services img {
            width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .our-services::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Overlay hitam transparan */
            z-index: 1;
            }

            .best-plans {
            margin: 0 auto;
            padding-top: 20px;
            padding-bottom: 60px;
            }

            .plan-contents {
            display: flex;
            }

            .plan-content {
            margin-bottom: 35px;
            }

            .plan-content h2 {
            font-size: x-large;
            }

            .price span {
            font-size: 1.5rem;
            font-weight: 900;
            color: rgb(59, 59, 59);
            }

            .plan-card {
            width: 33.3%;
            text-align: center;
            margin-right: 30px;
            border-radius: 7px;
            box-shadow: 0 1px 2px rgba(0, 0, 0, 0.07), 0 2px 3px rgba(0, 0, 0, 0.07),
                0 3px 6px rgba(0, 0, 0, 0.07);
            }

            .plan-card:hover {
            background-color: #e6f7f2;
            box-shadow: none;
            transition: 1s all;
            }

            .plan-card img {
            width: 100%;
            border-radius: 7px;
            }

            .select-package {
            padding-top: 30px;
            }

            .select-package a {
            padding: 14px 24px;
            border: 1px solid rgba(60, 60, 60, 0.2);
            border-radius: 7px;
            font-size: 0.8rem;
            color: #31b077;
            }

            .select-package a:hover {
            background-color: #1a6b54;
            color: #fff;
            transition: 0.5s all;
            }

            .hotel-service {
            padding: 50px 0;
            background-color: #f9f9f9;
            }

            .container {
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            }

            .card-container {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin-top: 30px;
            }

            .card {
            width: 300px;
            margin: 20px;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            }

            .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 10px 10px 0 0;
            }

            .card-content {
            padding: 20px;
            }

            .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            }

            .card-content p {
            font-size: 1rem;
            color: #666;
            }


            /* .featured {
            padding: 50px 0;
            }

            .container {
            max-width: 1200px;
            margin: 0 auto;
            display: flex;
            justify-content: space-between;
            }

            .featured-images {
            width: 40%;
            }

            .featured-image {
            margin-bottom: 20px;
            }

            .featured-image img {
            width: 100%;
            border-radius: 10px;
            }

            .featured-cards {
            width: 50%;
            }

            .card {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            }

            .card-content {
            padding: 20px;
            }

            .card-content h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
            }

            .card-content p {
            font-size: 1rem;
            color: #666;
            } */


            .blog-container {
            max-width: 450px;
            margin: 0 auto;
            }

            .blog-and-news {
            margin: 0 auto;
            padding-top: 30px;
            padding-bottom: 50px;
            }

            .blog-contents {
            display: flex;
            }

            .heading-blog {
            text-align: center;
            padding-bottom: 25px;
            }

            .heading-blog h2 {
            margin-bottom: -2px;
            }

            .blog {
            width: 50%;
            margin-right: 30px;
            }

            .second {
            margin-right: 0px;
            }

            .fa-calendar {
            color: #805824;
            }

            .fa-user {
            color: #284f99;
            }

            .blog-author span {
            background-color: rgba(40, 80, 153, 0.1);
            border-radius: 100px;
            padding: 20px;
            }

            .blog img {
            margin-bottom: 20px;
            }

            .rounded {
            margin-right: 15px;
            }

            .blog-info {
            display: flex;
            }

            .time-posted {
            display: flex;
            flex-direction: row;
            }

            .blog-author {
            display: flex;
            flex-direction: row;
            padding-left: 100px;
            }

            .time-posted h4 {
            margin-top: 16px;
            font-weight: normal;
            }

            .blog-author h4 {
            margin-top: 16px;
            font-weight: normal;
            }

            .blog-content h4 {
            font-size: 1.3rem;
            width: 85%;
            }

            .blog-content p {
            width: 80%;
            }

            .time-posted span {
            background-color: rgba(128, 88, 36, 0.1);
            border-radius: 100px;
            padding: 20px;
            }

            .blog img {
            width: 100%;
            border-radius: 10px;
            }

            .section-title {
            font-style: italic;
            text-align: center;
            font-size: 1.5rem;
            padding-bottom: 20px;
            }

            .footer {
                background-color: #162034;
                padding-top: 2rem;
                padding-bottom: 2rem;
            }

            .name-hotel h1 {
                color: white;
                font-family: "Parisienne", cursive;
                font-weight: bolder;
                font-size: 28px;
            }

            .name-hotel p {
                font-weight: 500;
                font-size: 14px;
                line-height: 21px;
                color: #c7d2e8;
                width: 299px;
            }
            .name-hotel span {
                font-weight: 400;
                font-size: 14px;
                line-height: 21px;
                color: #c7d2e8;
                width: 299px;
            }
            .social-media h3 {
                font-weight: 500;
                font-size: 14px;
                line-height: 21px;
                color: #c7d2e8;
            }
            .navigation h3 {
                font-weight: 500;
                font-size: 20px;
                line-height: 30px;
                color: #c7d2e8;
            }

            .menu a {
                text-decoration: none;
                font-weight: 400;
                font-size: 14px;
                line-height: 21px;
                color: #c1cbdd;
                padding-top: 8px;
            }
            .recent-post h3 {
                font-weight: 500;
                font-size: 20px;
                line-height: 30px;
                color: #c7d2e8;
            }
            .title-contact-us {
                font-weight: 500;
                font-size: 300px;
            }
            .content-recent-post p {
                color: #d2d9e8;
                width: 157px;
            }
            .content-recent-post img {
                width: 52px;
                height: 52px;
            }
            .content-recent-post p {
                font-family: Poppins;
                font-size: 12px;
                font-weight: 500;
                line-height: 16.6px;
                text-align: left;
            }

            .title-contact-us {
                font-weight: 500;
                font-size: 20px;
                line-height: 30px;
                color: #c7d2e8;
            }

            .contact-us h4 {
                font-weight: 400;
                font-size: 14px;
                line-height: 21px;
                color: #C1CBDD;
                margin-top: 5px;
            }
            .contact-us h4 {
                width: 269px;
            }

        </style>
    </head>
    <body>
        <!-- Navbar and main section -->
        <div class="main-section" id="main-section">
        <section id="hero-section">
            <div class="slider__container">
            <div class="slide">
                <div class="content">
                <div class="title">
                    <h1>Hotel Citra Megah - Nikmati</h1>
                    <h1>Pengalaman Menginap yang Luar Biasa</h1>
                    <span>Jadikan Liburan Anda Luar Biasa di Hotel Citra Megah, Dapatkan Kenyamanan dan Pelayanan Terbaik</span>
                </div>
                </div>
                <div class="hero-image" style="background-image: url('image/jenis-bed-di-kamar-hotel-jenis-kasur-di-hotel-ukuran-kasur-hotel-tipe-kamar-hotel-tips-memilih-kamar-hotel-kamar-hotel-harga-paling-murah-9cde86371d7fc78c91ae80a6ffab250e-b7e133fcb5f6f974a20cf18b084d.jpg');"></div>
            </div>
            </div>
        </section>       
        </div>

        <div class="booking-summary card-container">
        <h3 class="popular-title" style="margin-top: 0; margin-bottom: 20px;">Kamar Terpopuler</h3>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('rekom/182677983.jpg') }}" alt="Kamar 1">
                                <div class="card-details">
                                    <h4>Suite Eksklusif</h4>
                                    <p>Kamar dengan pemandangan laut yang indah.</p>
                                    <div class="icon-group">
                                        <i class="fas fa-user-friends"></i>
                                        <i class="fas fa-bath"></i>
                                        <i class="fas fa-bed"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('rekom/blog-tipe-kamar-hotel-yang-wajib-diketahui-47-l.jpg') }}" alt="Kamar 3">
                                <div class="card-details">
                                    <h4>Kamar Mewah</h4>
                                    <p>Kamar dengan pemandangan laut yang indah.</p>
                                    <div class="icon-group">
                                        <i class="fas fa-user-friends"></i>
                                        <i class="fas fa-bath"></i>
                                        <i class="fas fa-bed"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('rekom/blog-tipe-kamar-hotel-yang-wajib-diketahui-47-l.jpg') }}" alt="Kamar 3">
                                <div class="card-details">
                                    <h4>Kamar Mewah</h4>
                                    <p>Kamar dengan pemandangan laut yang indah.</p>
                                    <div class="icon-group">
                                        <i class="fas fa-user-friends"></i>
                                        <i class="fas fa-bath"></i>
                                        <i class="fas fa-bed"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="card">
                                <img src="{{ asset('rekom/kamar_20160703_163616.jpg') }}" alt="Kamar Atas">
                                <div class="card-details">
                                    <h4>Kamar Atas</h4>
                                    <p>Kamar dengan pemandangan laut yang indah.</p>
                                    <div class="icon-group">
                                        <i class="fas fa-user-friends"></i>
                                        <i class="fas fa-bath"></i>
                                        <i class="fas fa-bed"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button> --}}
        </div>
    </div>

        <!-- Company description section -->
        <div class="about-section" id="about-section">
        <div class="container">
            <div class="about-contents">
            <div class="image-about" data-aos="fade-up">
                <img src="about/Night_mode_2_Bellagio.jpg" alt="image" />
            </div>
            <div class="box-about" data-aos="fade-down">
                <div class="box-contents">
                <h1>About Us</h1>
                <h2>Selamat Datang di Hotel Citra Megah</h2>
                <p>
                    Kami adalah hotel mewah dengan layanan yang tak tertandingi dan keramahan yang hangat. Dengan lokasi strategis di pusat kota, 
                    kami menawarkan pengalaman menginap yang tak terlupakan bagi para tamu kami.
                    Staf kami yang profesional dan berpengalaman siap membantu Anda menjadikan setiap kunjungan Anda menjadi istimewa.
                </p>
                </div>
                <div class="icon-container">
                <div class="icon-item">
                    <i class="fas fa-glass-martini-alt"></i>
                    <p>Bar</p>
                </div>
                <div class="icon-item">
                    <i class="fas fa-dumbbell"></i>
                    <p>Gym</p>
                </div>
                <div class="icon-item">
                    <i class="fas fa-calendar-alt"></i>
                    <p>Event</p>
                </div>
                </div>
                <div class="continue-button">
                <a href="#">Read More →</a>
                </div>
            </div>
            </div>
        </div>
        </div>
    <br>
    <br>
    <br>
        <!-- Services section -->
        <div class="our-services" id="services">
        <div class="container">
            <div class="services-contents">
            <div class="box-description" data-aos="fade-up">

                <h2>Why Us</h2>
                <p>
                Apa yang kami tawarkan di hotel ini untuk anda?
                </p>
                <section class="services-section">
                <div class="services">
                    <div class="services-icon">
                    <h4>
                        <span class="fa fa-star orange" aria-hidden="true"></span>
                        Kualitas Terbaik
                    </h4>
                    <h5>
                        Kami selalu berkomitmen untuk menyediakan kualitas terbaik dalam segala hal,
                        mulai dari pelayanan hingga fasilitas yang kami tawarkan.
                    </h5>
                    </div>
                    <div class="services-icon">
                    <h4>
                        <span class="fa fa-map-marker blue" aria-hidden="true"></span>
                        lokasi yang Strategis
                    </h4>
                    <h5>
                        Terletak di pusat kota, kami memberikan akses mudah ke tempat-tempat penting,
                        seperti pusat perbelanjaan,
                        restoran, dan atraksi wisata terkenal.
                    </h5>
                    </div>
                    <div class="services-icon">
                    <h4>
                        <span class="fa fa-bed green" aria-hidden="true"></span>
                        Kenyamanan yang Luar Biasa
                    </h4>
                    <h5>
                        Kamar-kamar kami didesain dengan elegan dan dilengkapi dengan semua
                        fasilitas modern yang Anda butuhkan untuk tinggal yang nyaman.
                    </h5>
                    </div>
                </div>
                </section>
            </div>
            </div>
        </div>
        </div>
    <br>
    <br>
    <br>
        <!-- Pricing section -->
        <div class="best-plans" id="pricing" data-aos="fade-up">
        <div class="container">
            <div class="heading-blog">
            <h2>Kamar Terpopuler</h2>
            <div class="blog-container">
            </div>
            </div>
            <div class="plan-contents">
            <div class="plan-card" data-aos="fade-down">
                <img src="rekom/182677983.jpg" alt="classic room" />
                <div class="plan-content">
                <h4>Standard Room</h4>
                <br>
                <h6>
                    Kenyamanan sederhana dengan fasilitas lengkap.
                </h6>
                <div class="price">
                    <p><span>$150</span> per night</p>
                </div>
                <div class="icon-group">
                    <i class="fas fa-user-friends"></i>
                    <i class="fas fa-bath"></i>
                    <i class="fas fa-bed"></i>
                </div>
                <div class="select-package">
                    <a href="#">Booking</a>
                </div>
                </div>
            </div>
            <div class="plan-card" data-aos="fade-up">
                <img src="rekom/blog-tipe-kamar-hotel-yang-wajib-diketahui-47-l.jpg" alt="luxury room" />
                <div class="plan-content">
                <h4>Superior Room</h4>
                <br>
                <h6>
                    Ruangan yang lebih luas dengan pemandangan yang indah.
                </h6>
                <div class="price">
                    <p><span>$200</span> per night</p>
                </div>
                <div class="icon-group">
                    <i class="fas fa-user-friends"></i>
                    <i class="fas fa-bath"></i>
                    <i class="fas fa-bed"></i>
                </div>
                <div class="select-package">
                    <a href="#">Booking</a>
                </div>
                </div>
            </div>
            <div class="plan-card" data-aos="fade-up">
                <img src="rekom/kamar_20160703_163616.jpg" alt="modern room" />
                <div class="plan-content">
                <h4>Deluxe Twin Bed</h4>
                <br>
                <h6>
                    Kenyamanan dengan tempat tidur terpisah
                </h6>
                <div class="price">
                    <p><span>$175</span> per night</p>
                </div>
                <div class="icon-group">
                    <i class="fas fa-user-friends"></i>
                    <i class="fas fa-bath"></i>
                    <i class="fas fa-bed"></i> 
                </div>
                <div class="select-package">
                    <a href="#">Booking</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>

        <section class="hotel-service">
        <div class="container">
            <h2>Hotel Service</h2>
            <div class="card-container">
            <div class="card">
                <img src="service/WhatsApp Image 2024-06-16 at 22.36.11_388adf9f.jpg" alt="Service 1">
                <div class="card-content">
                <h3>Layanan kamar 24 jam</h3>
                </div>
            </div>
            <div class="card">
                <img src="service/WhatsApp Image 2024-06-16 at 22.36.23_8218a772.jpg" alt="Service 2">
                <div class="card-content">
                <h3>Restoran Mewah</h3>
                </div>
            </div>
            <div class="card">
                <img src="service/WhatsApp Image 2024-06-16 at 22.36.55_c097de2b.jpg" alt="Service 3">
                <div class="card-content">
                <h3>Spa dan Kebugaran</h3>
                </div>
            </div>
            </div>
        </div>
        </section>
        <br>
        <br>
        <br>
        {{-- <section class="featured">
        <div class="container">
            <div class="featured-images">
            <div class="featured-image">
                <img src="futured/WhatsApp Image 2024-06-16 at 22.58.05_293b2850.jpg" alt="Featured 1">
            </div>
            <div class="featured-image">
                <img src="futured/WhatsApp Image 2024-06-16 at 22.58.20_6b0d8bfe.jpg" alt="Featured 2">
            </div>
            <div class="featured-image">
                <img src="futured/WhatsApp Image 2024-06-16 at 22.58.34_6c362802.jpg" alt="Featured 3">
            </div>
            </div>
            <div class="featured-cards">
            <div class="card">
                <div class="card-content">
                <h3>Explore the City</h3>
                <p>Discover the hidden gems of the city with our guided tours.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                <h3>Relaxation & Spa</h3>
                <p>Indulge yourself with our luxurious spa treatments and massages.</p>
                </div>
            </div>
            <div class="card">
                <div class="card-content">
                <h3>Fine Dining Experience</h3>
                <p>Enjoy exquisite dining experience at our fine restaurants.</p>
                </div>
            </div>
            </div>
        </div>
        </section>



        <br>
        <br> --}}

        <!-- Blog and news section -->
        <div class="blog-and-news" id="blog-and-news">
        <div class="container">
            <div class="heading-blog" data-aos="fade-up">
            <h2>Our Latest Blog & News</h2>
            <div class="blog-container">
                <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum,
                reiciendis ratione quaerat architecto.
                </p>
            </div>
            </div>
            <div class="blog-contents">
            <div class="blog" data-aos="fade-down">
                <img src="img/resort.jpg" alt="resort picture" />
                <div class="blog-info">
                <div class="time-posted">
                    <div class="rounded">
                    <span class="fa fa-calendar" aria-hidden="true"></span>
                    </div>
                    <h4>20-04-2021</h4>
                </div>
                <div class="blog-author">
                    <div class="rounded">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    </div>
                    <h4>BY CREATOR</h4>
                </div>
                </div>
                <div class="blog-content">
                <h4>Remarkable Resort That Offer The Best of Views!</h4>
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nemo
                    repudiandae illo odio fugiat, fugit sit inventore, laudantium,
                    voluptas beatae iusto doloremque suscipit. Nisi sint similique
                    sapiente accusantium laboriosam vitae pariatur!
                </p>
                </div>
            </div>
            <div class="blog second" data-aos="fade-up">
                <img src="img/villa.jpg" alt="villa picture" />
                <div class="blog-info">
                <div class="time-posted">
                    <div class="rounded">
                    <span class="fa fa-calendar" aria-hidden="true"></span>
                    </div>
                    <h4>21-04-2021</h4>
                </div>
                <div class="blog-author">
                    <div class="rounded">
                    <span class="fa fa-user" aria-hidden="true"></span>
                    </div>
                    <h4>BY CREATOR</h4>
                </div>
                </div>
                <div class="blog-content">
                <h4>
                    Villas in Nashik That Are Nothing Less Than Home Away From Home!
                </h4>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Delectus consequuntur praesentium, esse molestias dolores
                    molestiae minima aspernatur impedit iusto voluptates quis vel
                    deleniti illum fugiat beatae voluptatibus harum facere ducimus!
                </p>
                </div>
            </div>
            </div>
        </div>
        </div>

        <!-- Review contents section -->
        <div class="reviews-section" id="reviews">
        <div class="container">
            <div class="section-title" data-aos="fade-up">
            <h3>See Satisfied Traveler Reviews</h3>
            </div>
            <div class="review">
            <div class="image-review" data-aos="fade-down">
                <img src="img/japan-views.jpg" alt="views image" />
            </div>
            <div class="review-box" data-aos="fade-down">
                <div class="arrow-buttons">
                <a href="#">
                    <span class="material-icons-outlined"> navigate_before </span>
                </a>
                <a href="#">
                    <span class="material-icons-outlined"> navigate_next </span>
                </a>
                </div>
                <div class="review-information">
                <div class="content-review">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <p class="italic">
                    The hotel was simple amazing and I couldn't thank Rayal Park
                    more for helping out. I've been a customer for awhile and I
                    have to say it's probably my favourite hotel!
                    </p>
                </div>
                <div class="reviewer">
                    <img
                    class="rounded-image"
                    src="img/profile-pic.jpg"
                    alt="reviewer image"
                    />
                    <div class="reviewer-profile">
                    <h4 class="reviewer-name">Olivia Blisset</h4>
                    <p>Satisfied Traveler</p>
                    </div>
                </div>
                </div>
                <div class="clear"></div>
            </div>
            </div>
        </div>
        </div>

        <!-- Other information section -->
        <div class="more-information-section">
        <div class="container">
            <div class="company-info">
            <h4>Rayal Park</h4>
            <a href="">
                <span class="fa fa-phone icon" aria-hidden="true"></span>
                (+86) 1230 4440
            </a>
            <a href="">
                <span class="fa fa-envelope-o icon" aria-hidden="true"></span>
                rayalpark@gmail.com
            </a>
            <p>3840 Filbert Street, Bethlehem, Pennsylvania, USA</p>
            </div>
            <div class="legal">
            <h4>Legal</h4>
            <a href="#">Terms & Conditions</a>
            <a href="#">Privacy Policy</a>
            <a href="#">Cookies Policy</a>
            </div>
            <div class="resources">
            <h4>Resources</h4>
            <a href="#">How It Works</a>
            <a href="#">Feature</a>
            <a href="#">Contacts</a>
            </div>
            <div class="newsletter">
            <h4>Newsletter</h4>
            <p>Sign up for the last news and offers from the various hotels</p>
            <div class="submit">
                <input
                type="email"
                id="email"
                name="email"
                placeholder="Enter email address"
                />
                <input class="email-submit" type="submit" value="Send" />
            </div>
            </div>
        </div>
        </div>
        

        <!-- Footer section -->
        <div class="footer ">
            <div class="container">
                <div class="content-footer d-flex gap-5">
                    <div class="name-hotel">
                        <h1>Hotel Citra Megah</h1>
                        <p>Hotel Citra Megah, <span>hotel bintang lima terbaik di indonesia dengan lokasi yg
                                strategis</span> </p>
                        <div class="social-media mt-5">
                            <h3>Follow Us</h3>
                            <div class="icon-social-media">
                                <a href="">
                                    <img src="{{ asset('image/social-media/facebook.png') }}" alt="">

                                </a>
                                <a href="">
                                    <img class="ms-2" src="{{ asset('image/social-media/linkedin.png') }}" alt="">

                                </a>
                                <a href="">
                                    <img class="ms-2" src="{{ asset('image/social-media/instagram.png') }}"
                                        alt="">

                                </a>
                                <a href="">
                                    <img class="ms-2" src="{{ asset('image/social-media/twitter.png') }}" alt="">

                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="navigation ">
                        <h3>Navigation</h3>
                        <div class="menu d-flex flex-column">
                            <a href="#">Helper Center</a>
                            <a href="#">Careers</a>
                            <a href="#">Terms & Conditions</a>
                            <a href="#">Privacy Policy</a>
                        </div>
                    </div>
                    <div class="recent-post ">
                        <h3>Recent Post</h3>
                        <div class="content-recent-post">
                            <div class=" d-flex  gap-3">
                                <img src="{{ asset('image/gambar2.png') }}" alt="">
                                <p>Menemukan Kesempurnaan dalam Kesenangan Mengin . . .</p>
                            </div>
                            <div class=" d-flex  gap-3">
                                <img src="{{ asset('image/gambar4.png') }}" alt="">
                                <p>Mengenal Dapur Lezat Hotel Citra Megah: Sebuah Petualangan . . .</p>
                            </div>
                            <div class=" d-flex  gap-3">
                                <img src="{{ asset('image/gambar3.png') }}" alt="">
                                <p>Menjadi Tuan Rumah yang Tepat: Konferensi dan Acara Bisnis di . . .</p>
                            </div>
                        </div>
                    </div>
                    <div class="contact-us">
                        <h3 class="title-contact-us">Contact Us</h3>
                        <div class=" d-flex gap-3 align-items-center">
                            <img src="{{ asset('image/contact/phone.png') }}" alt="">
                            <h4>1234-567-890</h4>
                        </div>
                        <div class=" d-flex gap-3 align-items-center mt-3">
                            <img src="{{ asset('image/contact/email.png') }}" alt="">
                            <h4>hotelcitramegah@gmail.com</h4>
                        </div>
                        <div class=" d-flex gap-3 align-items-center mt-3">
                            <img src="{{ asset('image/contact/maps.png') }}" alt="">
                            <h4>jl. Raya Krapyak, Jl. Karanganyar Raya No.RT.05, Karanganyar, Wedomartani, Kec.
                                Ngemplak, Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>

    <script>
        AOS.init();
    </script>
    </html>

</x-app-layout>
      