<x-app-layout>
    <div class="bg-white border border-gray-300">
        <h1 class="font-bold text-center text-indigo-700 text-7xl ">Salamaleokuom</h1>
        <div class="flex items-center justify-center w-full h-screen">
            <table class="self-center min-w-full ">
                <tr>
                    <x-AnimalDisplay.th>ID</x-AnimalDisplay.th>
                    <x-AnimalDisplay.th>Type</x-AnimalDisplay.th>
                    <x-AnimalDisplay.th>Nom</x-AnimalDisplay.th>
                    <x-AnimalDisplay.th>Prix</x-AnimalDisplay.th>
                    <x-AnimalDisplay.th>Controles</x-AnimalDisplay.th>
                </tr>
                @foreach ($animaux as $animal)
                    <tr class="border-b">
                        <x-AnimalDisplay.td><a href="/animaux/{{ $animal['id'] }}">{{ $animal['id'] }}</a></x-AnimalDisplay.td>
                        <x-AnimalDisplay.td>{{ $animal->type }}</x-AnimalDisplay.td>
                        <x-AnimalDisplay.td>{{ $animal->nom }}</x-AnimalDisplay.td>
                        <x-AnimalDisplay.td>{{ $animal->prix }}</x-AnimalDisplay.td>
                        <x-AnimalDisplay.td><a href='/animaux/{{ $animal['id'] }}/edit' class="inline-flex items-center px-4 py-2 font-bold text-white bg-blue-500 rounded hover:bg-blue-700">
                            <svg class="inline-block w-6 h-6 mr-2 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                              xmlns="http://www.w3.org/2000/svg">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12"></path>
                            </svg>
                            EDIT
                        </a>
                            <form method="POST" action="/animaux/{{ $animal->id }}">
                                @csrf
                                @method('DELETE')
                                <button class="px-4 py-2 ml-2 font-bold text-white bg-red-500 rounded hover:bg-red-700" type="submit" name="btnDelete">DELETE</button>
                            </form>
                        </x-AnimalDisplay.td>
                    </tr>
                @endforeach
            </table>
            </div>
        </div>
    </div>
</x-app-layout>
