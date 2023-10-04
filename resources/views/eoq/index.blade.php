<x-app-layout>
    <div>
        <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                <h1 class="py-2 mb-2 text-lg font-bold text-center">Perhitungan EOQ</h1>
                <div class="overflow-x-auto dark:bg-gray-100">
                    <table class="min-w-full border rounded-lg dark:border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 rounded-lg dark:bg-gray-100 ">
                                <th class="px-1 py-1 border dark:border-black">#</th>
                                <th class="px-6 py-3 border dark:border-black">Nama</th>
                                <th class="px-6 py-3 border dark:border-black">Harga</th>
                                <th class="px-6 py-3 border dark:border-black">P.Periode</th>
                                <th class="px-6 py-3 border dark:border-black">B.Pemesanan</th>
                                <th class="px-6 py-3 border dark:border-black">B.Penyimpanan</th>
                                <th class="px-6 py-3 border dark:border-black">Perhitungan EOQ</th>
                        </thead>
                        <tbody>
                            @foreach ($pakedia as $item)
                                <tr class="bg-white dark:bg-gray-100">
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->id }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->name }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->unit_price }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->demand_rate }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->ordering_cost }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $item->holding_cost }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $eoq }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>

</x-app-layout>
