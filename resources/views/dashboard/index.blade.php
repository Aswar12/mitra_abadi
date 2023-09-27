<x-app-layout>
    <div class="h-screen mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
            <h1 class="py-2 mb-2 text-lg font-bold text-center">Dashboard</h1>

                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <h1>Selamat Datang di Dashboard</h1>
                                    <p>Di sini Anda dapat melihat informasi dari seluruh tabel.</p>

                                    <h2>Data Barang</h2>
                                    <table class="min-w-full border rounded-lg dark:border-gray-200">
                                        <thead>
                                            <tr  class="bg-gray-100 rounded-lg dark:bg-gray-100 ">
                                                <th class="px-1 py-1 border dark:border-black">Nama</th>
                                                <th class="px-1 py-1 border dark:border-black">Deskripsi</th>
                                                <th class="px-1 py-1 border dark:border-black">Harga Satuan</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($items as $item)
                                                <tr class="bg-white dark:bg-gray-100">
                                                    <td class="px-6 py-3 border dark:border-black">{{ $item->name }}</td>
                                                    <td class="px-6 py-3 border dark:border-black">{{ $item->description }}</td>
                                                    <td class="px-6 py-3 border dark:border-black">{{ $item->unit_price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>

                                    <!-- Tambahkan tabel dan data lainnya sesuai dengan kebutuhan -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</x-app-layout>
