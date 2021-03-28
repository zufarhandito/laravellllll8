<x-app-layout>
    <div class="container mx-auto ">

        <form action="{{ route('tasks.update',$task->id) }}" method="POST">
            @csrf
            @method('PUT')
            <p>Update Task</p>
            <input type="text" name="description" value="{{ $task->description }}">
            <input class="text-red-400" type="submit" value="submit">
        </form>

    </div>
</x-app-layout>