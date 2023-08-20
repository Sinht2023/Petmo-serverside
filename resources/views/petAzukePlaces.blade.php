
    <h1>Pet Azuke Places</h1>
    
    <div class="pet-azuke-places">
        <ul>
            @foreach ($petAzukePlaces as $place)
                <li>
                    <h2><a href="{{ route('getPetAzukePlace', ['place_id' => $place->id]) }}">{{ $place->place_name }}</a></h2>
                    <p>{{ $place->description }}</p>
                </li>
            @endforeach
        </ul>
    </div>
