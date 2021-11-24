<div>
    {{ $contact->name }}: {{ $contact->phone }} : {{ now() }}
    <button wire:click="$refresh">refresh</button>
</div>
