<!doctype html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/app.css')
</head>

<body>
    <div class="container mx-auto px-4 py-8">
        <div class="flex items-center justify-between mb-6">
            <h1 class="text-3xl font-bold text-amber-700">Edit Employee</h1>
            <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
                Back to List
            </a>
        </div>

        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('employees.update', $employee->id) }}" method="POST" class="max-w-sm mx-auto bg-black p-10 rounded-4xl m-10">
                @csrf
                @method('PUT')
                
                <div class="">
                    <div class="mb-4">
                        <label for="nom" class="block text-gray-700 text-sm font-bold mb-2">nom:</label>
                        <input type="text" id="nom" name="nom" value="{{ $employee->nom }}" 
                               class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white " required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="prenom" class="block text-gray-700 text-sm font-bold mb-2">Prenom:</label>
                        <input type="text" id="prenom" name="prenom" value="{{ $employee->prenom }}" 
                               class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white " required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                        <input type="email" id="email" name="email" value="{{ $employee->email }}" 
                               class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white " required>
                    </div>
                    
                    <div class="mb-4">
                        <label for="poste" class="block text-gray-700 text-sm font-bold mb-2">Poste:</label>
                        <input type="text" id="poste" name="poste" value="{{ $employee->poste }}" 
                               class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white " required>
                    </div>
                </div>

                <div class="flex items-center justify-between mt-6">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                        Update Employee
                    </button>
                    
                </div>
            </form>
        </div>
    </div>
</body>

</html>