<div>
    <x-input type="text" wire:model.live="username" placeholder="Enter text" />
    <p>{{ $username }}</p>
    <div class="flex flex-col items-center">
        <button wire:click='increment'  class="px-4 py-2 font-bold text-white bg-green-500 rounded hover:bg-green-700">+</button>
        <p>{{ $count }}</p>
        <button wire:click='decrement' class="px-4 py-2 ml-2 font-bold text-white bg-red-500 rounded hover:bg-red-700">-</button>
    </div>
</div>
