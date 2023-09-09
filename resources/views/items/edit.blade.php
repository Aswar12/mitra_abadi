@extends('layouts.app')
@section('content')
    <div class="py-12 ">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-4 dark:bg-gray-500">
            <div class="overflow-hidden bg-white rounded-lg shadow-xl dark:bg-gray-500 sm:rounded-lg ">

                <h5>Edit Item</h5>
                <form action="{{ route('items.update', $item->id) }}" method="POST">
    @csrf
        @method('PUT')
        <div class="grid grid-cols-2 gap-2">
            <div class="p-2">
                    <label for="name">Item Name</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="name" value="{{ $item->name }}">
                </div>
                <div class="p-2">
                    <label for="description">Item Description</label>
                    <textarea class="w-full p-2 border rounded shadow" name="description">{{ $item->description }}</textarea>
                </div>
                <div class="p-2">
                    <label for="unit_price">Item Price</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="unit_price" value="{{ $item->unit_price }}">
                </div>
                <div class="p-2">
                    <label for="demand_rate">Permintaan Rata-Rata</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="demand_rate" value="{{ $item->demand_rate }}">
                </div>
                <div class="p-2">
                    <label for="ordering_cost">Biaya Pemesanan</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="ordering_cost" value="{{ $item->ordering_cost }}">
                </div>
                <div class="p-2">
                    <label for="holding_cost">Biaya Penyimpanan</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="holding_cost" value="{{ $item->holding_cost }}">
                </div>
                {{-- <div class="p-2">
                    <label for="quantity">Item Quantity</label>
                    <input type="text" class="w-full p-2 border rounded shadow" name="quantity" value="{{ $item->quantity }}">
                </div> --}}
                <div class="flex justify-end px-4 py-3 text-right sm:px-6">
                    <button type="submit" class="px-4 py-2 font-bold text-white bg-black rounded">Update data</button>
                </div>
                <p></p>
            @endsection
