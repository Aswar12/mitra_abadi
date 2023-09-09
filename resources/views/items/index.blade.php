<x-app-layout>
    <div>
        <div class="mx-auto max-w-7xl sm:px-6 h-full lg:px-4 dark:bg-white">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                <h1 class="py-2 mb-2 text-lg font-bold text-center">Daftar Barang</h1>
                {{-- //buatkan tombol tambah data --}}
                <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                    <a href="/items-create" class="px-4 py-2 font-bold text-white bg-black rounded">Tambah Data</a>
                </div>
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
                                <th class="px-6 py-3 border dark:border-black">Deskripsi</th>
                                <th class="px-6 py-3 border dark:border-black">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($items as $index => $item)
                            <tr class="bg-white dark:bg-gray-100">
                                <td class="px-6 py-3 border dark:border-black">{{ $index + 1 }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $item->name }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $item->unit_price }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $item->demand_rate }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $item->ordering_cost }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $item->holding_cost }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ Str::limit($item->description
                                    ,20,'...') }}</td>
                                <td class="px-6 py-3 border dark:border-black">
                                    <a href="/items-edit-{{ $item->id }}"
                                        class="inline-block bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                        <i class="fas fa-edit"></i> Edit
                                    </a>
                                    <form action="/items/{{ $item->id }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-block bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 mx-2 rounded">
                                            <i class="fas fa-trash"></i> Hapus
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>