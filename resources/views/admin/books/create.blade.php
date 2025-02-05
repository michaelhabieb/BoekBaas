<x-app-layout>
    <div class="max-w-4xl mx-auto mt-10">
        <h2 class="text-xl font-semibold text-gray-900 mb-4">Add New Book</h2>

        <form method="POST" action="{{ route('books.store') }}">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" id="title" name="title" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="mb-4">
                <label for="author" class="block text-sm font-medium text-gray-700">Author</label>
                <input type="text" id="author" name="author" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="mb-4">
                <label for="genre_id" class="block text-sm font-medium text-gray-700">Genre</label>
                <select id="genre_id" name="genre_id" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
                    <option value="">Select a genre</option>
                    @foreach($genres as $genre)
                        <option value="{{ $genre->id }}">{{ $genre->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-4">
                <label for="isbn" class="block text-sm font-medium text-gray-700">ISBN</label>
                <input type="text" id="isbn" name="isbn" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <div class="mb-4">
                <label for="publication_year" class="block text-sm font-medium text-gray-700">Publication Year</label>
                <input type="number" id="publication_year" name="publication_year" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-md">Add Book</button>
        </form>
    </div>
</x-app-layout>
