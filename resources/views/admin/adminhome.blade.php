{{-- <x-app-layout>
<x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('selamat datang di Admin Dashboard') }}
        </h2>
    </x-slot> --}}
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
                        <i class="fas fa-tachometer-alt"></i>
                        <span>Informasi Room</span>
                    </a>
                </li>
                
                
                <li>
                    <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                        <i class="fas fa-home"></i>
                        <span>Informasi hotel </span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                        <i class="fas fa-home"></i>
                        <span>Informasi Booking</span>
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('') ? 'bg-gray-400' : '' }}">
                        <i class="fas fa-home"></i>
                        <span>Informasi ChekOut</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="{{ route('warga.index') }}" class="flex items-center space-x-2 hover:bg-gray-400 rounded-md p-2 {{ request()->routeIs('warga.index') ? 'bg-gray-400' : '' }}">
                        <i class="fas fa-home"></i>
                        <span>Data Warga</span>
                    </a>
                </li> --}}
                <!-- Tambahkan menu lainnya sesuai kebutuhan -->
            </ul>
        </div>
        <main class="flex-1 p-8">
            @yield('content')
        </main>
    </div>
    
    {{-- <footer class="bg-gray-800 text-white py-6">
        <div class="container mx-auto px-4 text-center">
            &copy; {{ date('Y') }} Aplikasi Warga. All rights reserved.
        </div>
    </footer> --}}
</body>
</html>
{{-- </x-app-layout> --}}