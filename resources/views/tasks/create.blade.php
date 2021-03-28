<x-app-layout>
    <div class="container mx-auto ">
        <form action="{{ route('tasks.store') }}" method="post">
            @csrf
            <p>Create Task</p>
            <input type="text" name="description" placeholder="input description here!">
            <input class="text-red-400" type="submit" value="submit">
        </form>
    </div>
</x-app-layout>