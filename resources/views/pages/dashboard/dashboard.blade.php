@extends('layout.navigation2')
@section('title')
    Dashboard
@endsection
@section('navi2')
    <div class="p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-white">
            <div class="p-10 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl">
                <form action="/dashboard" method="POST" class="space-y-4">
                    @csrf
                    <div>
                        <label class="block text-sm mb-1">Jenis Jajanan</label>
                        <select name="jenis_jajananharian"
                            class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                            <option>Bulanan</option>
                            <option>Mingguan</option>
                            <option>Harian</option>
                            <option>Tahunan</option>
                        </select>
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Nama Jajanan</label>
                        <input type="text" name="nama_barang"
                            class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Harga Jajanan</label>
                        <input type="number" name="harga"
                            class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                    </div>

                    <div>
                        <label class="block text-sm mb-1">Uang Saku</label>
                        <input type="number" name="uangsaku"
                            class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                    </div>
                    <button type="submit"
                        class="w-full py-3 mt-2 rounded-xl bg-blue-600 text-white font-semibold hover:scale-[1.02] transition">
                        Simpan
                    </button>
                </form>
            </div>
            @if ($datas)
                <div class="p-10 bg-white/10 backdrop-blur-xl border border-white/20 rounded-2xl space-y-4">

                    <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                        <p class="text-xs text-gray-400">Jenis Jajanan</p>
                        <p class="font-semibold text-white">{{ $datas->jenis_jajananharian }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                        <p class="text-xs text-gray-400">Nama Jajanan</p>
                        <p class="text-xl font-semibold wrap-break-word whitespace-normal">
                            {{ $datas->nama_barang }}
                        </p>
                    </div>

                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                            <p class="text-xs text-gray-400">Harga</p>
                            <p class="text-lg font-semibold text-white">Rp {{ number_format($datas->harga) }}</p>
                        </div>

                        <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                            <p class="text-xs text-gray-400">Uang Saku</p>
                            <p class="text-lg font-semibold text-white">Rp {{ number_format($datas->uangsaku) }}</p>
                        </div>
                    </div>

                    <div class="p-5 rounded-xl bg-linear-to-r from-cyan-400/20 to-blue-500/20 border border-cyan-400/30">
                        <p class="text-sm text-gray-200">Sisa Uang</p>
                        <p class="text-2xl font-bold text-white">
                            Rp {{ $datas->message }}
                        </p>
                    </div>

                </div>
            @endif
        </div>
    </div>
@endsection

</body>

</html>
