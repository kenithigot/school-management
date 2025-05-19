@aware([ 'tableName','isTailwind','isBootstrap','isBootstrap4','isBootstrap5', 'localisationPath'])
<div @class([
        'ml-0 ml-md-2' => $isBootstrap4,
        'ms-0 ms-md-2' => $isBootstrap5,
    ])
>
    <select wire:model.live="perPage" id="{{ $tableName }}-perPage"
        {{ 
            $attributes->merge($this->getPerPageFieldAttributes())
            ->class([
                'form-control' => $isBootstrap4 && $this->getPerPageFieldAttributes()['default-styling'],
                'form-select' => $isBootstrap5 && $this->getPerPageFieldAttributes()['default-styling'],
                'block bg-white w-full px-1.5 py-1 outline-none focus:outline-none focus:border-green-500 focus:border- rounded-md shadow-sm transition duration-150 ease-in-out sm:text-sm sm:leading-5' => $isTailwind && $this->getPerPageFieldAttributes()['default-styling'],
                'border border-green-500 focus:border-green-500' => $isTailwind && $this->getPerPageFieldAttributes()['default-colors'],
            ])
            ->except(['default','default-styling','default-colors']) 
        }}
    >
        @foreach ($this->getPerPageAccepted() as $item)
            <option
                value="{{ $item }}"
                wire:key="{{ $tableName }}-per-page-{{ $item }}"
            >
                {{ $item === -1 ? __($localisationPath.'All') : $item }}
            </option>
        @endforeach
    </select>
</div>
