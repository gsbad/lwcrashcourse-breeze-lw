<!-- div a esquerda com a lista de tarefas -->
<div class="w-full mr-4 esq md:w-1/2">
    @foreach ($tasks as $task)
        <a href="#">
            <div class="p-4 mb-4 bg-gray-200 rounded-lg shadow w-7/8 hover:bg-gray-300">
                <h2 class="text-lg font-bold">{{ $task->name }}</h2>
                <p class="text-sm text-gray-500">{{ $task->description }}</p>
                <div class="flex justify-between mt-4 items -center">
                    <div>
                        <span class="text-sm text-gray-500">Status:</span>
                        <span class="text-sm text-gray-800">{{ $task->status }}</span>
                    </div>
                    <div>
                        <span class="text-sm text-gray-500">Priority:</span>
                        <span class="text-sm text-gray-800">{{ $task->priority }}</span>
                    </div>
                    <div>
                        <span class="text-sm text-gray-500">Deadline:</span>
                        <span class="text-sm text-gray-800">{{ $task->deadline->diffForHumans() }}</span>
                    </div>
                </div>
            </div>
        </a>
    @endforeach
    @if ($tasks->hasPages())
        <div class="p-2 mt-2 mb-12">
            {{ $tasks->links() }}
        </div>
    @endif
</div>
