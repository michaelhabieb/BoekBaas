<x-app-layout>
    <!-- Navigation Header -->
    <div class="bookheader">
        <!-- Added padding-top for separation from navbar -->
        <div class="flex space-x-6 justify-center my-6">
            <!-- 'Books' Button -->
            <x-nav-link :href="route('admin.books.index')" :active="request()->routeIs('admin.books.index')" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-md">
                {{ __('Books') }}
            </x-nav-link>
            <!-- 'Lent Books' Button -->
            <x-nav-link :href="route('borrows.index')" :active="request()->routeIs('borrows.index')" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">
                {{ __('Lent Books') }}
            </x-nav-link>
            <a href="{{ route('books.create') }}" class="bg-green-500 hover:bg-green-600 text-white px-4 py-2 rounded-md">Add Book</a>
        </div>
    </div>

    <!-- Books Grid (Cards View) -->
    <div class="max-w-7xl mx-auto px-6 py-6 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($books as $book)
            <div class="bg-white p-4 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <h3 class="text-lg font-bold text-green-700 text-center">{{ $book->title }}</h3>
                <p class="text-gray-600"><strong>Author:</strong> {{ $book->author }}</p>
                <p class="text-gray-600"><strong>Genre:</strong> {{ $book->genre_id }}</p>
                <p class="text-gray-600"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                <p class="text-gray-600"><strong>Year:</strong> {{ $book->publication_year }}</p>
    
                <!-- Buttons in flexbox voor nette uitlijning -->
                <div class="mt-4 flex justify-between items-center">
                    <!-- Edit Button -->
                    <a href="{{ route('books.edit', $book->id) }}" class="bg-yellow-500 hover:bg-yellow-600 text-white px-4 py-2 rounded-md transition duration-300">
                        ✏️ Edit
                    </a>
                    <!-- Delete Button -->
                    <form method="POST" action="{{ route('books.destroy', $book->id) }}" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-4 py-2 rounded-md transition duration-300"
                            onclick="return confirm('Are you sure you want to delete this book?');">
                            🗑️ Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
