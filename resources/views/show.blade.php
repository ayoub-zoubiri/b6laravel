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
            <h1 class="text-3xl font-bold text-amber-700">Employee Details</h1>
          
        </div>

    
        <div class="bg-white shadow-md rounded-lg p-6">
            <div class=" gap-4">
                <div>
                   
                    <p class="text-gray-900">ID:   {{ $employee->id }}</p>
                </div>
                <div>
                   
                    <p class="text-gray-900">Nom:   {{ $employee->nom }}</p>
                </div>
                <div>
                    
                    <p class="text-gray-900">Prenom:   {{ $employee->prenom }}</p>
                </div>
                <div>
                    
                    <p class="text-gray-900">Email:    {{ $employee->email }}</p>
                </div>
                <div>
                    
                    <p class="text-gray-900">Poste :    {{ $employee->poste }}</p>
                </div>
            </div>

          
        </div>
    </div>
</body>

</html>