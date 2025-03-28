<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Détails de l'utilisateur</h1>
        <p><strong>Nom :</strong> {{ $user->name }}</p>
        <p><strong>Email :</strong> {{ $user->email }}</p>
        <p><strong>Rôle :</strong> {{ $user->role }}</p>
        <a href="{{ route('users.index') }}" class="btn btn-primary">Retour</a>
    </div>
</x-app-layout>

