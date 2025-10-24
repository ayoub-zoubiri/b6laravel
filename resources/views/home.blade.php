<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="flex items-center justify-between p-10">
        <h1 class="text-3xl font-bold underline text-amber-700">
            List of Employees
        </h1>
        <a href="{{ route('employees.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Add New Employee
        </a>
    </div>



    <div class="relative sm:rounded-lg px-10 rounded-4xl ">
        <table class="w-full text-sm text-gray-500 ">
            <thead class=" text-indigo-950  ">
                <tr>
                    <th scope="col" class="px-6 py-3 border-2">
                        id
                    </th>
                    <th scope="col" class="px-6 py-3 border-2">
                        nom
                    </th>
                    <th scope="col" class="px-6 py-3 border-2">
                        Prénom
                    </th>
                    <th scope="col" class="px-6 py-3 border-2">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3 border-2">
                        poste
                    </th>
                    <th scope="col" class="px-6 py-3 border-2">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                 @foreach ($employees as $employee)
                
            
                <tr class="bg-gray-900 ">
                    <td  class="px-6 py-4 border-2 text-white">
                        {{ $employee->id }}
                    </td>
                    <td  class="px-6 py-4 border-2 text-white">
                        {{ $employee->nom }}
                    </td>
                    <td class="px-6 py-4 border-2 text-white">
                        {{ $employee->prenom }}
                    </td>
                    <td class="px-6 py-4 border-2 text-white">
                        {{ $employee->email }}
                    </td>
                    <td class="px-6 py-4 border-2 text-white">
                        {{ $employee->poste }}
                    </td>
                    <td class=" py-4 border-gray-200 border-2 flex items-center justify-evenly">
                        <a href="{{ route('employees.show', $employee->id) }}" class=" font-medium text-amber-400">details</a>
                        <a href="{{ route('employees.edit', $employee->id) }}" class=" font-medium text-green-500">Edit</a>
                        <form action="{{ route('employees.destroy', $employee->id) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class=" font-medium text-red-600" onclick="return confirm('Are you sure?')">delete</button>
                        </form>
                    </td>
                </tr>
@endforeach

            </tbody>
        </table>
    </div>

</body>


</html>
