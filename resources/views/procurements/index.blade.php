<x-app-layout>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="bg-white dark:bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg rounded-lg ">
            <h1 class="text-center text-lg font-bold mb-2 py-2">Daftar Pengadaan</h1>

            <div class="overflow-x-auto dark:bg-gray-600 justify-between">
                <table class="w-full border-2 dark:border-gray-300 rounded-lg ">
                    <thead>
                        <tr class="bg-gray-100 dark:bg-gray-100 rounded-lg ">
                            <th class="border px-6 py-3 dark:border-black">No</th>
                            <th class="border px-6 py-3 dark:border-black">Item</th>
                            <th class="border px-6 py-3 dark:border-black">Kuantitas</th>
                            <th class="border px-6 py-3 dark:border-black">Total Biaya</th>
                            <th class="border px-6 py-3 dark:border-black">Tanggal Pengadaan</th>
                            <th class="px-6 py-3 border dark:border-black">Tindakan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($procurements as $index => $procurement)
                        <tr class="bg-white dark:bg-gray-600">
                            <td class="border px-6 py-3 dark:border-white">{{ $index + 1 }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->item->name }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->order_quantity }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->total_cost }}</td>
                            <td class="border px-6 py-3 dark:border-white">{{ $procurement->procurement_date }}</td>
                            <td>
                                <a href="/procurements-edit-{{ $procurement->id }}" class="btn btn-primary">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="/procurements-{{ $procurement->id }}" method="POST" class="inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">
                                        <i class="fas fa-trash"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-app-layout>
<h6>Daftar Pengadaan</h6>

<div class="py-12 ">
    <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">
            <h1 class="py-2 mb-2 text-lg font-bold text-center">Daftar Pengadaan</h1>
            {{-- //buatkan tombol tambah data --}}
            <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                <a href="/procurement-create" class="px-4 py-2 font-bold text-white bg-black rounded">Tambah Data</a>
            </div>
            <div class="py-12 ">


            </div>



            @endsection()