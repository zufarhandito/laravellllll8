<x-app-layout>

    <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('users.store') }}">
            @csrf
            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="mt-4" required>
                <input type="radio" id="manager" name="role" value="manager">
                <label for="manager">Manager</label><br>
                <input type="radio" id="staff" name="role" value="staff">
                <label for="female">Staff</label><br>
            </div>

            <!-- <div class="flex items-center justify-end mt-4">
                <x-jet-button class="ml-4">
                    {{ __('Register User') }}
                </x-jet-button>
            </div> -->
            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
</x-app-layout>