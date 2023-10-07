<x-app-layout>
    <div class="h-screen mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-white">
        <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-white sm:rounded-lg ">
            <h1 class="py-2 mb-2 text-lg font-bold text-center">Dashboard</h1>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <canvas id="combinedChart" width="400" height="200"></canvas>

                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var ctx = document.getElementById('combinedChart').getContext('2d');
                                        var myChart = new Chart(ctx, {
                                            type: 'bar',
                                            data: {
                                                labels: {!! json_encode($itemNames) !!},
                                                datasets: [{
                                                    label: 'Harga Satuan',
                                                    data: {!! json_encode($itemPrices) !!},
                                                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                                                    borderColor: 'rgba(75, 192, 192, 1)',
                                                    borderWidth: 1
                                                }, {
                                                    label: 'Nilai Pengadaan',
                                                    data: {!! json_encode($procurementValues) !!},
                                                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                                    borderColor: 'rgba(255, 99, 132, 1)',
                                                    borderWidth: 1
                                                }]
                                            },
                                            options: {
                                                scales: {
                                                    y: {
                                                        beginAtZero: true
                                                    }
                                                }
                                            }
                                        });
                                    });
                                </script>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
