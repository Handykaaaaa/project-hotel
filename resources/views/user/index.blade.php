<x-app-layout>

{{-- @section('content') --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Megah</title>
    <style>
        .bg-image {
            background-image: url('image/kasur-landing.jpg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            height: 400px;
            width: 100%; /* Membuat gambar latar belakang membentang penuh */
            display: block; /* Pastikan elemen tersebut adalah block level */
        }
        .container {
            max-width: 1300px;
            margin: 0 auto;
            padding: 20px;
            
        }

        .booking-section h1, .booking-section h2 {
            color: #333;
        }

        /* .booking-form h1 {
            padding: 15px;
            font-weight: bold;
            font-size: 25px;
            color: #fff
        } */

        .booking-section p {
            color: #666;
        }

        .booking-card {
            background-color: #168895;
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }

        .booking-form select, .booking-form input, .booking-form button {
            padding: 10px;
            margin-right: 50px;
            margin-bottom: 15px;
        }

        .booking-form button {
            background-color: #000000;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        .main-content {
            display: flex;
            justify-content: space-between;
        }

        .room-selection {
            width: 65%;
        }

        .room-selection h2 {
            margin-top: 0;
        }

        .filter {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            text-align: left;
        }

        .filter label {
            margin-right: 615px;
        }

        .room-card {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border: 1px solid #ddd;
            margin-bottom: 10px;
            background-color: #f9f9f9;
        }

        .room-info {
            display: flex;
        }

        .room-info img {
            width: 300px;
            height: 300px;
            margin-right: 10px;
        }

        .room-info h3 {
            margin: 0;
        }

        .room-info ul {
            padding-left: 20px;
        }

        .room-price {
            text-align: right;
        }

        .room-price p {
            margin-right: 10px;
            margin-top: 200px;
            font-size: 18px;
            font-weight: bold;
        }

        .room-price button {
            background-color: #2e8b57;
            color: #fff;
            border: none;
            padding: 10px;
            cursor: pointer;
        }

        .summary {
            width: 30%;
            padding: 20px;
            border: 1px solid #ddd;
            background-color: #f9f9f9;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .summary h2 {
            margin-top: 0;
        }

        .summary p {
            margin: 5px 0;
        }

        .continue-booking {
            display: block;
            width: 100%;
            padding: 10px;
            background-color: #2e8b57;
            color: #fff;
            border: none;
            cursor: pointer;
            text-align: center;
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
    <section class="bg-image">
        <div class="container">
            <div class="container mx-auto py-16 px-4 sm:px-6 lg:px-8">
                <div class="text-center">
            </div>
    </div>
    </section>
<br>
<br>
<section class="booking-section">
    <div class="container">
        <h1>Ruangan Hotel Citra Megah</h1>
        <p>Hotel Citra Megah menyediakan beberapa ruangan yang tentunya sangat cocok dengan selera anda, dengan tampilan, kualitas dan fasilitas yang sangat terjamin untuk menunjang berbagai kebutuhan sehari hari anda, dan kami siap 24 jam melayani anda jika membutuhkan bantuan apapun, ayo segera pesan kamar di bawah ini dan dapatkan diskonnya di pemesanan pertama anda!</p>
        <br>
        <br>
        <div class="booking-card">
            <div class="booking-form">
                {{-- <h1>Booking Sekarang!!</h1> --}}
                <select class="room-type">
                    <option value="superior">Superior Room</option>
                    <!-- Add other room types here -->
                </select>
                <input type="date" class="check-in" value="2023-07-16">
                <input type="date" class="check-out" value="2023-07-17">
                <input type="text" class="promo-code" placeholder="Promo Code">
                <button class="booking-button">BOOKING</button>
            </div>
        </div>
        
        <div class="main-content">
            <div class="room-selection">
                <h2>Pilih Kamar</h2>
                <div class="filter">
                    <label for="filter">Filter:</label>
                    <select id="filter">
                        <option value="termewah">Termewah</option>
                        <option value="populer">Populer</option>
                        <option value="termurah">Termurah</option>
                    </select>
                </div>
                
                <div class="room-card">
                    <div class="room-info">
                        <img src="room/tipe-kamar-hotel-suite.png" alt="Single Room">
                        <div>
                            <h3>Single Room</h3>
                            <p>⭐⭐⭐⭐⭐ | Tersisa 1</p>
                            <p>Fasilitas</p>
                            <ul>
                                <li>1 Kamar mandi</li>
                                <li>1 Tempat tidur double</li>
                                <li>Sarapan</li>
                                <li>Kulkas mini</li>
                                <li>TV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="room-price">
                        <p>Rp 350.000/malam</p>
                        <button class="book-room">Pesan Kamar</button>
                    </div>
                </div>
                
                <div class="room-card">
                    <div class="room-info">
                        <img src="room/47-l.jpg" alt="Standard Room">
                        <div>
                            <h3>Standard Room</h3>
                            <p>⭐⭐⭐⭐ | (735) Tersisa 3 kamar lagi</p>
                            <p>Fasilitas</p>
                            <ul>
                                <li>2 Kamar mandi</li>
                                <li>1 Tempat tidur double</li>
                                <li>Sarapan</li>
                                <li>Kulkas mini</li>
                                <li>TV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="room-price">
                        <p>Rp 400.000/malam</p>
                        <button class="book-room">Pesan Kamar</button>
                    </div>
                </div>
                <div class="room-card">
                    <div class="room-info">
                        <img src="room/52a2e4d2539c.jpg" alt="Standard Room">
                        <div>
                            <h3>Standard Room</h3>
                            <p>⭐⭐⭐⭐ | (735) Tersisa 3 kamar lagi</p>
                            <p>Fasilitas</p>
                            <ul>
                                <li>2 Kamar mandi</li>
                                <li>1 Tempat tidur double</li>
                                <li>Sarapan</li>
                                <li>Kulkas mini</li>
                                <li>TV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="room-price">
                        <p>Rp 400.000/malam</p>
                        <button class="book-room">Pesan Kamar</button>
                    </div>
                </div>
                <div class="room-card">
                    <div class="room-info">
                        <img src="room/royal-tulip-gunung-geulis.jpg" alt="Standard Room">
                        <div>
                            <h3>Standard Room</h3>
                            <p>⭐⭐⭐⭐ | (735) Tersisa 3 kamar lagi</p>
                            <p>Fasilitas</p>
                            <ul>
                                <li>2 Kamar mandi</li>
                                <li>1 Tempat tidur double</li>
                                <li>Sarapan</li>
                                <li>Kulkas mini</li>
                                <li>TV</li>
                            </ul>
                        </div>
                    </div>
                    <div class="room-price">
                        <p>Rp 400.000/malam</p>
                        <button class="book-room">Pesan Kamar</button>
                    </div>
                </div>
            </div>
            
            <div class="summary">
                <h2>Ringkasan Pemesanan</h2>
                <p>Check In</p>
                <p>Minggu, 20.00 - 16 July 2023</p>
                <p>Check Out</p>
                <p>Senin, 20.00 - 17 July 2023</p>
                <p>Kamar</p>
                <p>Superior Room</p>
                <p>1 malam</p>
                <p>Rp 400.000</p>
                <p>Jumlah Kamar: 1</p>
                <p>Total: Rp 400.000</p>
                <button class="continue-booking">Lanjutkan Pemesanan</button>
            </div>
        </div>
    </div>
</section>

<section>
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
</section>


    
</body>
</html>
{{-- @endsection --}}
</x-app-layout>



