<x-app-layout>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kamar - My Management Hotel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="{{ asset('css/detail.css') }}">
</head>
<body>
    <main>

        <section class="room-details">
            <div class="image-container">
                <img src="{{ asset('detail/kamar-landing.jpg') }}" alt="Kamar">
                <div class="room-title">Kamar</div>
            </div>
        </section>
        
        
        <div class="container">
            <div class="row details-container">
                <div class="col-md-8">
                    <div>
                        <h2 style="margin-top: 40px; color: #162034; font-weight: 900;">Kamar Superior</h2>
                        <img class="details-img" src="{{ asset('images/kamarbawah.jpg') }}" alt="Kamar Superior" style="margin-top: 20px; margin-bottom: 20px;">
                    </div>
                    <div class="room-info" style="margin-bottom: 20px;">
                        <h3 style="margin-bottom: 20px;">
                            <span class="small-text">Superior Room</span>
                            <span class="stars">★★★★☆</span>
                            <span class="reviews small-text">(735)</span>
                        </h3>
                            <p style="margin-bottom: 50px;">Nikmati kenyamanan superior di kamar Superior kami. Desain interior yang elegan dan mewah menciptakan suasana yang sempurna untuk melepas penat setelah hari yang panjang. Kamar luas dengan area tidur dan tempat duduk yang terpisah memberikan privasi dan ruang yang lapang.</p>
                            <h4 style="margin-bottom: 20px; color: #162034; font-weight: 900;">Fasilitas:</h4>
                            <div class="facilities">
                                <div class="facilities">
                                    <div class="facility-item">
                                        <i class="fas fa-wifi"></i>
                                        <span style="font-weight: 900;">High Speed WiFi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-bath"></i>
                                        <span style="font-weight: 900;">1 Kamar Mandi</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-cocktail"></i>
                                        <span style="font-weight: 900;">Kulkas Mini</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-bed"></i>
                                        <span style="font-weight: 900;">1 Double Bed</span>
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-tv"></i> 
                                        <span style="font-weight: 900;">TV</span> 
                                    </div>
                                    <div class="facility-item">
                                        <i class="fas fa-coffee"></i>
                                        <span style="font-weight: 900;">Sarapan</span>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </div>

                    {{-- (ringkasan pemesanan) --}}
                    
                    <div class="col-md-4" style="margin-top: 90px;">
                        <div class="summary-item" style="background-color: #F2F2F2;">
                            <h4 style="margin-top: 10px; color: #162034; font-weight: 900;">Ringkasan Pemesanan</h4>
                            <label for="check-in" style="margin-bottom: 10px; color: #1D7C82;">
                                <strong>
                                    <i class="fas fa-calendar-check" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Check In</span>
                                </strong>
                                  </label>
                                  <input type="text" style="margin-bottom: 20px;" id="check-in" class="form-control">
                          
                            <label for="check-out" style="margin-bottom: 10px;">
                                <strong>
                                    <i class="fas fa-calendar-times" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Check Out</span>
                                </strong>
                            </label>
                            <input type="text" style="margin-bottom: 20px;" id="check-out" class="form-control">

                            <label for="hotel" style="margin-bottom: 10px;">
                                <strong>
                                    <i class="fas fa-building" aria-hidden="true" style="color: #162034;"></i>
                                    <span style="color: #1D7C82;">Kamar</span>
                                </strong>
                            </label>
                            <input type="text" id="hotel" style="margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; background: transparent; width: 100%;" class="form-control">
                            
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                                <div><strong>1 malam</strong></div>
                                <div id="price-per-night">Rp. 400.000</div>
                            </div>
                          
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px; border-bottom: 1px dashed #1D7C82;">
                                <div><strong>Jumlah kamar</strong></div>
                                <div>1 kamar</div>
                            </div>
                            
                            <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                                <div><strong>Total</strong></div>
                                <div id="total-cost">Rp 700.000</div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">SELESAIKAN PEMESANAN</button>
                        </div>
                    </div>
                </div>
            </div>
    
            <br>
            <br>
            <div class="booking-summary card-container">
                <h3 class="popular-title" style="margin-top: 0; margin-bottom: 20px;">Kamar Terpopuler</h3>
                <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="card">  
                                        <img src="{{ asset('images/kamar1.jpg') }}" alt="Kamar 1">
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
                                        <img src="{{ asset('images/kamar3.jpg') }}" alt="Kamar 3">
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
                                        <img src="{{ asset('images/kamaratas.jpg') }}" alt="Kamar Atas">
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
                                <div class="col-md-3">
                                    <div class="card">
                                        <img src="{{ asset('images/kamarbawah.jpg') }}" alt="Kamar Bawah">
                                        <div class="card-details">
                                            <h4>Kamar Bawah</h4>
                                            <p>Kamar dengan pemandangan laut yang indah.</p>
                                            <div class="icon-group">
                                                <i class="fas fa-user-friends"></i>
                                                <i class="fas fa-bath"></i>
                                                <i class="fas fa-bed"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Add more cards as needed -->
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

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
            


        </main>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
        <script>
            var myCarousel = document.querySelector('#carouselExampleControls');
            var carousel = new bootstrap.Carousel(myCarousel);
        </script>
    </body>
    </html>

</x-app-layout>
    