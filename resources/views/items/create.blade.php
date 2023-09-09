<x-app-layout>
    <div class="mx-auto max-w-7xl sm:px-6 h-full lg:px-4 dark:bg-white">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
            <h1 class="py-2 mb-2 text-lg font-bold text-center">Daftar Barang</h1>
            <div class="overflow-x-auto dark:bg-gray-100">
                <form action="{{ route('items.store') }}" method="POST" class="p-4">
                    @csrf
                    <div class="grid grid-cols-2 gap-4">
                        <div class="p-4">
                            <label for="name">Nama barang</label>
                            <input type="text" name="name" id="name" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan nama barang">
                        </div>
                        <div class="p-4">
                            <label for="description">Deskripsi</label>
                            <textarea type="text" name="description" id="description"
                                class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan deskripsi barang"> </textarea>
                        </div>
                        <div class="p-4">
                            <label for="unit_price">Harga Barang</label>
                            <input type="number" name="unit_price" id="unit_price"
                                class="w-full p-2 border rounded shadow" placeholder="Masukkan harga barang">
                        </div>
                        <div class="p-4">
                            <label for="demand_rate">Permintaan Periode</label>
                            <input type="number" name="demand_rate" id="demand_rate"
                                class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan Permintaan Perpriode barang">
                        </div>
                        <div class="p-4">
                            <label for="ordering_cost">Biaya Pemesanan</label>
                            <input type="number" name="ordering_cost" id="ordering_cost"
                                class="w-full p-2 border rounded shadow" placeholder="Masukkan Biaya Pemesanan barang">
                        </div>
                        <div class="p-4">
                            <label for="holding_cost">Biaya Penyimpan</label>
                            <input type="number" name="holding_cost" id="holding_cost"
                                class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan Biaya Penyimpanan barang">
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