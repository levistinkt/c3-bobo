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
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$team->name}}</td>
                </tr>
            </tbody>
        </table>
    </div>


        @endforeach
    @endauth

</x-base-layout>
