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
    <link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
  </head>
  <body>
    <!-- Navbar and main section -->
    <div class="main-section" id="main-section">
      <div class="navbar" id="navbar">
        <div class="left-navbar" id="left-navbar">
          <div class="logo">
            <a href="#">Hotel Citra Megah</a>
          </div>
          <div class="navbar-option" id="navbar-option">
            <a href="#main-section">Home</a>
            <a href="#room-section">Rooms</a>
            <a href="#about-section">About</a>
            <a href="#blog-and-news">Blog</a>
            <a href="#blog-and-news">Contact</a>
          </div>
        </div>
        <div class="auth-links">
          @if (Route::has('login'))
              @auth
                  <a href="{{ url('/dashboard') }}">Dashboard</a>
              @else
                  <a href="{{ route('login') }}">Log in</a>
                  @if (Route::has('register'))
                      <a href="{{ route('register') }}">Register</a>
                  @endif
              @endauth
          @endif
      </div>
      </div>
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
            <div class="hero-image" style="background-image: url('image/kasur-landing.jpg');"></div>
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