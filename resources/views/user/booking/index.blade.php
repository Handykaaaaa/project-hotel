<x-app-layout>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Booking Hotel Citra Megah</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .container {
            max-width: 1200px;
            margin: 20px auto;
        }
        .card {
            padding: 20px;
            background-color: #f9f9f9f1;
            border-radius: 8px;
            margin-bottom: 10px;
            max-width: 500px; /* Menetapkan lebar maksimum untuk card */
            margin-left: auto;
            margin-right: auto; /* Pusatkan card secara horizontal */
            font-size: 14px; /* Mengatur ukuran teks */
        }
        .card h4 {
            font-size: 18px; /* Mengatur ukuran teks untuk heading */
        }
        .card p, .card label, .card input, .card textarea, .card select, .card button {
            font-size: 14px; /* Mengatur ukuran teks untuk elemen-elemen lainnya */
        }
        .footer p {
            font-size: 12px; /* Mengatur ukuran teks untuk footer */
        }

        /* (bagian ringkasan pemesanan) */
        .room-info,
        .summary-item {
            flex: 1;
        }
        .summary-item {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .quantity-control button {
            border: 1px solid #ddd;
            background: #fff;
            padding: 5px 10px;
            cursor: pointer;
        }
        .quantity-control span {
            padding: 0 10px;
        }
        .btn-block {
            display: block;
            width: 100%;
            padding: 10px;
            background:#162034;
            color: #fff;
            border: none;
            border-radius: 0px;
            cursor: pointer;
            text-align: center;
        }
        .btn-block:hover {
            background: #007bff;
        }
        /* (selesai ringkasan) */

        .text-muted {
            font-style: italic;
            font-size: 12px;
            display: block;
            color: #1D7C82;
        }
        .text-muted::before {
            content: "";
            display: block;
            width: 100%;
        }

        /* (bagian header) */
        .header {
            text-align: left; /* Mengatur teks agar rata kiri */
            margin-top: 20px; /* Mengatur jarak margin atas sebesar 20px */
            margin-bottom: 20px; /* Mengatur jarak margin bawah sebesar 20px */
            padding-left: 10px; /* Menambahkan padding kiri sebesar 10px */
            margin-left: 150px; /* Menetapkan margin kiri sebesar 100px */
        }

        @media (max-width: 768px) {
        .header {
            transform: translateX(-100px); /* Geser elemen 50px ke kanan */
        }
        }

        .header h2, .header p {
            margin-left: 0; 
        }

        /* Modal */
        .modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgba(0, 0, 0, 0.6); /* Ubah opasitas background */
        }

      /* Modal Content */
        .modal-content {
            background-color: #fefefe;
            margin: 10% auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            width: 70%; /* Perlebar modal sesuai preferensi Anda */
            max-width: 600px; /* Tetapkan lebar maksimum yang lebih besar */
            height: auto; /* Sesuaikan tinggi otomatis berdasarkan konten */
            text-align: center; /* Center align text */
        }

        /* Thank You Text */
        .modal-content h2 {
            color: #17b978; 
        }

        /* Booking Text */
        .modal-content h3 {
            color: #333; 
        }

        /* Booking Instructions */
        .modal-content p {
            color: #666; 
        }

        /* Buttons */
        .modal-content .button {
            background-color: #333; /* Warna latar belakang tombol */
            color: white; /* Warna teks tombol */
            padding: 10px 15px;
            margin: 10px;
            border: none;
            border-radius:15px;
            cursor: pointer;
            font-size: 15px
        }

        .modal-content .button:hover {
            background-color: #555; /* Warna latar belakang tombol saat dihover */
        }

     


        @media (max-width: 768px) {
            .header {
                padding-left: 5%;
            }
        }
        .optional-text {
            color: #1D7C82;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Isi dan lengkapilah form reservasi dibawah</h2>
        <h2>dengan baik dan benar!</h2>
       
    </div>
   <div class="container">
    <span class="optional-text" style="color: #1D7C82; margin-left:50px;">Login atau daftar untuk pemesanan lebih cepat*</span>
    
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <form>
                        <h4>Info Kontak</h4>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="firstName"></label>
                                <input type="text" class="form-control" id="firstName" placeholder="Nama Depan*">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="lastName"></label>
                                <input type="text" class="form-control" id="lastName" placeholder="Nama Belakang*">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="email"></label>
                                <input type="email" class="form-control" id="email" placeholder="Email*">
                                <small class="text-muted" style="color: #1D7C82 !important;">Email ini akan menjadi tujuan pengiriman konfirmasi anda</small>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phone"></label>
                                <input type="text" class="form-control" id="phone" placeholder="Nomor Telepon*">
                            </div>
                        </div>
                        <br>
                        
                        <h4>Alamat</h4>
                        <div class="form-row address-group">
                            <div class="form-group col-md-6">
                                <label for="country"></label>
                                <select class="form-control" id="country" required>
                                    <option value="">Negara*</option>
                                    <option value="ID">Indonesia</option>
                                    <option value="MY">Malaysia</option>
                                    <option value="SG">Singapura</option>
                                    <option value="TH">Thailand</option>
                                    <option value="VN">Vietnam</option>
                                    <option value="PH">Filipina</option>
                                    <option value="BN">Brunei</option>
                                    <option value="MM">Myanmar</option>
                                    <option value="KH">Kamboja</option>
                                    <option value="LA">Laos</option>
                                </select>
                            </div>
                        </div>
                       
                        <div class="form-group address-group mt-1">
                            <label for="address"></label>
                            <textarea class="form-control resizable-textarea" id="address" style="height: 100px;" placeholder="Alamat Tempat Tinggal Sekarang (optional)"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="additionalDetails">Detail dan Preferensi Tambahan <span class="optional-text">(optional)</span></label>
                            <textarea class="form-control resizable-textarea" id="additionalDetails" rows="4" placeholder="Catatan permintaan atau kebutuhan khusus Anda"></textarea>
                        </div>
                    </form>
                </div>
                <br>
                <br>
                <div class="card">
                    <h4>Kebijakan:</h4>
                    <p>Check In: Minggu, 20.00 - 16 Juli 2023</p>
                    <p>Check Out: Senin, 20.00 - 17 Juli 2023</p>
                    <p>Hotel: Hotel Citra Megah Bali, Standard Room</p>
                    <h5>KEBIJAKAN GARANSI</h5>
                    <p style="color: #1D7C82;">Pay At Hotel (Bayar di hotel)</p>
                    <h5>KEBIJAKAN PEMBATALAN</h5>
                    <p style="color: #1D7C82;">Tidak Dapat Dikembalikan - 100% dari jumlah total akan dibebankan pada saat pemesanan.</p>
                </div>
            </div>

            <div class="col-md-4" style="margin-top: 0px;">
                <div class="summary-item" style="background-color: #F2F2F2;">
                    <h4 style="margin-top: 5px; color: #162034;">Ringkasan Pemesanan</h4>
                    <label for="check-in" style="margin-bottom: 10px; margin-top: 10px; color: #1D7C82;">
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
                            <span style="color: #1D7C82;">Hotel</span>
                        </strong>
                    </label>
                    <input type="text" id="hotel" style="margin-bottom: 20px; border: none; border-bottom: 1px solid #ccc; background: transparent; width: 100%;" class="form-control">
                    
                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <div><strong>1 malam</strong></div>
                        <div id="price-per-night">Rp. 400.000</div>
                    </div>
                  
                    <div class="d-flex justify-content-between" style="margin-bottom: 20px; border-bottom: 1px dashed #1D7C82;">
                        <div><strong>Jumlah Orang</strong></div>
                        <div>2 Dewasa</div>
                    </div>
                    
                    <div class="d-flex justify-content-between" style="margin-bottom: 20px;">
                        <div><strong>Total</strong></div>
                        <div id="total-cost">Rp 700.000</div>
                    </div>
                </div>
                <button type="button" id="showModal" class="btn btn-primary btn-block" style="margin-top:20px;">BOOKING</button>
            </div>
           

        </div>
    </div>

    <!-- Modal -->
    
    <div id="modal" class="modal">
        <div class="modal-content">
            
            <i class="fas fa-check-circle" style="color: #17b978; font-size: 40px;"></i>
            <h2 style="font-size: 23px;">Terima Kasih</h2>
            <h3>Pemesanan anda telah selesai</h3>
            <p style="font-size: 13px;">Terimaksih telah memilih hotel kami sebagai tempat menginap anda.</p>

            <h2 style="font-size: 16px;">Tunggu beberapa menit, kami akan segera mengirimkan konfirmasi pemesanan ke akun email anda.</h2>
            <div class="button-container">
                <button class="button" onclick="cancelBooking()">Batalkan Pemesanan</button>
                <button class="button" onclick="checkBooking()">Cek Pemesanan</button>
            </div>
        </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
   <script>
    function cancelBooking() {
        // Arahkan pengguna kembali ke halaman sebelumnya
        window.history.back();
    }

    function checkBooking() {
        // Arahkan pengguna ke halaman keranjang dan unduh PDF
        window.location.href = '/cart/keranjang';
        // Simulasi unduhan PDF setelah beberapa waktu untuk memastikan halaman dimuat
        setTimeout(function() {
            window.location.href = '/download-pdf-url'; // Ganti dengan URL yang tepat untuk mengunduh PDF
        }, 1000); // Waktu tunda 1 detik
    }

    const modal = document.getElementById("modal");
    const btn = document.getElementById("showModal");
    const span = document.getElementsByClassName("close-button")[0];
    
    btn.onclick = function() {
        modal.style.display = "block";
    };
    
    span.onclick = function() {
        modal.style.display = "none";
    };
    
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>

</body>
</html>

</x-app-layout>