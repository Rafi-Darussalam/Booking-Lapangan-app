<x-admin>
    <form action="{{ route('lapangan.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama" placeholder="Nama Lapangan">
        <input type="number" name="harga_per_jam" placeholder="Harga Per Jam">
        <input type="text" name="tipe" placeholder="Tipe">
        <input type="text" name="lokasi" placeholder="Lokasi">
        <input type="text" name="deskripsi" placeholder="Deskripsi">
        <input type="text" name="status" placeholder="Status">
        <input type="file" name="gambar" placeholder="Gambar">

        <button type="submit">Simpan</button>
    </form>
    <section>
        <div class="grid grid-cols-[repeat(auto-fill,minmax(12rem,12rem))] gap-4 justify-center">
            @foreach ($datas as $data)
                <div class="relative w-[12rem] rounded-md overflow-hidden flex flex-col border border-gray-300">
                    <div class="w-full h-[10rem] relative">
                        <img src="{{ asset($data->gambar) }}" alt="" class="w-full h-full object-cover absolute bg-gray-400">
                        <div class="absolute w-full h-full bg-black opacity-5 z-[2]"></div>
                        <div class="relative  px-[0.7rem] py-[0.4rem] w-fit">
                            <div class="bg-[#0052FF] px-[0.5rem] rounded-full text-white">
                                <p>{{ ucfirst($data->status) }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col bg-white p-3 gap-2">
                        <div class="flex justify-between gap-7">
                            <div class="flex-1">
                                <h2 class="text-[1.2rem] font-bold">{{ ucfirst($data->nama) }}</h2>
                            </div>
                            <div class="flex-1 flex flex-col">
                                <p class="text-[1.2rem] text-[#0052FF] font-bold text-end">{{ "$" . $data->harga_per_jam }}</p>
                                <p class="text-[0.8rem] text-end text-gray-400">Per Jam</p>
                            </div>
                        </div>
                        <div class="flex gap-3 justify-between">
                            <div>
                                <a href="{{ route('lapangan.show', $data->id) }}" class="bg-gray-100 px-6 py-2 rounded-md">Details</a>
                            </div>
                            <div>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="icon icon-tabler icons-tabler-outline icon-tabler-pencil"><path stroke="none" d="M0 0h24v24H0z" fill="none" /><path d="M4 20h4l10.5 -10.5a2.828 2.828 0 1 0 -4 -4l-10.5 10.5v4" /><path d="M13.5 6.5l4 4" /></svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
</x-admin>