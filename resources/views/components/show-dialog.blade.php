<!-- resources/views/livewire/show-dialog.blade.php -->

<div>
    <button wire:click="showDialog">Afficher le dialogue</button>

    <div wire:poll.750ms>
        @if($inscription)
            <div>
                <p>Code: {{ $inscription->code }}</p>
                <p>Email: {{ $inscription->email }}</p>
                <p>
            </div>
        @endif
    </div>
</div>
