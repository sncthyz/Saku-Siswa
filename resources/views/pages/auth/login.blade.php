<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" />


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/fontawesome.min.css"
        integrity="sha512-M5Kq4YVQrjg5c2wsZSn27Dkfm/2ALfxmun0vUE3mPiJyK53hQBHYCVAtvMYEC7ZXmYLg8DVG4tF8gD27WmDbsg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css"
        integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Orbitron:wght@400..900&family=Outfit:wght@600&family=Oxanium:wght@200..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">

</head>

<body
    style="background: #017ECE;
background: linear-gradient(180deg, rgba(1, 126, 206, 1) 0%, rgba(1, 18, 70, 1) 100%); font-family: 'outfit', sans-serif;">
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <div class="flex min-h-screen  items-center justify-center pt-20 pb-20 ">
        <div class="relative p-5 pt-20 bg-[#02020281] w-120 rounded-2xl text-white">
            <img src="{{ asset(path: 'images/logo.png') }}" alt=""
                class="absolute -top-9 left-1/2 -translate-x-1/2 size-25 bg-[#0e0920] p-3 rounded-3xl shadow-lg" />
            <h1 class=" text-center poopins pt-3 text-4xl">Sign In</h1>
            <p class=" text-center text-s text-blue-300 mb-3 w-100 mx-auto mt-3">Silakan masuk menggunakan akun Anda
                untuk melanjutkan.</p>

            <div class=" flex justify-center pt-3">
                <form action="/login" method="POST">
                    @csrf
                    <div class=" mt-3">
                        <input type="text"
                            class="bg-[#0e0920] border-2 border-[#20163b] text-gray-300 rounded-lg p-2 w-100"
                            name="email" placeholder="Email" required autofocus>

                        @error('email')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mt-3">

                        <input type="password"
                            class="bg-[#0e0920] border-2 border-[#20163b] text-gray-300 rounded-lg p-2 w-100"
                            name="password" placeholder="Password" required autofocus>
                        @error('password')
                            <p class="text-red-400 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="">
                        <a href="/forgot-password" class="float-end text-blue-500 p-1">Forgot Password?</a>
                    </div>
                    <button type="submit" class="bg-blue-800 p-3 mt-5 w-100 text-white font-bold rounded-xl">Sign
                        In</button>
                </form>
            </div>
            <h1 class="text-center pt-5 font-bold">Don't Have Account? <a href="/register" class="text-blue-600">Sign
                    Up</a> </h1>


        </div>

    </div>

</body>

</html>

