@section('content')
    <div class="container mx-auto">
        <h1 class="p-2 mb-1 text-center text-white rounded-lg shadow text-blue-950 bg-slate-400">
            Bem-vindo, <span class="text-blue-950">{{ Auth::user()->name }}</span>
        </h1>
        <div class="flex flex-col p-3 rounded-lg bg-zinc-500 md:flex-row">
            <livewire:tasks.tasks-list />
            <livewire:tasks.tasks-form />
        </div>
    </div>
