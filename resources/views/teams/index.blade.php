<x-base-layout>

    <h2>team summary</h2>

    @auth
    <a href="{{ route('teams.create') }}">Team Aanmaken</a>
        @foreach ($teams as $team)

    <div class="team-table">
        <table>
            <thead>
                <tr>
                    <th>Naam</th>
                    <th>acties</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$team->name}}</td>
                    <td>
                        <a href="{{ route('teams.show', $team->id) }}">Bekijk</a>
                        <a href="{{ route('teams.edit', $team->id) }}">Bewerken</a>
                        <form action="{{ route('teams.destroy', $team->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Verwijderen</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


        @endforeach
    @endauth

</x-base-layout>
