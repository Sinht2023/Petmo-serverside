<h1>Pet Azuke Place Details</h1>
    
    <div class="place-details">
        <h2>{{ $place->place_name }}</h2>
        <p>{{ $place->description }}</p>
        
        <!-- Chat Button -->
        <a href="{{ route('api.chat.fetch', ['sender_user_id' => $place->user_id, 'place_id' => $place->id]) }}" class="btn btn-primary">Chat</a>
    </div>