<x-app-layout>
    <!-- Navigation Header -->
    <div class="bookheader">
        <!-- Added padding-top for separation from navbar -->
        <div class="flex space-x-6 justify-center my-6">
            <!-- 'Books' Button -->
            <x-nav-link :href="route('admin.books.index')" :active="request()->routeIs('admin.books.index')" class="px-6 py-3 bg-blue-500 text-white rounded-md hover:bg-blue-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-blue-400">
                {{ __('Books') }}
            </x-nav-link>
            <!-- 'Lent Books' Button -->
            <x-nav-link :href="route('borrows.index')" :active="request()->routeIs('borrows.index')" class="px-6 py-3 bg-green-500 text-white rounded-md hover:bg-green-600 transition duration-300 focus:outline-none focus:ring-2 focus:ring-green-400">
                {{ __('Lent Books') }}
            </x-nav-link>
        </div>
    </div>

    <!-- Books Grid (Cards View) -->
    <div class="max-w-7xl mx-auto px-6 py-6 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($books as $book)
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <h3 class="text-lg font-semibold text-green-700 text-center">{{ $book->title }}</h3>
                <p class="text-gray-600"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="text-gray-600"><strong>Genre:</strong> {{ $book->genre_id }}</p>
                <p class="text-gray-600"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                <p class="text-gray-600"><strong>Year:</strong> {{ $book->publication_year }}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>
