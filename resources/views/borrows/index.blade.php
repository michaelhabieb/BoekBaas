<x-app-layout>
    <div class="bookheader">
        <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex ">
            <x-nav-link :href="route('admin.books.index')" :active="request()->routeIs('admin.books.index')">
                {{ __('books') }}
            </x-nav-link>
            <x-nav-link :href="route('borrows.index')" :active="request()->routeIs('borrows.index')">
                {{ __('lentbooks') }}
            </x-nav-link>
        </div>
    </div>
    <div>
        <table class="w-full text-sm text-left text-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50">
            <tr>
                <th scope="col" class="px-4 py-3">Book</th>
                <th scope="col" class="px-4 py-3">User</th>
                <th scope="col" class="px-4 py-3">Borrow</th>
                <th scope="col" class="px-4 py-3">Return</th>
            </tr>
            </thead>
            <tbody>
            @foreach($borrows as $borrow)
                <tr class="border-b">
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>