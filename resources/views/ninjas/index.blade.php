<x-layout>
    <h2>Currently Available Ninjas</h2>
    <p>{{ $greeting }}</p>
    <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p>{{ $ninja['name'] }}</p>
                <a href="/ninjas/{{$ninja['id']}}">
                    View Details
                </a>
            </li>
        @endforeach
    </ul>
    // V3 TEST.....
    // V4 NA TO.....
</x-layout>
