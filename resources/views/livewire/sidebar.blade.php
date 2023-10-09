
<div class="top-0 left-0 flex w-48 h-full min-h-[40rem] px-4 mt-16 text-white bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <ul class="h-auto pt-8 space-y-4 ">
        <!-- Menu Navigasi -->
        @if(Auth::user()->roles == 'kepala_cabang')
        <li>
            <a href="{{ route('dashboard') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                    xmlns="http://www.w3.org/2000/svg">
                    <!-- Icon Dashboard -->
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M3 10h18M3 6h18M3 14h18M3 18h18"></path>
                </svg>
                <span>Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('eoq.index') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z" />
                </svg>
                <!-- Icon Items -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2c4.4183 0 8 3.5817 8 8 0 1.448 0 6-8 12-8-6-8-10.552-8-12 0-4.4183 3.5817-8 8-8z">
                </path>
                </svg>
                <span>Perhitungan Metode</span>
            </a>
        </li>
        @endif


        <li>
            <a href="{{ route('items.index') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M0 488V171.3c0-26.2 15.9-49.7 40.2-59.4L308.1 4.8c7.6-3.1 16.1-3.1 23.8 0L599.8 111.9c24.3 9.7 40.2 33.3 40.2 59.4V488c0 13.3-10.7 24-24 24H568c-13.3 0-24-10.7-24-24V224c0-17.7-14.3-32-32-32H128c-17.7 0-32 14.3-32 32V488c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24zm488 24l-336 0c-13.3 0-24-10.7-24-24V432H512l0 56c0 13.3-10.7 24-24 24zM128 400V336H512v64H128zm0-96V224H512l0 80H128z" />
                </svg>
                <!-- Icon Items -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2c4.4183 0 8 3.5817 8 8 0 1.448 0 6-8 12-8-6-8-10.552-8-12 0-4.4183 3.5817-8 8-8z">
                </path>
                </svg>
                <span>Barang</span>
            </a>
        </li>
        <li>
            <a href="{{ route('procurements.index') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M152.1 38.2c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 113C-2.3 103.6-2.3 88.4 7 79s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zm0 160c9.9 8.9 10.7 24 1.8 33.9l-72 80c-4.4 4.9-10.6 7.8-17.2 7.9s-12.9-2.4-17.6-7L7 273c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l22.1 22.1 55.1-61.2c8.9-9.9 24-10.7 33.9-1.8zM224 96c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zm0 160c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H256c-17.7 0-32-14.3-32-32zM160 416c0-17.7 14.3-32 32-32H480c17.7 0 32 14.3 32 32s-14.3 32-32 32H192c-17.7 0-32-14.3-32-32zM48 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96z" />
                </svg>
                <!-- Icon Items -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2c4.4183 0 8 3.5817 8 8 0 1.448 0 6-8 12-8-6-8-10.552-8-12 0-4.4183 3.5817-8 8-8z">
                </path>
                </svg>
                <span>Pengadaan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('sale.index') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 640 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z" />
                </svg>
                <!-- Icon Items -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2c4.4183 0 8 3.5817 8 8 0 1.448 0 6-8 12-8-6-8-10.552-8-12 0-4.4183 3.5817-8 8-8z">
                </path>
                </svg>
                <span>Penjualan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('stock.index') }}"
                class="flex items-center p-2 space-x-2 text-white rounded-lg hover:bg-gray-700">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                    <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                    <style>
                        svg {
                            fill: #ffffff
                        }
                    </style>
                    <path
                        d="M264.5 5.2c14.9-6.9 32.1-6.9 47 0l218.6 101c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 149.8C37.4 145.8 32 137.3 32 128s5.4-17.9 13.9-21.8L264.5 5.2zM476.9 209.6l53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 277.8C37.4 273.8 32 265.3 32 256s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0l152-70.2zm-152 198.2l152-70.2 53.2 24.6c8.5 3.9 13.9 12.4 13.9 21.8s-5.4 17.9-13.9 21.8l-218.6 101c-14.9 6.9-32.1 6.9-47 0L45.9 405.8C37.4 401.8 32 393.3 32 384s5.4-17.9 13.9-21.8l53.2-24.6 152 70.2c23.4 10.8 50.4 10.8 73.8 0z" />
                </svg>
                <!-- Icon Items -->
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 2c4.4183 0 8 3.5817 8 8 0 1.448 0 6-8 12-8-6-8-10.552-8-12 0-4.4183 3.5817-8 8-8z">
                </path>
                </svg>
                <span>Stok</span>
            </a>
        </li>

        <!-- Tambahkan menu lainnya sesuai kebutuhan -->
    </ul>
</div>
