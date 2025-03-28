<x-app-layout>
    <div class="container mx-auto py-8">
        <h1 class="text-2xl font-bold mb-6">Modifier un utilisateur</h1>

        <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Nom</label>
                <input type="text" name="name" value="{{ old('name', $user->name) }}"
                   class="w-full border border-gray-300 px-3 py-2">
                @error('name')
                <div class="text-red-500 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Email</label>
                <input type="email" name="email" value="{{ old('email', $user->email) }}"
                    class="w-full border border-gray-300 px-3 py-2">
                @error('email')
                <div class="text-red-500 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Mot de passe</label>
                <input type="password" name="password" class="w-full border border-gray-300 px-3 py-2">
                @error('password')
                <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-4">
                <label class="block text-sm font-bold mb-2">Rôle</label>
                <select name="role" class="w-full border border-gray-300 px-3 py-2">
                    <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>Utilisateur</option>
                    <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Administrateur</option>
                </select>
                @error('role')
                <div class="text-red-500 text-sm mt-1">{{$message}}</div>
                @enderror
            </div>

            <button type="submit" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Modifier</button>

        </form>
    </div>
</x-app-layout>
