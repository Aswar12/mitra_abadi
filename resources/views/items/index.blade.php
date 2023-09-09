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
                    {{-- <table class="min-w-full border rounded-lg dark:border-gray-200">
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
                                        class="flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 mx-2  rounded mb-1">
                                        <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                            <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                            <path
                                                d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                        </svg> <span class="mx-1">Edit</span>
                                    </a>
                                    <form action="/items/{{ $item->id }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
                                            class="flex bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 mx-2  rounded mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512">
                                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                                <path
                                                    d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8 7.2-16 16-16s16 7.2 16 16z" />
                                            </svg> <span class="mx-1">Hapus</span>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table> --}}

                    <div class="flex flex-col">
                        <div class="overflow-x-auto sm:-mx-6 lg:-mx-8">
                            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                                <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                                    <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-gray-50 dark:bg-gray-100">
                                            <tr>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    #
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    Nama
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    Harga
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    P.Periode
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    B.Pemesanan
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    B.Penyimpanan
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    Deskripsi
                                                </th>
                                                <th scope="col"
                                                    class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase dark:text-gray-100">
                                                    Tindakan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200 dark:bg-gray-100">
                                            @foreach ($items as $index => $item)
                                                <tr>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $index + 1 }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $item->name }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $item->unit_price }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $item->demand_rate }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $item->ordering_cost }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ $item->holding_cost }}
                                                        </div>
                                                    </td>
                                                    <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                                        <div class="text-sm text-gray-900 dark:text-gray-100">
                                                            {{ Str::limit($item->description, 20, '...') }}
                                                        </div>
                                                    </td>
                                                    <td
                                                        class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                                                        <a href="/items-edit-{{ $item->id }}"
                                                            class="flex bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-5 mx-1 justify-between rounded mb-1">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                viewBox="0 0 512 512">
                                                                <!--! Font Awesome Free 6.4.2 by @font
                                                            awesome - https://fontawesome.com License -
                                                            https://fontawesome.com/license (Commercial
                                                            License) Copyright
                                                            2023 Fonticons, Inc. -->
                                                                <path
                                                                    d="M471.6 21.7c-21.9-21.9-57.3-21.9-79.2 0L362.3 51.7l97.9 97.9 30.1-30.1c21.9-21.9 21.9-57.3 0-79.2L471.6 21.7zm-299.2 220c-6.1 6.1-10.8 13.6-13.5 21.9l-29.6 88.8c-2.9 8.6-.6 18.1 5.8 24.6s15.9 8.7 24.6 5.8l88.8-29.6c8.2-2.7 15.7-7.4 21.9-13.5L437.7 172.3 339.7 74.3 172.4 241.7zM96 64C43 64 0 107 0 160V416c0 53 43 96 96 96H352c53 0 96-43 96-96V320c0-17.7-14.3-32-32-32s-32 14.3-32 32v96c0 17.7-14.3 32-32 32H96c-17.7 0-32-14.3-32-32V160c0-17.7 14.3-32 32-32h96c17.7 0 32-14.3 32-32s-14.3-32-32-32H96z" />
                                                            </svg> Edit
                                                        </a>
                                                        <form action="/items/{{ $item->id }}" method="POST"
                                                            class="inline-block">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit"
                                                                class="flex bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-5 mx-1 justify-between rounded mt-1">
                                                                <svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                                                    viewBox="0 0 448 512">
                                                                    <!--! Font Awesome Free 6.4.2 by @font
                                                                awesome - https://fontawesome.com License -
                                                                https://fontawesome.com/license (Commercial
                                                                License) Copyright
                                                                2023 Fonticons, Inc. -->
                                                                    <path
                                                                        d="M170.5 51.6L151.5 80h145l-19-28.4c-1.5-2.2-4-3.6-6.7-3.6H177.1c-2.7 0-5.2 1.3-6.7 3.6zm147-26.6L354.2 80H368h48 8c13.3 0 24 10.7 24 24s-10.7 24-24 24h-8V432c0 44.2-35.8 80-80 80H112c-44.2 0-80-35.8-80-80V128H24c-13.3 0-24-10.7-24-24S10.7 80 24 80h8H80 93.8l36.7-55.1C140.9 9.4 158.4 0 177.1 0h93.7c18.7 0 36.2 9.4 46.6 24.9zM80 128V432c0 17.7 14.3 32 32 32H336c17.7 0 32-14.3 32-32V128H80zm80 64V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8
                                                                7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8
                                                                7.2-16 16-16s16 7.2 16 16zm80 0V400c0 8.8-7.2 16-16 16s-16-7.2-16-16V192c0-8.8
                                                                7.2-16 16-16s16 7.2 16 16z" />
                                                                </svg> Hapus
                                                            </button>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div
                                        class="px-5 py-5 bg-white border-t flex flex-col xs:flex-row items-center xs:justify-between          dark:bg-gray-100 dark:border-gray-200">
                                        <span class="text-xs xs:text-sm text-gray-900 dark:text-gray-200">
                                            Showing 1 to 4 of 50 Entries
                                        </span>
                                        <div class="inline-flex mt-2 xs:mt-0">
                                            <button
                                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-l">
                                                Prev
                                            </button>
                                            <button
                                                class="text-sm bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold py-2 px-4 rounded-r">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
</x-app-layout>
