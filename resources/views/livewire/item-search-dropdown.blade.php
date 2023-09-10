<div class="relative">
    <input wire:model="searchTerm" type="text" class="form-input" placeholder="Cari item...">

    <div class="absolute z-10 mt-2 bg-white w-full border border-gray-300 rounded-lg shadow-lg"
        x-show="items.length > 0" x-cloak>
        <ul>
            @foreach ($items as $item)
            <li wire:click="selectedItem('{{ $item->id }}')" class="px-4 py-2 hover:bg-gray-100 cursor-pointer">{{
                $item->name }}</li>
            @endforeach
        </ul>
    </div>
</div>