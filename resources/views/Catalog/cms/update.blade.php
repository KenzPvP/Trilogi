<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('catalog-update', $catalog->id) }}" enctype="multipart/form-data">
        @csrf

        <div>
            <x-input-label for="name" :value="__('Nama')" />
            <x-text-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name', $catalog->name)" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <div class="mb-4">
            <x-input-label for="category" :value="__('Kategori')" />
            <select id="category" name="category" class="block mt-1 w-full border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                <option value="">Pilih Kategori</option>
                <option value="1" {{ old('category', $catalog->category) == 1 ? 'selected' : '' }}>Makanan</option>
                <option value="2" {{ old('category', $catalog->category) == 2 ? 'selected' : '' }}>Minuman</option>
                <option value="3" {{ old('category', $catalog->category) == 3 ? 'selected' : '' }}>Snack</option>
            </select>            
            <x-input-error :messages="$errors->get('category')" class="mt-2" />
        </div>
        

         <div class="mb-4">
            <x-input-label for="description" :value="__('Deskripsi singkat')" />
            <textarea id="description" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 bg-gray-800 text-gray-300 font-medium text-sm dark:bg-gray-900 dark:text-gray-300" name="description" rows="4">{{ old('description', $catalog->description) }}</textarea>
            <x-input-error :messages="$errors->get('description')" class="mt-2" />
        </div>   

        <div class="mb-4">
            <x-input-label for="image" :value="__('Image')" />
            <input type="file" id="image" name="image" class="block mt-1 w-full border border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200" accept="image/*" onchange="previewImage(event)"/>
            <x-input-error :messages="$errors->get('image')" class="mt-2" />
        </div>
        
        <div class="mt-6">
            <x-input-label for="current_image" :value="__('Gambar Saat Ini')" />
            @if($catalog->image)
                <img src="{{ asset('storage/' . $catalog->image) }}" alt="Catalog Image" class="mt-2 rounded-md shadow-md" width="150">    
            @else
                <p class="text-gray-500 mt-2">Tidak ada gambar.</p>
            @endif
        </div>
        
        <script>
            function previewImage(event) {
                const imagePreview = document.getElementById('image-preview');
                const file = event.target.files[0];
                const reader = new FileReader();
        
                reader.onload = function(e) {
                    imagePreview.src = e.target.result;
                    imagePreview.style.display = 'block';
                }
        
                if (file) {
                    reader.readAsDataURL(file);
                } else {
                    imagePreview.style.display = 'none';
                }
            }
        </script>
        

        <div class="flex items-center justify-end mt-4">

            <x-primary-button class="ms-3">
                {{ __('Kirim') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
