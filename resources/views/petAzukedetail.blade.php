<!DOCTYPE html>
<html>
<head>
    <title>Pet Azuke Place Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }

        .header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem 0;
        }

        .place-details {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .place-name {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .place-description {
            color: #666;
            margin-bottom: 20px;
        }

        .btn-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .btn {
            padding: 10px 20px;
            font-size: 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: #fff;
            background-color: #007bff;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
        
        
        .pet-hotel-list {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .pet-hotel-item {
            width: 500px;
            border: 1px solid #ccc;
            padding: 10px;
            text-align: center;
        }

        .pet-hotel-item img {
            max-width: 100%;
            height: auto;
        }

        .pet-hotel-item h3 {
            margin-top: 10px;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Pet Azuke Place Details</h1>
    </div>
    <div class="place-details">
        <h2 class="place-name">{{ $place->place_name }}</h2>
        <div class="pet-hotel-item">
            <img src="{{ url('storage/img/img1.jpeg') }}" alt="{{ $place->place_name }}" class="place-image">
        </div>
        <p class="place-description">{{ $place->price }} 円/日</p>
        <p class="place-description">{{ $place->description }}</p>
        <p class="place-description">{{ $place->cat_allow }}</p>
        <p class="place-description">{{ $place->dog_allow }}</p>

        
        <p class="place-description">HOLIDAY : {{ $holidays->holiday_date }}</p>

        
        <div class="btn-container">
            <a href="{{ route('api.chat.fetch', ['sender_user_id' => auth()->user()->id, 'receiver_user_id' => $place->user_id, 'place_id' => $place->id]) }}" class="btn btn-primary">Chat</a>
            <a href="{{ route('api.petallazukeplaces.fetch') }}" class="btn btn-primary">Back</a>
        </div>
    </div>
</body>
</html>
