<x-frontend-layout>

<div class="container text-center mx-auto items-center py-4">
    <h1 class="flex-grow text-2xl font-bold text-gray-800"><span class="text-purple-600">{{ $tenant->name }}</span> Rent Information</h1>
</div>



<div class="w-full container mx-auto max-w-sm bg-white border border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
    <div class="flex justify-end px-4 pt-4">
        <button id="dropdownButton" data-dropdown-toggle="dropdown" class="inline-block text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-1.5" type="button">
            <span class="sr-only">Open dropdown</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 16 3">
                <path d="M2 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Zm6.041 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM14 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3Z"/>
            </svg>
        </button>
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 hidden text-base list-none bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
            <ul class="py-2" aria-labelledby="dropdownButton">
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Edit</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Export Data</a>
            </li>
            <li>
                <a href="#" class="block px-4 py-2 text-sm text-red-600 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
            </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col items-center pb-10 ">
        <img class="w-24 h-24 mb-3 rounded-full shadow-lg" src="{{ asset('images/user.png') }}" alt="User Image"/>
        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{ $tenant->name }}</h5>
        <span class="text-sm text-gray-500 dark:text-gray-400"><span class="text-lg font-medium text-gray-900 dark:text-white">Amount: </span> Rs. {{ $rent->amount }}</span>
        <span class="text-sm text-gray-500 dark:text-gray-400"><span class="text-lg font-medium text-gray-900 dark:text-white">Paid At: </span> {{ $rent->paid_at }}</span>

    </div>
</div>






</x-frontend-layout>