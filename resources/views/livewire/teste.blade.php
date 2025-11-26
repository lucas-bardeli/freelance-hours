<div>
    <h1>Meu componente livewire</h1>
    <input wire:model.live="seach">
    <br>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>
