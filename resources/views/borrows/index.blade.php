<x-app-layout>
    <div class="bookheader">
        <div class="flex space-x-6 justify-center my-6">
            <x-nav-link :href="route('admin.books.index')" :active="request()->routeIs('admin.books.index')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                {{ __('Books') }}
            </x-nav-link>
            <x-nav-link :href="route('borrows.index')" :active="request()->routeIs('borrows.index')" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                {{ __('Lent Books') }}
            </x-nav-link>
        </div>
    </div>

    <!-- Borrow Entries Grid -->
    <div class="max-w-7xl mx-auto px-6 py-6 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($borrows as $borrow)
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <h3 class="text-lg font-bold text-green-700 text-center">{{ $borrow->book->title ?? 'Unknown' }}</h3>
                <p class="text-gray-600"><strong>User:</strong> {{ $borrow->user->name ?? 'Unknown' }}</p>
                <p class="text-gray-600"><strong>Borrow Date:</strong> {{ $borrow->borrow_date }}</p>
                <p class="text-gray-600"><strong>Return Date:</strong> {{ $borrow->return_date ?? 'Not returned' }}</p>
                
                <!-- Additional Action Buttons or Information (if needed) -->
                <div class="mt-4 flex justify-between items-center">
                    <!-- Optional button for actions like view details, or cancel borrow etc. -->
                    <!-- For now, just keeping the structure ready. -->
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
