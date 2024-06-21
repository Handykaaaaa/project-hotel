<x-app-layout>
    
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    {{-- Link CDN Boostrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    {{-- Link font google poppins --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    {{-- Link font google Parisienne  --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Parisienne&display=swap" rel="stylesheet">
    {{-- Link href style css --}}
    <link rel="stylesheet" href="{{ asset('css/cart.css') }}">

</head>

<body>
    <section class="keranjang" id="keranjang">
        <div class="container">
            <h1 class="content-title">Keranjang Pemesanan</h1>
            <div class="content-keranjang">
                <div class="content-description d-flex ">
                    <div class=" facility d-flex gap-4">
                        <img src="{{ asset('/image/gambar1.png') }}" alt="Gambar 1">
                        <div class="description-cart">
                            <h3 class="title-cart">
                                Standard Room
                            </h3>
                            <div class="icon-start">
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.33" height="18.33" fill="#FFB800"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.33" height="18.33" fill="#FFB800"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.33" height="18.33" fill="#FFB800"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.33" height="18.33" fill="#FFB800"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" width="18.33" height="18.33" fill="#FFB800"
                                    class="bi bi-star-fill" viewBox="0 0 16 16">
                                    <path
                                        d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z" />
                                </svg>
                                <span>(735)</span>
                            </div>
                            <div class="description-facility">
                                <h4 class="title-facility">
                                    Fasilitas
                                </h4>
                                <div class="list-facility d-flex align-items-center gap-5">
                                    <div class="list-facility-one">
                                        <li>1 Kamar mandi</li>
                                        <li>1 Tempat tidur double </li>
                                        <li>Sarapan</li>
                                    </div>
                                    <div class="list-facility-two">
                                        <li>High speed wifi</li>
                                        <li>Kulkas mini </li>
                                        <li>TV</li>
                                    </div>
                                </div>
                            </div>
                            <div class="amount mt-4">
                                <h3>Rp 400.000<span>/malam</span></h3>
                            </div>
                        </div>
                    </div>
                    <div class="status ms-auto">
                        <h3>Status : <span>Menunggu konfirmasi</span></h3>
                    </div>

                </div>
                <h3 class="title-order mt-4">Detail Pemesanan</h3>
                <div class="content-description-order  d-flex">
                    <div class="list-details-order d-flex gap-5 ">
                        <div class="labels">
                            <h5>Check In:</h5>
                            <h5>Check Out:</h5>
                            <h5>Hotel:</h5>
                            <h5>Tambah rencana penginapan:</h5>
                            <h5>Jumlah orang:</h5>
                        </div>
                        <div class="value">
                            <h5>Minggu, 20.00 - 16 July 2023</h5>
                            <h5>Senin, 20.00 - 17 July 2023</h5>
                            <h5>Hotel Citra Megah Bali, Standard Room</h5>
                            <h5>Spa dan Gebugaran - Dewasa (2)</h5>
                            <h5>2 Dewasa, 1 Anak</h5>
                        </div>
                    </div>
                    <div class="total-payment ms-auto">
                        <h3 class="title-total-payment">Total Pembayaran</h3>
                        <h3 class="amount">Rp.400.000</h3>
                        <button class="button-cancel-order ">Batalkan Pemesanan</button>
                        <h6 class="pt-2">Sebelum <span>04 : 24 : 12</span></h6>
                    </div>
                </div>
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
    </section>
</body>

</html>

</x-app-layout>