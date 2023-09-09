<x-app-layout>

    <h1>Detail Item</h1>
    <p>Nama: {{ $item->name }}</p>
    <p>Deskripsi: {{ $item->description }}</p>
    <p>Harga: {{ $item->unit_price }}</p>
    <a href="/items">Kembali ke Daftar Item</a>
    
<x-app-layout>