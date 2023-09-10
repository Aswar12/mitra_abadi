<?php

namespace App\Livewire;

use Livewire\Component;

class ItemSearchDropdown extends Component
{
    public $searchTerm = '';
    public $selectedItem = null;
    public $items = [];

    public function render()
    {
        $this->items = Item::where('name', 'like', '%' . $this->searchTerm . '%')->get();
        return view('livewire.item-search-dropdown');
    }

    public function mount()
    {
    }
}
