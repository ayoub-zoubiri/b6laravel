<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Ajout</title>
</head>

<body>

    <div class="flex items-center justify-between p-10">
        <h1 class="text-3xl font-bold text-amber-700">Add New Employee</h1>
        <a href="{{ route('employees.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">
            Back to List
        </a>
    </div>

    <form class="max-w-sm mx-auto bg-black p-10 rounded-4xl m-10" method="POST" action="{{ route('employees.store') }}">
        @csrf
        <label for="nom"
            class=" mb-2 text-lg font-bold text-gray-900 dark:text-white flex items-center justify-center">Ajout
        </label>

        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nom</label>
        <input type="text" name="nom" aria-describedby="helper-text-explanation"
            class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white "
            placeholder="nom">
        <label for="nom" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Prenom</label>
        <input type="text" name="prenom" aria-describedby="helper-text-explanation"
            class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white "
            placeholder="prenom">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">email</label>
        <input type="email" name="email" aria-describedby="helper-text-explanation"
            class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white "
            placeholder="name@flowbite.com">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Post</label>
        <input type="text" name="poste" aria-describedby="helper-text-explanation"
            class="w-full p-2.5  bg-gray-700 border-bleu-600 text-white "
            placeholder="job">
        <input type="submit" id="poste" aria-describedby="helper-text-explanation"
            class=" w-full p-2.5 my-5 bg-green-700 border-green-600 text-white ">

    </form>

</body>

</html>
