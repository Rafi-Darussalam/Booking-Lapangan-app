<x-admin>
    <form action="{{ route('admin.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="nama" placeholder="Nama Lapangan">
        <input type="number" name="harga_per_jam" placeholder="Harga Per Jam">
        <input type="text" name="tipe" placeholder="Tipe">
        <input type="text" name="lokasi" placeholder="Lokasi">
        <input type="text" name="deskripsi" placeholder="Deskripsi">
        <input type="file" name="gambar" placeholder="Gambar">

        <button type="submit">Simpan</button>
    </form>
</x-admin>