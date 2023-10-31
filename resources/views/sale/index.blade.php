<x-app-layout>
    <div>
        <div class="h-full mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
                <h1 class="py-2 mb-2 text-lg font-bold text-center">Daftar Penjualan</h1>
                {{-- //buatkan tombol tambah data --}}
                @if(Auth::user()->roles == 'kepala_gudang')
                <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                    <a href="/sales-create" class="px-4 py-2 font-bold text-white bg-black rounded">Tambah
                        Data</a>
                </div>
                @endif
                <div class="overflow-x-auto dark:bg-gray-100">
                    <table class="min-w-full border rounded-lg dark:border-gray-200">
                        <thead>
                            <tr class="bg-gray-100 rounded-lg dark:bg-gray-100 ">
                                <th class="px-1 py-1 border dark:border-black">No</th>
                                <th class="px-6 py-3 border dark:border-black">Nama Barang</th>
                                <th class="px-6 py-3 border dark:border-black">Jumlah Terjual</th>
                                <th class="px-6 py-3 border dark:border-black">Harga Jual</th>
                                <th class="px-6 py-3 border dark:border-black">Tanggal Penjualan</th>
                                @if (Auth::user()->roles == 'kepala_gudang')
                                <th class="px-6 py-3 border dark:border-black">Tindakan</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sales as $index => $sale)
                            <tr class="bg-white dark:bg-gray-100">
                                <td class="px-6 py-3 border dark:border-black">{{ $index+1 }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $sale->item->name }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $sale->quantity_sold }} {{
                                    $sale->item->unit }} </td>
                                <td class="px-6 py-3 border dark:border-black">{{ $sale->selling_price }}</td>
                                <td class="px-6 py-3 border dark:border-black">{{ $sale->sale_date }}</td>
                                @if (Auth::user()->roles == 'kepala_gudang')
                                <td class="justify-center px-2 py-3 border dark:border-black">
                                    <a href="/sales-edit-{{ $sale->id }}"
                                        class="inline-flex px-2 py-2 mx-1 mb-1 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg><span class="mx-1">Edit</span>
                                    </a>
                                    <form action="/sales/{{ $sale->id }}" method="POST" 
                                    onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?')"
                                    class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="inline-flex px-2 py-2 mt-1 font-bold text-white bg-red-500 rounded hover:bg-red-700">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg><span class="mx-1">Hapus</span>
                                        </button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="mt-5 text-center">
                        {{ $sales->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus data ini?');
        }
        </script>
</x-app-layout>
