<x-app-layout>

    <!-- This example requires Tailwind CSS v2.0+ -->
    <div class="flex flex-col mt-10 ml-60 mr-60">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <a class="bg-green-400 p-2 m-8" href="{{ route('tasks.create') }}">Create</a>
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Description
                                </th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($tasks as $task)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $task->description }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                        <a class="text-blue-900 m-1" href="{{ route('tasks.show',$task->id) }}">View</a>
                                        <a class="text-indigo-400 m-1" href="{{ route('tasks.edit',$task->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <input class="text-red-600 " type="submit" value="Delete" onclick="return confirm ('Yakin?')">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</x-app-layout>