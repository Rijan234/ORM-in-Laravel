<x-frontend-layout>
    <div class="container mx-auto p-4">
        <div class="flex">
            <div class="w-1/2 p-4 ">

                <h1 class="text-center py-4 text-2xl font-bold text-gray-800">Student Name</h1>
                <!-- Content for the first half -->


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    S.N
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>


                            </tr>
                        </thead>
                        <tbody>

                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $student->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $student->name }}
                                </td>


                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <div class="w-1/2 p-4 ">

                <h1 class="text-center py-4 text-2xl font-bold text-gray-800">List of courses taken by this student</h1>
                <!-- Content for the first half -->


                <div class="relative overflow-x-auto">
                    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    S.N
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Course Name
                                </th>


                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($student->courses as $course)
                            <tr class="bg-white dark:bg-gray-800">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $course->id }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $course->title }}
                                </td>
                             

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>

        </div>
    </div>
</x-frontend-layout>