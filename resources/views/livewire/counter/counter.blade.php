<div style="display: flex">
    <a href="/account/items" wire:navigate>List Items</a>
    <button class="btn btn-primary" wire:click="decrement">-</button>
    <h1>{{ $count }}</h1>
    <button class="btn btn-primary" wire:click="increment">+</button>
</div>