<x-app-layout>
    <!-- Section Title -->
    <div class="text-center my-8">
        <h2 class="text-3xl font-semibold text-gray-900">All Available Books</h2>
        <p class="text-lg text-gray-600">Browse through our collection of books.</p>
    </div>

    <!-- Book Grid -->
    <div class="max-w-7xl mx-auto px-6 py-6 grid md:grid-cols-3 lg:grid-cols-4 gap-6">
        @foreach($books as $book)
            <div class="bg-white p-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
                <h3 class="text-lg font-semibold text-green-700 text-center mb-4">{{ $book->title }}</h3>
                
                <div class="space-y-2">
                    <p class="text-gray-600"><strong>Author:</strong> {{ $book->author }}</p>
                    <p class="text-gray-600"><strong>Genre:</strong> {{ $book->genre_id }}</p>
                    <p class="text-gray-600"><strong>ISBN:</strong> {{ $book->isbn }}</p>
                    <p class="text-gray-600"><strong>Year:</strong> {{ $book->publication_year }}</p>
                </div>
            </div>
        @endforeach
    </div>
</x-app-layout>
