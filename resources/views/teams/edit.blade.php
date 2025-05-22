<x-base-layout title="Team aanpassen">
    <h1>Team aanpassen</h1>

    <form action="{{ route('teams.update', $team->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="{{ $team->name }}" required>
        </div>

        <button type="submit">Opslaan</button>
    </form>
</x-base-layout>
