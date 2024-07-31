<x-frontend-layout>
    <div class="container text-center mx-auto items-center py-4">
        <h1 class="flex-grow text-2xl font-bold text-gray-800">Author Name: <span class="text-purple-600">{{ $author->name }}</span></h1>
    </div>
    
    <div class="text-center">
        <h2 class="flex-grow text-2xl font-bold text-gray-800">Books list</h2>
        <ul>
            @foreach ($author->books as $book)
            <li class="italic">

                {{ $book->title }}
            </li>
            @endforeach

        </ul>
    </div>
</x-frontend-layout>