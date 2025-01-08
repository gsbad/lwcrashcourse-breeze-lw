<!-- div a direita com o formulario -->
<div class="w-full mt-4 dir md:w-1/2 md:mt-0">
    <!-- div de confirmação de tarefa criada -->
    <div class="p-4 bg-gray-200 rounded-lg">
        @if (session('success'))
            <div class="p-2 mb-4 text-center text-white bg-green-500 rounded-lg shadow">
                {{ session('success') }}
            </div>
        @endif
        <form method="POST" action="{{ route('tasks.index') }}" wire:submit='save'>
            @csrf
            <!-- Campo para o nome da tarefa -->
            <div class="flex items-center mb-4">
                <label for="name" class="w-1/4 mr-4 text-right">Name</label>
                <div class="w-3/4">
                    <input type="text" id="name" name="name" class="w-full p-2 border rounded"
                        wire:model="form.name">
                    <div class="text-sm text-red-500">
                        @error('form.name')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Campo para o slug da tarefa -->
            <div class="flex items-center mb-4">
                <label for="slug" class="w-1/4 mr-4 text-right">Slug</label>
                <div class="w-3/4">
                    <input type="text" id="slug" name="slug" class="w-full p-2 border rounded"
                        wire:model="form.slug">
                    <div class="text-sm text-red-500">
                        @error('form.slug')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Campo para a descrição da tarefa -->
            <div class="flex items-center mb-4">
                <label for="description" class="w-1/4 mr-4 text-right">Description</label>
                <div class="w-3/4">
                    <textarea id="description" name="description" class="w-full p-2 border rounded" wire:model="form.description"></textarea>
                    <div class="text-sm text-red-500">
                        @error('form.description')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Campo para o status da tarefa -->
            <div class="flex items-center mb-4">
                <label for="status" class="w-1/4 mr-4 text-right">Status</label>
                <div class="w-3/4">
                    <select id="status" name="status" class="w-full p-2 border rounded" wire:model="form.status">
                        @foreach (App\Enums\StatusType::cases() as $status)
                            <option value="{{ $status->value }}">{{ $status }}</option>
                        @endforeach
                    </select>
                    <div class="text-sm text-red-500">
                        @error('form.status')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Campo para a prioridade da tarefa -->
            <div class="flex items-center mb-4">
                <label for="priority" class="w-1/4 mr-4 text-right">Priority</label>
                <div class="w-3/4">
                    <select id="priority" name="priority" class="w-full p-2 border rounded" wire:model="form.priority">
                        @foreach (App\Enums\PriorityType::cases() as $priority)
                            <option value="{{ $priority->value }}">{{ $priority }}</option>
                        @endforeach
                    </select>
                    <div class="text-sm text-red-500">
                        @error('form.priority')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Campo para o prazo da tarefa -->
            <div class="flex items-center mb-4">
                <label for="deadline" class="w-1/4 mr-4 text-right">Deadline</label>
                <div class="w-3/4">
                    <input type="date" id="deadline" name="deadline" class="w-full p-2 border rounded"
                        wire:model="form.deadline">
                    <div class="text-sm text-red-500">
                        @error('form.deadline')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
            </div>
            <!-- Botão para criar a tarefa -->
            <div class="flex justify-end">
                <button type="submit" class="p-2 text-white bg-blue-500 rounded">
                    <div wire:loading>
                        <svg class="w-5 h-5 ml-2 text-white animate-spin" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 24 24">
                            <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor"
                                stroke-width="4"></circle>
                            <path class="opacity-75" fill="currentColor"
                                d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                            </path>
                        </svg>
                    </div>
                    Criar tarefa
                </button>
            </div>
        </form>
    </div>
</div>
