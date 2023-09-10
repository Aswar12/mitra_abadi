<x-app-layout>


<h6>Penjualan</h6>

<div class="py-12 ">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="bg-white dark:bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg rounded-lg ">
            <h1 class="text-center text-lg font-bold mb-2 py-2">Penjualan</h1>

            <div class="overflow-x-auto dark:bg-gray-600 justify-between">
                <table class="w-full border-2 dark:border-gray-300 rounded-lg ">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-100 rounded-lg ">
                            <th class="border px-6 py-3 dark:border-black">No</th>
                            <th class="border px-6 py-3 dark:border-black">Nama Barang</th>
                            <th class="border px-6 py-3 dark:border-black">Jumlah Terjual</th>
                            <th class="border px-6 py-3 dark:border-black">Harga Jual</th>
                            <th class="border px-6 py-3 dark:border-black">Tanggal Terjual</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sales as $index => $sales)
                        <tr class="bg-white dark:bg-gray-600">
                            <td class="border px-6 py-3 dark:border-white">{{ $index + 1 }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $sales->item->name }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $sales->quantity_sold }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $sales->selling_price }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $sales->sale_date }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


</x-app-layout>

