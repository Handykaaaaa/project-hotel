{{-- <x-app-layout> --}}
  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Aplikasi Warga</title>
      <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
      <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  </head>
  <body class="bg-gray-100 font-sans leading-normal tracking-normal">
      <div class="flex h-screen">
          <div class="bg-gray-800 text-white w-64 p-10 sidebar">
              <div class="mb-10">
                  <h3 class="text-lg font-bold">Menu</h3>
              </div>
              <ul class="space-y-4">
                  <li>
                      <a href="{{ route('adminroom.index') }}" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('adminroom.index') ? 'bg-gray-400' : '' }}">
                          <i class="fas fa-bed"></i>
                          <span>Informasi Room</span>
                      </a>
                  </li>
                  <li>
                      <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                          <i class="fas fa-hotel"></i>
                          <span>Informasi Hotel</span>
                      </a>
                  </li>
                  <li>
                      <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                          <i class="fas fa-calendar-check"></i>
                          <span>Informasi Booking</span>
                      </a>
                  </li>
                  <li>
                      <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                          <i class="fas fa-shopping-cart mr2"></i>
                          <span>Informasi ChekOut</span>
                      </a>
                  </li>
                  <!-- Tambahkan menu lainnya sesuai kebutuhan -->
              </ul>
          </div>
          <main class="flex-1 p-8">
              @yield('content')
          </main>
      </div>
      
      <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-center text-muted text-sm-left d-block d-sm-inline-block">Copyright © 2023 Hotel Citra Megah. All rights reserved.</span>
            <span class="float-none mt-1 text-center float-sm-right d-block mt-sm-0">Hand-crafted & made with <i class="ml-1 ti-heart text-danger"></i></span>
        </div>
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
        </div>
    </footer>
  </body>
  </html>
  
{{-- </x-app-layout> --}}
