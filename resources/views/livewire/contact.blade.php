<div>
    @foreach ($contacts as $contact)
        @livewire('say-hi', ['contact' => $contact], key($contact->id))
        <button wire:click="removeContact('{{ $contact->id }}')">Delete contact</button>
{{--        <livewire:say-hi name="{{ $contact }}" :key="{{ $contact->id }}"/>--}}
    @endforeach
        <hr>
    <button wire:click="refreshChildren">Refresh all</button> : {{ now() }}
</div>
