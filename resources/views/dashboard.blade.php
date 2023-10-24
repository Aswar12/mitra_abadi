<x-app-layout>
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

</x-app-layout>
