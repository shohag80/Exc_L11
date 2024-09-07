<div>
    @isset($count)
        <div class="container text-center mt-5">
            <h2 class="text-success"><b>Livewire Count</b></h2>

            <h1>{{ $count }}</h1>

            <button class="btn btn-success" wire:click="increment">+</button>
            <button class="btn btn-primary" wire:click="default">Reset</button>
            <button class="btn btn-danger" wire:click="decrement">-</button>

        </div>
    @endisset
</div>
