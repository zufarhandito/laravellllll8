<x-app-layout>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <a href="{{ route('users.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">
            create new user
        </a>
        <table class="min-w-full divide-y divide-gray-200 mt-5">
            <thead class="bg-gray-50">
                <tr>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">

                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Name
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Role
                    </th>
                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @foreach ($users as $user)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">
                            <!-- <img class="h-8 w-8 rounded-full object-cover" src="" alt=""> -->
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">
                            {{$user->name}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">
                            {{$user->email}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm font-medium text-gray-900">
                            {{$user->role}}
                        </div>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <form action="" method="POST">
                            <a class="text-blue-900 m-1" href="">View</a>
                            <a class="text-indigo-400 m-1" href="{{ route('users.edit',$user->id) }}">Edit</a>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <span class="m-10">{{ $users->links() }}</span>
    </div>


</x-app-layout>