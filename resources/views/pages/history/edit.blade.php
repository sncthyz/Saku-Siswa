@extends('layout.navigation2')
@section('title')
    Edit
@endsection
@section('navi2')
    <div class="flex justify-center pb-10 text-white">
        <div class="p-10 bg-white/10 backdrop-blur-xl w-100 border border-white/20 rounded-2xl">
            <form action="{{ route('history.update', $data->id) }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label class="block text-sm mb-1">Jenis Jajanan</label>
                    <select name="jenis_jajananharian"
                        class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                        <option value="Bulanan" {{ $data->jenis_jajananharian == 'Bulanan' ? 'selected' : '' }}>Bulanan</option>
                        <option value="Mingguan" {{ $data->jenis_jajananharian == 'Mingguan' ? 'selected' : '' }}>Mingguan</option>
                        <option value="Harian" {{ $data->jenis_jajananharian == 'Harian' ? 'selected' : '' }}>Harian</option>
                        <option value="Tahunan" {{ $data->jenis_jajananharian == 'Tahunan' ? 'selected' : '' }}>Tahunan</option>
                    </select>
                </div>

                <div>
                    <label class="block text-sm mb-1">Nama Jajanan</label>
                    <input type="text" name="nama_barang" value="{{ $data->nama_barang }}"
                        class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                </div>

                <div>
                    <label class="block text-sm mb-1">Harga Jajanan</label>
                    <input type="number" name="harga" value="{{ $data->harga }}"
                        class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                </div>

                <div>
                    <label class="block text-sm mb-1">Uang Saku</label>
                    <input type="number" name="uangsaku" value="{{ $data->uangsaku }}"
                        class="w-full rounded-xl bg-black/30 border border-white/20 px-4 py-2 focus:outline-none focus:ring-2 focus:ring-cyan-400">
                </div>
                <button type="submit"
                    class="w-full py-3 mt-2 rounded-xl bg-blue-600 text-white font-semibold">
                    Simpan
                </button>
            </form>
</div>
    </div>
@endsection
