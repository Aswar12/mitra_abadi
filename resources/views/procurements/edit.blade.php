<x-app-layout>
    <div class="py-12 ">
        <div class="mx-auto max-w-7xl h-screen sm:px-6 lg:px-4 dark:bg-gray-500">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg  min-h-screen">
                <h5>Edit Pengadaan</h5>
                <form action="{{ route('procurements.update',$procurement->id) }}" method="POST">
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
                            <label for="order_quantity">Kuantitas</label>
                            <input type="number" name="order_quantity" id="order_quantity"
                                value="{{ $procurement->order_quantity }}" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan kuantitas barang">
                        </div>
                        <div class="p-4">
                            <label for="total_cost">Total Biaya</label>
                            <input type="number" name="total_cost" id="total_cost"
                                value="{{ $procurement->total_cost }}" class="w-full p-2 border rounded shadow"
                                placeholder="Masukkan harga barang">
                        </div>
                        <div class="p-4">
                            <label for="procurement_date">Tanggal Pengadaan</label>
                            <input type="date" name="procurement_date" id="procurement_date"
                                value="{{ $procurement->procurement_date }}" class="w-full p-2 border rounded shadow"
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