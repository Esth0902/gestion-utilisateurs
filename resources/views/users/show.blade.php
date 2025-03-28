<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h1>
        <p><strong>Nom :</strong> {{ $user->name }}</p>
        <p><strong>Email :</strong> {{ $user->email }}</p>
        <p><strong>Rôle :</strong> {{ $user->role }}</p>
        <a href="{{ route('users.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Retour</a>
    </div>
</x-app-layout>

