<?php

namespace App\Livewire\Components;

use Livewire\Component;

class SearchInput extends Component
{
    public string $value = '';
    public string $placeholder = 'Search...';

    public function mount(string $value = '')
    {
        $this->value = $value;
    }

    public function updatedValue($value)
    {
        $this->dispatch('searchBar', value: $value);
    }

    public function render()
    {
        return view('livewire.components.search-input');
    }
}

