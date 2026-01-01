@extends('layout.navigation2')
@section('title')
    History
@endsection
@section('navi2')
    <div class="flex flex-col justify-start  p-5 ">
    @if ($data1->isEmpty())
 <div class="mt-10 p-10 text-center">
            <p class="text-2xl font-semibold text-white">
                Belum ada data history
            </p>
            <p class="text-xl text-gray-400 mt-2">
                Silakan tambahkan data terlebih dahulu
            </p>
        </div>
    @else
        @foreach ($data1 as $data)
            <div class="p-10 bg-white/10 md:w-150 md:mr-0 mr-5 mb-5 mt-5 backdrop-blur-xl border border-white/20 rounded-2xl space-y-4">
                <div class="p-3">
                    <form action="{{ route('history.delete', ['id' => $data->id]) }}" method="POST"
                        class="absolute top-4 right-4">
                        @csrf
                        @method('DELETE')
                        <button type="submit"
                            class="text-xs px-3 py-1 rounded-lg border border-red-400/40 text-white hover:bg-red-400/10">
                            Hapus
                        </button>
                        <a href="{{ route('history.edit', ['id' => $data->id]) }}"
                            class="text-xs px-3 py-1 rounded-lg border border-red-400/40 text-white hover:bg-red-400/10">
                            Edit
                        </a>
                    </form>
                </div>

                <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                    <p class="text-xs text-gray-400">Jenis Jajanan</p>
                    <p class="font-semibold text-white">{{ $data->jenis_jajananharian }}</p>
                </div>

                <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                    <p class="text-xs text-gray-400">Nama Jajanan</p>
 <p class="text-xl font-semibold text-white wrap-break-word whitespace-normal">
        {{ $data->nama_barang }}
    </p>                  </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                        <p class="text-xs text-gray-400">Harga</p>
                        <p class="text-lg font-semibold text-white">Rp {{ number_format($data->harga) }}</p>
                    </div>

                    <div class="p-4 rounded-xl bg-black/30 border border-white/20">
                        <p class="text-xs text-gray-400">Uang Saku</p>
                        <p class="text-lg font-semibold text-white">Rp {{ number_format($data->uangsaku) }}</p>
                    </div>
                </div>

                <div class="p-5 rounded-xl bg-linear-to-r from-cyan-400/20 to-blue-500/20 border border-cyan-400/30">
                    <p class="text-sm text-gray-200">Sisa Uang</p>
                    <p class="text-2xl font-bold text-white">
                        Rp {{ $data->message }}
                    </p>
                </div>

            </div>
        @endforeach
    @endif
    </div>
@endsection


