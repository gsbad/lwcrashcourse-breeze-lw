<div>
    <h1 class="py-2 text-white">App para organização de tarefas</h1>
    <form wire:submit='add'>
        <input type="text" wire:model='task'>
        <button class="p-2 bg-indigo-300">adicionar</button>
    </form>
    <ul>
        @foreach ($tasks as $task)
            <li class="text-white">{{ $task }}</li>
        @endforeach
    </ul>
</div>
