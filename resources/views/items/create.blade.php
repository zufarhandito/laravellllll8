<x-app-layout>
    <div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8">
        <form method="POST" action="{{ route('items.store') }}">
            @csrf
            <div>
                <!--    image upload button
                        onchange = loadFile(event)
                 -->
                <input type="file" name="item_photos" accept="image/*" onchange="loadFile(event)">
                <!--    show uploaded image  before store
                        id have to be 'output'
                -->
                <img id="output" class="w-30 object-cover">
            </div>
            <div>
                <x-jet-label for="name" value="{{ __('Nama Barang') }}" />
                <x-jet-input id="name" class="block mt-1 w-full" type="text" name="name" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="code" value="{{ __('Kode Barang') }}" />
                <x-jet-input id="code" class="block mt-1 w-2x1" type="text" name="code" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="harga_beli" value="{{ __('Harga Beli') }}" />
                <x-jet-input id="harga_beli" class="block mt-1 w-full" type="text" name="harga_beli" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="harga_jual" value="{{ __('Harga Jual') }}" />
                <x-jet-input id="harga_jual" class="block mt-1 w-full" type="text" name="harga_jual" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="category" value="{{ __('Kategori Barang') }}" />
                <x-jet-input id="category" class="block mt-1 w-full" type="text" name="category" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="description" value="{{ __('Deskripsi / Keterangan') }}" />
                <x-jet-input id="description" class="block mt-1 w-full" type="text" name="description" value="-" />
            </div>

            <input type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        </form>
    </div>
</x-app-layout>