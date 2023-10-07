<x-app-layout>
    <div>
        <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                <h1 class="py-2 mb-2 text-lg font-bold text-center">Perhitungan EOQ & Reorder Point</h1>
                {{--  <div style="display: flex; justify-content: flex-end;">
                    <form action="{{ route('eoq.search') }}" method="GET">
                        <input type="text" name="keyword" placeholder="Cari item...">
                        <button type="submit">Cari</button>
                    </form>
                </div>  --}}
                <br>
                <div class="overflow-x-auto dark:bg-gray-100">
                    <table class="min-w-full border rounded-lg dark:border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 rounded-lg dark:bg-gray-100">
                                <th class="px-1 py-1 border dark:border-black">Item</th>
                                <th class="px-1 py-1 border dark:border-black">EOQ</th>
                                <th class="px-1 py-1 border dark:border-black">Reorder Point</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $item)
                            <tr class="bg-white dark:bg-gray-100">
                                <td class="px-6 py-3 border dark:border-black">{{ $item->name }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{  number_format($eoqResults[$item->name], 2)}}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $ropResults[$item->id] }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $items->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
