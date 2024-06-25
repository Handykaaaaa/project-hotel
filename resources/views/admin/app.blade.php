<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Citra Indah</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.16/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script src="https://kit.fontawesome.com/91742e7a72.js" crossorigin="anonymous"></script>
    <style>
        .sidebar-menu {
            transition: transform 0.3s ease; /* Transisi smooth untuk transform */
        }
        .sidebar-hidden {
            transform: translateX(-100%);
        }
        .main-full {
            width: 100%;
            margin-left: 0;
        }
        .main-with-sidebar {
            width: calc(100% - 256px);
            margin-left: 256px;
        }
    </style>
</head>
<body class="text-gray-800 font-sans">
    <!-- Sidebar start -->
    <div class="fixed left-0 top-0 w-64 h-full bg-gray-900 p-4 transform transition-transform sidebar-menu">
        <a href="#" class="flex items-center pb-4 border-b border-b-gray-800">
            <img src="https://placehold.co/32x32" alt="" class="w-10 h-10 rounded object-cover">
            <span class="text-lg font-bold text-white ml-3">Hotel Citra Megah</span>
        </a>
        <ul class="mt-4">
            <li class="mb-1 group active">
                <a href="" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-800 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <i class="fa-solid fa-bed mr-3 text-lg"></i>
                    <span class="text-sm">Daftar Kamar</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{ url('show_user') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-800 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <i class="fa-solid fa-user mr-3 text-lg"></i>
                    <span class="text-sm">Daftar User</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="{{url('show_room')}}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-800 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white">
                    <i class="fa-solid fa-hotel mr-3 text-lg"></i>
                    <span class="text-sm">Tipe Kamar</span>
                </a>
            </li>
            <li class="mb-1 group">
                <a href="#" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-800 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white sidebar-dropdown-toggle">
                    <i class="fa-solid fa-bookmark mr-3 text-lg"></i>
                    <span class="text-sm">Reservasi</span>
                    <i class="fa-solid fa-chevron-right ml-auto group-[.active]:rotate-90"></i>
                </a>
                <ul class="pl-7 mt-2 hidden group-[.selected]">
                    <li class="mb-4">
                        <a href="{{ url('reservation') }}" class="text-gray-300 text-sm flex items-center hover:text-gray-100">
                            <i class="fa-solid fa-bed mr-3 text-lg"></i>
                            <span class="before:content-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3"></span>
                            Pilih Kamar
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100">
                            <i class="fa-solid fa-clock mr-3 text-lg"></i>
                            <span class="before:content-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3"></span>
                            Check In
                        </a>
                    </li>
                    <li class="mb-4">
                        <a href="#" class="text-gray-300 text-sm flex items-center hover:text-gray-100">
                            <i class="fa-solid fa-clock mr-3 text-lg"></i>
                            <span class="before:content-[''] before:w-1 before:h-1 before:rounded-full before:bg-gray-300 before:mr-3"></span>
                            Check Out
                        </a>
                    </li>
                </ul>
            </li>
            <li class="mb-1 group">
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="{{ route('logout') }}" class="flex items-center py-2 px-4 text-gray-300 hover:bg-gray-800 hover:text-gray-100 rounded-md group-[.active]:bg-gray-800 group-[.active]:text-white"
                        onclick="event.preventDefault(); this.closest('form').submit();">
                        <i class="fa-solid fa-arrow-right-from-bracket mr-3 text-lg"></i>
                        <span class="text-sm">Logout</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
    <!-- Sidebar end -->
    <main class="w-full bg-gray-50 min-h-screen transition-all main main-full md:main-with-sidebar">
        <div class="py-2 px-6 bg-white flex items-center shadow-md shadow-black/5 sticky top-0 left-0 z-30">
            <button type="button" class="text-lg text-gray-600 sidebar-toggle">
                <i class="fa-solid fa-bars"></i>
            </button>
        </div>
        <div class="p-6">
            @yield('content')
        </div>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const sidebarToggle = document.querySelector('.sidebar-toggle');
            const sidebarMenu = document.querySelector('.sidebar-menu');
            const main = document.querySelector('.main');

            function adjustMainWidth() {
                if (window.innerWidth < 768) {
                    sidebarMenu.classList.add('sidebar-hidden');
                    main.classList.remove('main-with-sidebar');
                    main.classList.add('main-full');
                } else {
                    if (!sidebarMenu.classList.contains('sidebar-hidden')) {
                        main.classList.remove('main-full');
                        main.classList.add('main-with-sidebar');
                    } else {
                        main.classList.remove('main-with-sidebar');
                        main.classList.add('main-full');
                    }
                }
            }

            // Function to toggle sidebar visibility
            function toggleSidebar() {
                sidebarMenu.classList.toggle('sidebar-hidden');
                adjustMainWidth();
            }

            // Event listener for sidebar toggle button
            sidebarToggle.addEventListener('click', function (e) {
                e.preventDefault();
                toggleSidebar();
            });

            // Event listeners for sidebar dropdown toggle
            document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (item) {
                item.addEventListener('click', function (e) {
                    e.preventDefault();
                    const parent = item.closest('.group');
                    if (parent.classList.contains('selected')) {
                        parent.classList.remove('selected');
                        parent.querySelector('ul').classList.add('hidden');
                    } else {
                        document.querySelectorAll('.sidebar-dropdown-toggle').forEach(function (i) {
                            i.closest('.group').classList.remove('selected');
                            i.closest('.group').querySelector('ul').classList.add('hidden');
                        });
                        parent.classList.add('selected');
                        parent.querySelector('ul').classList.remove('hidden');
                    }
                });
            });

            // Adjust main width initially on page load
            adjustMainWidth();

            // Re-adjust main width on window resize
            window.addEventListener('resize', adjustMainWidth);
        });
    </script>
</body>
</html>
