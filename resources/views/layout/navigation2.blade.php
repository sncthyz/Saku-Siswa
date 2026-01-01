<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" />
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btnn = document.getElementById('tombol');
            const menu = document.getElementById('menu_bar');
            const icon = document.getElementById('menu-icon');
            btnn.addEventListener('click', () => {
                menu.classList.toggle('hidden');
                if (menu.classList.contains('hidden')) {
                    icon.classList.remove('fa-xmark');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-xmark');
                }

            });
        });
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&display=swap"
        rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class=" bg-linear-to-br
    from-[#020824]
    via-[#0b3ea8]
    to-[#1e90ff]
">
    <div>
        <div>
            <ul class="flex items-center p-5">
                <li class="flex items-center gap-3">
                    <img src="{{ url('images/logo.png') }}" alt="Logo" class="size-15">

                    <h1 class="text-2xl tracking-tight text-white font-extrabold">
                        Saku
                        <span class="bg-linear-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                            Siswa
                        </span>
                    </h1>
                </li>
                <li class="ml-auto flex items-center space-x-6 p-3 " style="font-family:'Roboto', sans-serif">
                    <div class="hidden md:flex space-x-6 p-3 rounded-4xl">
                        <a href="/dashboard"
                            class="text-white poopins hover:bg-[#010E3A]  p-2 w-30 text-center hover:rounded-xl ">Dashboard</a>
                        <a href="/history"
                            class="text-white poopins hover:bg-[#010E3A]  p-2 w-20 text-center hover:rounded-xl ">History</a>
                        <p class="text-white poopins bg-[#010E3A] rounded-2xl  block p-2 w-20 text-center font-bold ">
                            {{ Auth::user()->name }}</p>
                        <a href="/logout" class=" font-bold text-md bg-[#ffffff] p-2  rounded-xl"
                            style="font-family:'Inter', sans-serif">Logout</a>
                    </div>
                    <button id="tombol" class="md:hidden text-white focus:outline-none">
                        <i id="menu-icon" class="fa-solid fa-bars"></i> </button>
                </li>

            </ul>
            <div id="menu_bar" class="hidden md:hidden bg-[#00144F] px-4 p-3 pb-4">
                <a href="/dashboard"
                    class="text-white poopins hover:bg-[#010E3A]  block p-2 w-20 hover:rounded-xl ">Dashboard</a>
                <a href=""
                    class="text-white poopins hover:bg-[#010E3A]  block p-2 w-20 hover:rounded-xl ">History</a>

                <p class="text-white poopins bg-[#010E3A] mb-5 rounded-2xl text-center  block p-2 w-20 hover:rounded-xl ">{{ Auth::user()->name }}</p>
                <a href="/logout" class=" font-bold text-md bg-[#ffffff] p-2 ml-2 mt-5  rounded-xl"
                    style="font-family:'Inter', sans-serif">Logout</a>
            </div>
            @yield('contents')
        </div>
    </div>

    @yield( 'navi2')
<div>

</div>
 <footer class="relative bg-[#001450] text-white">
        <div
            class="absolute -top-32 left-1/2 -translate-x-1/2 w-125 h-125
              bg-blue-500/20 rounded-full blur-3xl">
        </div>

        <div class="relative max-w-7xl mx-auto px-8 py-20
              grid grid-cols-1 md:grid-cols-2 gap-12">

            <div>
                <h1 class="text-2xl font-extrabold tracking-tight">
                    Saku
                    <span class="bg-linear-to-r from-blue-400 to-cyan-400 bg-clip-text text-transparent">
                        Siswa
                    </span>
                </h1>

                <p class="text-gray-400 mt-4 leading-relaxed">
                    Saku Siswa adalah platform digital yang
                    dirancang untuk membantu siswa dalam mengelola uang saku secara lebih teratur, transparan, dan
                    bertanggung
                    jawab.
                    Melalui Saku Siswa, siswa dapat mencatat pemasukan dan pengeluaran harian dengan mudah, sehingga
                    kebiasaan
                    mengatur keuangan bisa dibangun sejak dini.
                </p>


            </div>

            <div class="">
                <h2 class="text-xl font-semibold mb-4">Explore</h2>
                <ul class="space-y-3 text-gray-400">
                    <li>
                        <a href="/dashboard" class="hover:text-white transition">Dashboard</a>
                    </li>
                    <li>
                        <a href="/history" class="hover:text-white transition">History</a>
                    </li>
                </ul>
            </div>

        </div>

        <div class="border-t border-white/10 text-center py-6 text-sm text-gray-500">
            © {{ date('Y') }} Saku Siswa All rights reserved.
        </div>
    </footer>

</body>

</html>
