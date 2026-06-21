<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard Admin') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold mb-2 text-indigo-600">Menejemen Menu</h3>
                    <p class="text-sm text-gray-600 mb-6">Silakan pilih aksi di bawah untuk mengelola data katalog kuliner kelompok.</p>

                    <div style="display: flex; gap: 15px; margin-top: 20px;">
                        <a href="{{ route('restaurant.create') }}" style="background-color: #4F46E5; color: white; font-weight: bold; padding: 10px 20px; border-radius: 8px; text-decoration: none; transition: 0.3s;" onmouseover="this.style.backgroundColor='#4338CA'" onmouseout="this.style.backgroundColor='#4F46E5'">
                            ➕ Tambah Menu Baru
                        </a>
                        
                        <a href="{{ url('/restoran') }}" style="background-color: #4B5563; color: white; font-weight: bold; padding: 10px 20px; border-radius: 8px; text-decoration: none; transition: 0.3s;" onmouseover="this.style.backgroundColor='#374151'" onmouseout="this.style.backgroundColor='#4B5563'">
                            👁️ Lihat Katalog Web
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>