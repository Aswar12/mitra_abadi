<x-app-layout>
    <div class="py-12 ">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
                <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">
                    <h5>Edit Pengadaan</h5>
                    <form action="{{ route('procurements.update', $procurement->id) }}" method="POST">
        @csrf
            @method('PUT')
            <div class="grid grid-cols-2 gap-2">
                <div class="p-4">
                    <label for="name">Nama barang</label>
                    <select name="id" id="id" class="w-full p-2 border rounded shadow">
                        @foreach ($items as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="p-4">
                    <label for="order_quantity">Kuantitas</label>
                    <input type="number" name="order_quantity" id="order_quantity" class="w-full p-2 border rounded shadow" placeholder="Masukkan kuantitas barang">
                </div>
                <div class="p-4">
                    <label for="unit_price">Total Biaya</label>
                    <input type="number" name="unit_price" id="unit_price" class="w-full p-2 border rounded shadow" placeholder="Masukkan harga barang">
                </div>
                <div class="p-4">
                    <label for="demand_rate">Tanggal Pengadaan</label>
                    <input type="number" name="demand_rate" id="demand_rate" class="w-full p-2 border rounded shadow" placeholder="Masukkan Permintaan Perpriode barang">
                </div>
                    <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                        <button type="submit" class="px-4 py-2 font-bold text-white bg-black rounded">Update data</button>
                    </div>
                    <p></p>
    <x-app-layout>

