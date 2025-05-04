<x-filament-panels::page>
    <span>Hello World</span>
    <span>{{ $this->string }}</span>
    <div>
        <x-filament::button
                wire:click="exampleCalculate(1)"
                color="success"
        >
            +1
        </x-filament::button>

        <span>{{ $this->amount }}</span>

        <x-filament::button
                wire:click="exampleCalculate(-1)"
                color="warning"
        >
            -1
        </x-filament::button>
    </div>
</x-filament-panels::page>
