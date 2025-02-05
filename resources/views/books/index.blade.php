<x-app-layout>
    
    <div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">Title</th>
                <th scope="col" class="px-4 py-3">Author</th>
                <th scope="col" class="px-4 py-3">genre</th>
                <th scope="col" class="px-4 py-3">Isbn</th>
                <th scope="col" class="px-4 py-3">Published year</th>
            </tr>
            </thead>

            <tbody>
            @foreach($books as $book)
                <tr class="border-b">
                    <th scope="row" class="px-4 py-3 font-semibold text-gray-900 whitespace-nowrap">{{ $book->title }}</th>
                    <td class="px-4 py-3">{{ $book->author}}</td>
                    <td class="px-4 py-3">{{ $book->genre_id }}</td>
                    <td class="px-4 py-3">{{ $book->isbn }}</td>
                    <td class="px-4 py-3">{{ $book->publication_year }}</td>
                </tr>
            @endforeach
            </tbody>
        </table>     
    </div>
</x-app-layout>