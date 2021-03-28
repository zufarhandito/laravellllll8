<x-app-layout>
    <div class="max-w-2xl mx-auto py-10 sm:px-6 lg:px-8 bg-white rounded-md mt-20">

        <form action="{{ route('users.update',$user) }}" method="POST">
            @csrf
            @method ('PUT')
            <label for="name">Name</label>
            <input type="text" name="name" value="{{ $user->name }}">
            <br>
            <label for="email">Email</label>
            <input type="email" name="email" value="{{ $user->email }}">
            <br>
            <div class="mt-4" >
                <input type="radio" id="manager" name="role" value="manager" <?php if($user['role'] == 'manager'){ echo "checked"; } ?>>
                <label for="manager">Manager</label><br>
                <input type="radio" id="staff" name="role" value="staff"<?php if($user['role'] == 'staff'){ echo "checked"; } ?>>
                <label for="female">Staff</label><br>
            </div>
            <input type="submit">
        </form>

    </div>
</x-app-layout>