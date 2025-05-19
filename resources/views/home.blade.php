<x-base-layout>

    <p>hij doet het</p>


    @auth
    @if (Auth::user()->is_admin != 0)

        You are an admin !

    @endif
    @endauth


</x-base-layout>
