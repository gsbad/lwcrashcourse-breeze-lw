@section('content')
    <div class="bg-white">
        <div class="p-3 bg-zinc-500 fora">
            <h1 class="p-2 mb-6 text-center text-white rounded-lg shadow text-blue-950 bg-slate-400">Tasks</h1>

            <div class="p-4 bg-gray-200 rounded-lg">
                <form method="POST" action="{{ route('tasks.index') }}" wire:submit='save'>
                    @csrf
                    <div class="flex items-center mb-4">
                        <label for="name" class="w-1/4 mr-4 text-right">Name</label>
                        <input type="text" id="name" name="name" required class="w-3/4 p-2 border rounded"
                            wire:model="name">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="slug" class="w-1/4 mr-4 text-right">Slug</label>
                        <input type="text" id="slug" name="slug" required class="w-3/4 p-2 border rounded"
                            wire:model="slug">
                    </div>
                    <div class="flex items-center mb-4">
                        <label for="description" class="w-1/4 mr-4 text-right">Description</label>
                        <textarea id="description" name="description" required class="w-3/4 p-2 border rounded" wire:model="description"></textarea>
                    </div>
                    <div class="flex items-center mb-4 marcada">
                        <label for="status" class="w-1/4 mr-4 text-right">Status</label>
                        <select id="status" name="status" required class="w-1/4 p-2 border rounded" wire:model="status">
                            @foreach (App\Enums\StatusType::cases() as $status)
                                <option value="{{ $status->value }}">{{ $status }}</option>
                            @endforeach
                        </select>
                        <label for="priority" class="w-1/4 mr-4 text-right">Priority</label>
                        <select id="priority" name="priority" required class="w-1/4 p-2 border rounded"
                            wire:model="priority">
                            @foreach (App\Enums\PriorityType::cases() as $priority)
                                <option value="{{ $priority->value }}">{{ $priority }}</option>
                            @endforeach
                        </select>
                        <label for="deadline" class="w-1/4 mr-4 text-right">Deadline</label>
                        <input type="date" id="deadline" name="deadline" required class="w-1/4 p-2 border rounded"
                            wire:model="deadline">
                    </div>
                    <button type="submit" class="p-2 text-white bg-blue-500 rounded">Create Task</button>
                </form>
            </div>
        </div>
    </div>
