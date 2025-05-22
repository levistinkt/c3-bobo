<x-base-layout title="Nieuw Team">
    <h1>Nieuw Team</h1>

    <form action="{{ route('teams.store') }}" method="POST">
        @csrf

        <div>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" required>
        </div>

        <button type="submit">Opslaan</button>
    </form>
</x-base-layout>
