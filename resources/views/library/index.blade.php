
<x-frontend-layout>

<div class="container mx-auto flex items-center py-4">
    <h1 class="flex-grow text-2xl font-bold text-gray-800">Authors List</h1>
    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name" class="ml-auto border rounded px-2 py-1">
</div>



<div class="relative overflow-x-auto container mx-auto">

    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 display" id="myTable">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                
                <th scope="col" class="px-6 py-3">
                    S.N
                </th>
                <th scope="col" class="px-6 py-3">
                    Author Name
                </th>
              
                <th scope="col" class="px-6 py-3">
                    Action
                </th>
            </tr>
        </thead>
       @foreach ($authors as $author)
       <tbody>
         
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                {{ $author->id }}
                </th>
                <td class="px-6 py-4">
                    {{ $author->name }}
                </td>
              
                <td class="px-6 py-4">
                    <a href="{{ route('library.show', $author->id ) }}" class="text-white bg-blue-700 hover:bg-blue-800 focus:outline-none focus:ring-4 focus:ring-blue-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">View</a>
                </td>
            </tr>
        </tbody>
       @endforeach
    </table>
</div>


<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>


</x-frontend-layout>