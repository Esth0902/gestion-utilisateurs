<x-app-layout>
    <div class="container mx-auto py-8">
        @if(session('status'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('status') }}
            </div>
        @endif
        <h1 class="text-2xl font-bold mb-6">Liste des Utilisateurs</h1>

        <table class="min-w-full bg-white border border-gray-200">
            <thead>
            <tr>
                <th class="py-2 px-4 border-b">Nom</th>
                <th class="py-2 px-4 border-b">Email</th>
                <th class="py-2 px-4 border-b">Rôle</th>
                <th class="py-2 px-4 border-b">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
                <tr>
                    <td class="py-2 px-4 border-b">{{ $user->name }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->email }}</td>
                    <td class="py-2 px-4 border-b">{{ $user->role }}</td>
                    <td class="py-2 px-4 border-b flex space-x-2">
                        <a href="{{ route('users.show', $user->id) }}" class="text-blue-500">Voir</a>
                        <a href="{{ route('users.edit', $user->id) }}" class="text-yellow-500 ml-2">Modifier</a>
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cet utilisateur ?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-500">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>

        <div class="mt-6">
            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
