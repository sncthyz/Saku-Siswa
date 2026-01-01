@extends('layout.navigation')
@section('contents')
    <div class="flex min-h-screen lg:pt-30 pt-20 justify-center" id="home">
        <div class="text-center" style="font-family: 'open-sans',sans-serif">
            <h1 class="lg:text-6xl text-5xl font-bold text-white orbitron">
                Manajemen Keuangan Siswa
            </h1>

            <h2 class="lg:text-4xl text-2xl text-blue-300 font-bold mt-3">
                Edukasi Finansial dalam Genggaman
            </h2>
            <p class="text-gray-300 mt-5 poppins max-w-2xl mx-auto">
                Membantu siswa belajar mengelola uang saku, mencatat pengeluaran, dan membentuk kebiasaan finansial
                yang bertanggung jawab sejak dini.
            </p>
            <div class="flex justify-center space-x-3 mt-8 mb-5 ">
                <div class="bg-[#ffffff] p-3 w-50  rounded-xl">
                    <a href="/login" class=" font-bold ">Get Started</a>
                </div>
                <div class="bg-[#ffffff23] p-3  rounded-xl border-2 border-[#8672f7] w-50">
                    <a href="#tentang" class="text-white font-bold ">Read More</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="flex justify-center pt-50 animasi" id="tentang">
        <div class="p-3 text-center space-y-5">
            <h1 class="text-white font-bold text-4xl">Tentang Saku Siswa</h1>
            <p class="lg:w-150 w-100 text-white">Saku Siswa adalah platform digital yang
                dirancang untuk membantu siswa dalam mengelola uang saku secara lebih teratur, transparan, dan bertanggung
                jawab.
                Melalui Saku Siswa, siswa dapat mencatat pemasukan dan pengeluaran harian dengan mudah, sehingga kebiasaan
                mengatur keuangan bisa dibangun sejak dini.

                Aplikasi ini juga membantu orang tua dan pihak sekolah dalam memantau penggunaan uang saku secara aman dan
                terstruktur. Dengan tampilan yang sederhana dan mudah digunakan, Saku Siswa menjadi solusi modern untuk edukasi
                literasi keuangan di lingkungan sekolah.</p>


        </div>
    </div>

    <div class="flex pt-50 animasi" id="keunggulan">
        <div class="p-3 text-center space-y-5">
            <h1 class="text-white font-bold text-4xl">Keunggulan</h1>
            <div class="grid lg:grid-cols-3 grid-cols-1  gap-5 p-5 justify-center items-center pt-10">
                <div class="p-5 border-[#007CCC] border-2 text-center  w-auto rounded-2xl">
                    <div class="border-[#007CCC] border-2 w-20 mx-auto p-4 rounded-2xl"
                        style="background: #007CCC;
background: linear-gradient(180deg, rgba(0, 124, 204, 1) 0%, rgba(0, 14, 53, 1) 100%);">
                        <i class="fa-solid fa-wallet text-white text-3xl"></i>
                    </div>
                    <h1 class="text-white font-bold text-2xl mt-3">Monitoring Uang Saku</h1>
                    <p class="text-white mt-3">Memantau pemasukan dan pengeluaran uang siswa secara real-time.</p>

                </div>
                <div class="p-5 border-[#007CCC] border-2 text-center  w-auto rounded-2xl">
                    <div class="border-[#007CCC] border-2 w-20 mx-auto p-4 rounded-2xl"
                        style="background: #007CCC;
background: linear-gradient(180deg, rgba(0, 124, 204, 1) 0%, rgba(0, 14, 53, 1) 100%);">
                        <i class="fa-solid fa-inbox text-white text-4xl"></i>

                    </div>
                    <h1 class="text-white font-bold text-2xl mt-3">Pencatatan Transaksi</h1>
                    <p class="text-white mt-3 text-sm">Mencatat setiap pengeluaran harian, mingguan, bulanan, maupun tahunan dengan rapi dan
                        terstruktur.</p>

                </div>
                <div class="p-5 border-[#007CCC] border-2 text-center  w-auto rounded-2xl">
                    <div class="border-[#007CCC] border-2 w-20 mx-auto p-4 rounded-2xl"
                        style="background: #007CCC;
background: linear-gradient(180deg, rgba(0, 124, 204, 1) 0%, rgba(0, 14, 53, 1) 100%);">
                        <i class="fa-solid fa-receipt text-white text-3xl"></i>
                    </div>
                    <h1 class="text-white font-bold text-xl mt-3">Kontrol & Manajemen Keuangan</h1>
                    <p class="text-white mt-3">Membantu siswa mengatur uang saku agar lebih hemat dan terencana.</p>

                </div>
                <div class="p-5 border-[#007CCC] border-2 text-center  w-auto rounded-2xl">
                    <div class="border-[#007CCC] border-2 w-20 mx-auto p-4 rounded-2xl"
                        style="background: #007CCC;
background: linear-gradient(180deg, rgba(0, 124, 204, 1) 0%, rgba(0, 14, 53, 1) 100%);">
                        <i class="fa-solid fa-file-invoice-dollar text-white text-3xl"></i>
                    </div>
                    <h1 class="text-white font-bold text-2xl mt-3">Laporan Keuangan</h1>
                    <p class="text-white mt-3">Menyediakan riwayat dan laporan penggunaan uang yang mudah dipahami.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="pt-30 p-3 animasi" id="contact">
        <div class="text-center pt-5">
            <h1 class="text-white font-bold text-5xl">Informasi & <span class="text-blue-400">Kontak</span> </h1>
            <p class="md:w-150 pt-5 text-s mx-auto text-white">Yuk, terhubung dengan Saku Siswa Dapatkan info terbaru dan
                dukungan terbaik untuk membantu siswa mengatur uang saku dengan lebih mudah.</p>
        </div>
        <div class="md:flex md:space-y-0 space-y-5 justify-center space-x-5 pt-10">
            <div
                class="backdrop-blur-xl bg-black border border-white/10 rounded-2xl p-6 hover:border-blue-400/40 transition glow">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                        📞
                    </div>
                    <div>
                        <p class="text-sm text-white">Nomor Telepon</p>
                        <p class="font-semibold tracking-wide text-white">+62 887-1729-638</p>
                    </div>
                </div>
            </div>
            <div
                class="backdrop-blur-xl bg-black border border-white/10 rounded-2xl p-6 hover:border-blue-400/40 transition glow">
                <div class="flex items-center gap-4">
                    <div class="w-12 h-12 rounded-xl bg-blue-500/20 flex items-center justify-center">
                        📩
                    </div>
                    <div>
                        <p class="text-sm text-white">Email</p>
                        <p class="font-semibold tracking-wide text-white">sakusiswa@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-black mb-10 rounded-xl md:w-150 mt-5 mx-auto md:h-100 justify-center text-white p-5">
            <form action="/" method="POST" class="space-y-6 pt-5 p-4">
                @csrf
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <input type="email" name="email" placeholder="Email"
                        class="w-full rounded-xl bg-white/5 border border-white/10
                 px-5 py-3 outline-none focus:border-blue-400
                 transition-all" />

                    <input type="text" name="subject" placeholder="Subjek"
                        class="w-full rounded-xl bg-white/5 border border-white/10
                 px-5 py-3 outline-none focus:border-blue-400
                 transition-all" />
                </div>

                <input type="text" name="pesan" placeholder="Pesan"
                    class="w-full h-32 mt-5 rounded-xl bg-white/5 border border-white/10
         px-5 py-4 outline-none focus:border-blue-400
         transition-all" />

                <button class="bg-blue-700 text-white text-center p-3 rounded-xl mt-5 w-full" type="submit">Submit</button>

            </form>

        </div>
    </div>
@endsection
