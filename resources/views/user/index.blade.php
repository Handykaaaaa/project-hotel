<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hotel Citra Megah - Kamar</title>
    <link href="fonts/ananda-black-font/AnandaBlackPersonalUseRegular-rg9Rx.ttf" rel="stylesheet"/>
    <link href="https://fonts.google.com/specimen/Poppins" rel="stylesheet"/>
    <style>
        /* Import Google Fonts */
@font-face {
  font-family: "Ananda Black";
  src: url("fonts/ananda-black-font/AnandaBlackPersonalUseRegular-rg9Rx.ttf");
}

@font-face {
  font-family: "Poppins";
  src: url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap");
}

body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

/* Header styles */
header {
  background-color: #fff;
  padding: 10px 0;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

header .container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px 20px;
}

.logo {
  flex: 1;
}

.logo h1 {
  font-family: "Ananda Black", serif;
  font-size: 24px;
  margin: 0;
}

nav {
  flex: 2;
  display: flex;
  justify-content: center;
}

nav ul {
  display: flex;
  list-style: none;
  margin: 0;
  padding: 0;
  gap: 20px;
}

.user {
  position: relative;
  display: inline-block;
}
.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
  z-index: 1;
}
.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}
.dropdown-content a:hover {
  background-color: #f1f1f1;
}
.user:hover .dropdown-content {
  display: block;
}

nav ul li {
  margin-left: 20px;
}

nav ul li a {
  text-decoration: none;
  color: #333;
  font-weight: bold;
}

.user {
  flex: 1;
  display: flex;
  justify-content: flex-end;
  align-items: center;
}

.user span {
  margin-right: 10px;
}

.user .logout {
  color: #e74c3c;
  text-decoration: none;
  font-weight: bold;
  padding: 5px 10px;
  border: 1px solid #e74c3c;
  border-radius: 5px;
}

/* Hero Section */
.hero {
  position: relative;
  text-align: center;
  color: white;
}

.hero .hero-image {
  width: 100%;
  height: 390px;
  object-fit: cover;
}

.hero .hero-text {
  position: absolute;
  bottom: 45px;
  left: 10%;
  transform: translateX(-50%);
  background-color: rgb(22, 32, 52);
  padding: 40px;
  border-radius: 5px 5px 0 0;
}

.hero h2 {
  font-family: "Poppins", sans-serif;
  font-size: 40px;
  margin: 0;
}

/* General Section */
.general {
  padding: 20px;
}

.general .definition {
  padding: 20px;
}

.general h2 {
  font-size: 28px;
}

.general p {
  font-size: 16px;
  color: #555;
}

/* Booking Form Section */
.booking-form .container {
  display: flex;
  justify-content: center;
  padding: 20px;
  background-color: #1d7c82;
  border-radius: 20px;
  gap: 20px;
}
.booking-form .container {
  display: flex;
  justify-content: center;
  padding: 20px;
  background-color: #1d7c82;
  border-radius: 20px;
  gap: 20px;
  width: 100%; /* Ensure container width is 100% */
  box-sizing: border-box; /* Include padding and border in the width calculation */
}

.booking-form .item-container {
  flex: 1 1 200px; /* Adjust flex properties for responsiveness */
  margin: 10px;
  max-width: 100%; /* Ensure the items do not exceed the container width */
}

.booking-form select,
.booking-form input[type="date"],
.booking-form input[type="text"],
.booking-form button {
  width: 100%; /* Ensure form elements take 100% width of their parent */
  padding: 10px;
  margin-top: 10px;
  font-size: 16px;
  border-radius: 15px;
  border: none;
}

.booking-form button {
  background-color: rgba(22, 32, 52, 0.8);
  color: white;
  border: none;
  cursor: pointer;
}

.booking-form button:hover {
  background-color: #c0392b;
}

/* Room Selection Section */
.container {
  max-width: 1200px;
  margin: 0 auto;
  padding: 20px;
  position: relative; 
}

.room-selection {
  margin-bottom: 20px;
}

.room-selection h2 {
  font-size: 24px;
  margin-top: 10px;
}

.filter {
  display: flex;
  align-items: center;
  position: absolute; 
  top: 20px; 
  right: 390px; 
  background: #1d7c82; 
  padding: 10px; 
  border-radius: 5px; 
  box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1); /* Optional: Add shadow */
}

.filter label {
  margin-right: 10px;
}

.filter select {
  padding: 5px;
  border: none;
  background: #1d7c82;
}

/* Room selection and booking summary styles */

.container {
  display: flex;
}

.rooms {
  flex: 1; /* Let it grow to fill available space */
  background-color: #f2f2f2;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-sizing: border-box; /* Ensure padding and borders are included in the width */
  margin-bottom: 20px; /* Adjust margin to create space between items */
  margin-top: 30px;
}

.room {
  display: flex;
  padding: 10px 0;
  margin-bottom: 10px;
}

.booking-summary {
  flex: 1; /* Let it grow to fill available space */
  background-color: #f2f2f2;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 8px;
  box-sizing: border-box; /* Ensure padding and borders are included in the width */
  margin-bottom: 20px; /* Adjust margin to create space between items */
  margin-top: 65px;
}
.choose-room {
  width: 70%;
  margin-right: 10px;
}
.payment {
  width: 30%;
}

.check-in-out {
  margin-bottom: 20px;
}

.check-in-out label {
  display: block;
  margin-bottom: 5px;
  margin-top: 10px;
}

.check-in-out input[type="date"] {
  width: calc(100% - 20px); /* Lebar input dikurangi padding */
  padding: 10px;
  margin-top: 5px;
  border: 1px solid #ccc;
  border-radius: 10px;
  font-size: 14px;
}

.summary-details {
  margin-top: 20px;
}

.summary-details p {
  margin-bottom: 10px;
}

.summary-details hr {
  margin: 10px 0;
  border: none;
  border-top: 1px solid #ddd;
}

.summary-details span {
  font-weight: bold;
}

h2 {
  font-size: 24px;
  margin-bottom: 0px;
}

hr {
  border: 0;
  height: 2px;
  background-color: #333;
  margin: 20px 0;
}

.room-info .price-and-button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
}

.room-info-pilih .price-and-button {
  display: flex;
  justify-content: space-between;
  align-items: center;
  margin-top: auto;
}

.room img {
  width: 350px;
  height: auto;
  margin-right: 30px;
}

.room-info {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.room-info-pilih {
  flex: 1;
  display: flex;
  flex-direction: column;
}

.room-info {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-top: 15px;
}

.room-info-pilih {
  flex: 1;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  padding-top: 15px;
}

.room-info h3,
.room-info button {
  margin: 10px; /* Provides a space between items */
}

.room-info-pilih h3,
.room-info-pilih button {
  margin: 10px; /* Provides a space between items */
}

.room-info ul {
  list-style: disc;
  padding: 0;
  margin: 0 0 0 20px;
  column-count: 2;
  column-gap: 20px;
}

.room-info ul li {
  margin-bottom: 5px;
}

.room-info h3 span {
  opacity: 0.7;
  font-size: 15px;
  font-weight: 400;
  color: #1d7c82;
}

.room-info button {
  align-self: flex-end; /* Aligns button to the end (right) */
  padding: 10px 20px; /* Adjust padding for button */
  background-color: rgba(22, 32, 52, 0.8); /* Example background color */
  color: white; /* Example text color */
  border: none;
  cursor: pointer;
}

.room-info-pilih button {
  align-self: flex-end; /* Aligns button to the end (right) */
  padding: 10px 20px; /* Adjust padding for button */
  background-color: #1d7c82; /* Example background color */
  color: white; /* Example text color */
  border: none;
  cursor: pointer;
}

.room-info button:hover {
  background-color: #0056b3;
}

.booking-summary h2 {
  margin-top: 0;
}

.check-in-out {
  margin-bottom: 20px;
}

.check-in-out label {
  display: block;
  font-weight: bold;
}

.summary-details {
  margin-bottom: 20px;
}

.summary-details {
  margin-bottom: 50px;
}

.summary-details p {
  display: flex;
  justify-content: space-between;
}

.summary-details hr {
  border: 0;
  height: 2px;
  background-color: #333;
  margin: 0px 0;
}

.summary-details span {
  font-weight: bold;
}

.booking-summary button {
  padding: 10px 20px;
  background-color: rgba(20, 32, 56, 0.8);
  color: #fff;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  border-radius: 20px;
  width: 100%;
}

.booking-summary button:hover {
  background-color: rgba(22, 32, 52, 0.8);
}

/* Footer styles */
body {
  font-family: Arial, sans-serif;
}

footer {
  background-color: #1a1a2e;
  color: #fff;
  padding: 20px 0;
}

.container {
  display: flex;

  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1;
  margin: 10px;
  min-width: 200px;
}

.footer-section h2{
  font-size: 18px;
  margin-bottom: 10px;
  font-family: "Ananda Black";
}

.footer-section h3 {
  font-size: 18px;
  margin-bottom: 10px;
}

.footer-section p,
.footer-section ul,
.footer-section li {
  font-size: 14px;
  margin-bottom: 8px;
  color: #C1CBDD;
}

.footer-section ul {
  list-style: none;
  padding: 0;
}

.footer-section ul li a {
  color: #C1CBDD;
  text-decoration: none;
}

.footer-section ul li a:hover {
  text-decoration: underline;
}

.social-icons a {
  margin-right: 10px;
}

.social-icons img {
  width: 24px;
  height: 24px;
  color: #C1CBDD;
}

.footer-bottom {
  text-align: center;
  border-top: 1px solid #444;
  padding-top: 10px;
  margin-top: 20px;
  font-size: 14px;
}

/* Responsive styles */
@media (max-width: 768px) {
  .hero .hero-text {
    padding: 20px;
    font-size: 20px;
  }

  .general .definition {
    padding: 10px;
  }

  .booking-form .container {
    flex-direction: column;
    padding: 10px;
  }

  .booking-form .item-container {
    margin: 5px;
  }

  .container {
    flex-direction: column;
  }

  .room-selection,
  .filter {
    flex: 1 1 100%;
    margin-bottom: 10px;
  }

  .rooms {
    width: 100%;
    margin-bottom: 20px;
  }

  .booking-summary {
    width: 100%;
  }

  .room img {
    width: 100%;
    margin-right: 0;
    margin-bottom: 10px;
  }

  .room-info {
    width: 100%;
  }
}

    </style>
  </head>

  <body>
    <header>
      <div class="container">
        <div class="logo">
          <h1>Hotel Citra Megah</h1>
        </div>
        <nav>
          <ul>
            <li><a href="#home">Home</a></li>
            <li><a href="#rooms">Rooms</a></li>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#contact">Contact</a></li>
          </ul>
        </nav>
        <div class="user">
          <span>Robert Evelyn</span>
          <div class="dropdown-content">
            <a href="#profile">Profile</a>
            <a href="#logout">Logout</a>
          </div>
        </div>
      </div>
    </header>

    <main>
      <section class="hero">
        <img src="gambar/kamra awal.jpeg" alt="Hero Image" class="hero-image" />
        <div class="container">
          <div class="hero-text">
            <h2>Kamar</h2>
          </div>
        </div>
      </section>
      <section class="container">
        <div class="definition">
          <h2>Ruangan Hotel Citra Megah</h2>
          <p>
            Citra Megah menyediakan beberapa ruangan yang tentunya sangat cocok
            dengan selara anda, dengan tampilan, kualitas dan fasilitas yang
            sangat terjamin untuk menunjang berbgai kebutuhan sehari hari anda,
            dan kami siap 24 jam melayani anda jika membutuhkan bantuan apapun,
            ayo segera pesan kamar di bawah ini dan dapatkan diskonnya di
            pemesanan pertama anda!
          </p>
        </div>
      </section>

      <section class="booking-form">
        <div class="container">
          <div class="item-container">
            <div class="room-selection-booking">
              <select id="room-type">
                <option value="standard">Standard Room</option>
                <option value="superior">Superior Room</option>
                <option value="twin">Twin Room</option>
              </select>
            </div>
          </div>
          <div class="item-container">
            <div class="date-selection">
              <input type="date" id="check-in" />
            </div>
          </div>
          <div class="item-container">
            <div class="date-selection">
              <input type="date" id="check-out" />
            </div>
          </div>
          <div class="item-container">
            <div class="booking-code">
              <input type="text" id="booking-code" placeholder="Kode Promo" />
            </div>
          </div>
          <div class="item-container">
            <button class="book-now">BOOKING</button>
          </div>
        </div>
      </section>
    </main>
    <div class="container">
      <div class="choose-room">
        <div class="room-selection">
          <h2>Pilih Kamar</h2>
        </div>
        <div class="filter">
          <label for="filter">Filter:</label>
          <select id="filter">
            <option value="termurah">Termurah</option>
            <option value="termurah">Populer</option>
            <option value="termahal">Termahal</option>
          </select>
        </div>

        <div class="rooms">
          <div class="room" id="single-room">
            <img src="gambar/single room.jpeg" alt="Single Room" />
            <div class="room-info">
              <h2>Single Room</h2>
              <p>⭐️⭐️⭐️⭐️⭐️ (735)</p>

              <ul>
                <li>1 Kamar mandi</li>
                <li>1 Tempat tidur double</li>
                <li>Sarapan</li>
                <li>High speed wifi</li>
                <li>Kulkas mini</li>
                <li>TV</li>
              </ul>
              <div class="price-and-button">
                <h3>Rp 350.000 <span>/malam</span></h3>
                <button>Pesan Kamar</button>
              </div>
            </div>
          </div>
          <hr />
          <div class="room" id="standard-room">
            <img src="gambar/standard room.jpeg" alt="Standard Room" />
            <div class="room-info">
              <h2>Standard Room</h2>
              <p>⭐️⭐️⭐️⭐️⭐️ (735)</p>

              <ul>
                <li>1 Kamar mandi</li>
                <li>1 Tempat tidur double</li>
                <li>Sarapan</li>
                <li>High speed wifi</li>
                <li>Kulkas mini</li>
                <li>TV</li>
              </ul>
              <div class="price-and-button">
                <h3>Rp 400.000 <span>/malam</span></h3>
                <button>Pesan Kamar</button>
              </div>
            </div>
          </div>
          <hr />
          <div class="room" id="superior-room">
            <img src="gambar/superior room.jpeg" alt="Superior Room" />
            <div class="room-info-pilih">
              <h2>Superior Room</h2>
              <p>⭐️⭐️⭐️⭐️⭐️ (735)</p>

              <ul>
                <li>1 Kamar mandi</li>
                <li>1 Tempat tidur double</li>
                <li>Sarapan</li>
                <li>High speed wifi</li>
                <li>Kulkas mini</li>
                <li>TV</li>
              </ul>
              <div class="price-and-button">
                <h3>Rp 600.000<span>/malam</span></h3>
                <button>Dipilih</button>
              </div>
            </div>
          </div>
          <hr />
          <div class="room" id="deluxe-twin-bed">
            <img src="gambar/deluxe twin bed.jpeg" alt="Deluxe Twin Bed" />
            <div class="room-info">
              <h2>Deluxe Twin Bed</h2>
              <p>⭐️⭐️⭐️⭐️⭐️ (735)</p>
              <ul>
                <li>1 Kamar mandi</li>
                <li>2 Tempat tidur</li>
                <li>Sarapan</li>
                <li>High speed wifi</li>
                <li>Kulkas mini</li>
                <li>TV</li>
              </ul>
              <div class="price-and-button">
                <h3>Rp 800.000 <span>/malam</span></h3>
                <button>Pesan Kamar</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="payment">
        <div class="booking-summary">
          <h2>Ringkasan Pemesanan</h2>
          <div class="check-in-out">
            <label><i class="far fa-calendar-alt"></i> Check In</label>
            <input type="date" value="2023-07-16" />
            <!-- Input date untuk Check In -->
            <label><i class="far fa-calendar-alt"></i> Check Out</label>
            <input type="date" value="2023-07-17" />
            <!-- Input date untuk Check Out -->
          </div>
          <div class="summary-details">
            <br>Kamar: <br> <br> <span>Superior Room</span> </br></p>
            <hr />
            <!-- Garis horizontal setelah jenis kamar -->
            <p>1 malam <span>Rp 600.000</span></p>
            <p>Jumlah kamar: <span>1 Kamar</span></p>
            <hr />
            <!-- Garis horizontal sebelum total -->
            <p>Total: <span>Rp 600.000</span></p>
          </div>
          <button>Lanjutkan Pemesanan</button>
        </div>
      </div>
    </div>

    <footer>
      <div class="container">
        <div class="footer-section">
          <h2>Hotel Citra Megah</h2>
          <p>
            Hotel Citra Megah, hotel bintang lima terbaik di Indonesia dengan
            lokasi yg strategis
          </p>
          <p>Follow Us</p>
          <div class="social-icons">
            <a href="#"><img src="facebook-icon.png" alt="Facebook" /></a>
            <a href="#"><img src="linkedin-icon.png" alt="LinkedIn" /></a>
            <a href="#"><img src="instagram-icon.png" alt="Instagram" /></a>
            <a href="#"><img src="twitter-icon.png" alt="Twitter" /></a>
          </div>
        </div>
        <div class="footer-section">
          <h3>Navigation</h3>
          <ul>
            <li><a href="#">Help Center</a></li>
            <li><a href="#">Careers</a></li>
            <li><a href="#">Terms & Conditions</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Recent Post</h3>
          <ul>
            <li>
              <a href="#">Menemukan Kesempurnaan dalam Kesenangan Mengin...</a>
            </li>
            <li>
              <a href="#"
                >Menjadi Tuan Rumah yang Tepat: Konferensi dan Acara Bisnis
                di...</a
              >
            </li>
            <li>
              <a href="#"
                >Mengenal Dapur Lezat Hotel Citra Megah: Sebuah
                Petualangan...</a
              >
            </li>
          </ul>
        </div>
        <div class="footer-section">
          <h3>Contact Us</h3>
          <p><img src="phone-icon.png" alt="Phone" /> 1234-567-890</p>
          <p>
            <img src="email-icon.png" alt="Email" /> hotelcitramegah@gmail.com
          </p>
          <p>
            <img src="location-icon.png" alt="Location" /> jl. Raya Krapyak, jl.
            Karanganyar Raya No.RT.05, Karanganyar, Wedomartani, Kec. Ngemplak,
            Kabupaten Sleman, Daerah Istimewa Yogyakarta 55584
          </p>
        </div>
      </div>
      <div class="footer-bottom">
        <p>Copyright &copy; 2023 Hotel Citra Megah</p>
      </div>
    </footer>
  </body>
</html>
