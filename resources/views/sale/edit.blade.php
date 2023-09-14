<x-app-layout>
    <div class="py-12 ">
        <div class="mx-auto max-w-7xl h-screen sm:px-6 lg:px-4 dark:bg-gray-500">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg  min-h-screen">
                <h5>Edit Penjualann</h5>
                <form action="{{ route('sales.update',$sale->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-2">
                        <div class="p-4">
                            <label for="name">Nama barang</label>
                            <select name="item_id" id="item_id" class="w-full p-2 border rounded shadow">
                                @foreach ($items as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="p-4">
                            <label for="quantity_sold">Jumlah Terjual</label>
                            <input type="number" name="quantity_sold" id="quantity_sold"
                                value="{{ $sale->quantity_sold }}" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan Jumlah Terjual">
                        </div>
                        <div class="p-4">
                            <label for="selling_price">Harga Jual</label>
                            <input type="number" name="selling_price" id="selling_price"
                                value="{{ $sale->selling_price }}" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan harga barang">
                        </div>
                        <div class="p-4">
                            <label for="sale_date">Tanggal Terjual</label>
                            <input type="date" name="sale_date" id="sale_date"
                                value="{{ $sale->sale_date }}" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan Permintaan Perpriode barang">
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
