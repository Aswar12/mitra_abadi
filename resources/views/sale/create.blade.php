<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 h-full lg:px-4 dark:bg-white">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
            <h1 class="py-2 mb-2 text-lg font-bold text-center">Daftar Penjualan</h1>
            <div class="overflow-x-auto dark:bg-gray-100">
                <form action="{{ route('sale.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        
                        <div class="p-4">
                            <label for="name">Nama Barang</label>
                            <select name="item_id" id="item_id" class="w-full p-2 border rounded shadow">
                                @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="p-4">
                            <label for="quantity_sold">Jumlah Terjual</label>
                            <input type="number" name="quantity_sold" id="quantity_sold"
                                class="w-full p-2 border rounded shadow" placeholder="Masukkan Jumlah Terjual">
                        </div>
                        <div class="p-4">
                            <label for="selling_price">Harga Jual</label>
                            <input type="number" name="selling_price" id="selling_price"
                                class="w-full p-2 border rounded shadow" placeholder="Masukkan Jumlah Terjual">
                        </div>
                        <div class="p-4">
                            <label for="sale_date">Tanggal Terjual</label>
                            <input type="date" date="sale_date" id="sale_date"
                                class="w-full p-2 border rounded shadow" placeholder="Masukkan Tanggal Terjual">
                        </div>
                        <div class="p-4">
                            <button type="submit" class="px-4 py-2 text-white bg-black rounded">Simpan Barang</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-app-layout>