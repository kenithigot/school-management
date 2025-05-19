@aware(['isTailwind', 'isBootstrap'])
<input
    wire:model{{ $this->getSearchOptions() }}="search"
    placeholder="{{ $this->getSearchPlaceholder() }}"
    type="text"
    {{ 
        $attributes->merge($this->getSearchFieldAttributes())
        ->class([
            'border border-green-500 rounded-md px-2 bg-white text-gray-800 outline-hidden shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 rounded-none rounded-l-md' => $isTailwind && $this->hasSearch() && (($this->getSearchFieldAttributes()['default'] ?? true) || ($this->getSearchFieldAttributes()['default-styling'] ?? true)),
            'border border-green-500 rounded-md px-2 bg-white text-gray-800 outline-hidden shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5 rounded-md' => $isTailwind && !$this->hasSearch()  && (($this->getSearchFieldAttributes()['default'] ?? true) || ($this->getSearchFieldAttributes()['default-styling'] ?? true)),
            'border border-green-500 bg-white focus:outline-hidden outline-hidden' => $isTailwind && $this->hasSearch()  && (($this->getSearchFieldAttributes()['default'] ?? true) || ($this->getSearchFieldAttributes()['default-colors'] ?? true)),
            'border border-green-500 bg-white focus:outline-hidden outline-hidden' => $isTailwind && !$this->hasSearch()  && (($this->getSearchFieldAttributes()['default'] ?? true) || ($this->getSearchFieldAttributes()['default-colors'] ?? true)),
            'block w-full border-green-500' => !$this->hasSearchIcon,
            'pl-8 pr-4 border-green-500' => $this->hasSearchIcon,
            'form-control' => $isBootstrap && $this->getSearchFieldAttributes()['default'] ?? true,
        ])
        ->except(['default','default-styling','default-colors']) 
    }}

/>