<h1>
    The list of tasks
</h1>

@forelse ($tasks as $task)
    <div>
        <a class="task-link" href={{ route('tasks.show', ['id' => $task->id]) }}>
            {{ $task->title }}
        </a>
    </div>
@empty
    <div>There are no tasks!</div>
@endforelse
