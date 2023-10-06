<x-app-layout>
    <div>
        <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                <h1 class="py-2 mb-2 text-lg font-bold text-center">Perhitungan EOQ</h1>
                <table class="table">
                    <div class="overflow-x-auto dark:bg-gray-100">
                        <table class="min-w-full border rounded-lg dark:border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 rounded-lg dark:bg-gray-100 ">
                                    <th class="px-1 py-1 border dark:border-black">Item</th>
                                    <th class="px-1 py-1 border dark:border-black">EOQ</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($eoqResults as $itemName => $eoq)
                                <tr class="bg-white dark:bg-gray-100">
                                    <td class="px-6 py-3 border dark:border-black">{{ $itemName }}</td>
                                    <td class="px-6 py-3 border dark:border-black">{{ $eoq }}</td>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
            </div>
            <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
                <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                    <h1 class="py-2 mb-2 text-lg font-bold text-center">Perhitungan Reorder Point</h1>
                    <table class="table">
                        <div class="overflow-x-auto dark:bg-gray-100">
                            <table class="min-w-full border rounded-lg dark:border-gray-200">
                                <thead>
                                    <tr class="bg-gray-100 rounded-lg dark:bg-gray-100 ">
                                         <th class="px-1 py-1 border dark:border-black">Item</th>
                                        <th class="px-1 py-1 border dark:border-black">Reorder Point</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($ropResults as $procurementName => $rop)
                                        <td class="px-6 py-3 border dark:border-black">{{ $procurementName }}</td>
        
                                    <td class="px-6 py-3 border dark:border-black">{{ $rop }}</td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                </div>
            </div>

</x-app-layout>