<?php
namespace App\Http\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


use App\Models\PetAzukePlace;

class AzukePlaceService
{
    public function getAllPlaces()
    {

        // Retrieve data
        $places = PetAzukePlace::all();

        $formattedPlaces = $places->map(function ($place) {
            return [
                'place_id' => $place->id,
                'user_id' => $place->user_id,
                'place_name' => $place->place_name,
                'price' => $place->price,
                'postal_code' => $place->postal_code,
                'address1' => $place->address1,
                'address2' => $place->address2,
                'address3' => $place->address3,
                'description' => $place->description,
                'cat_allow' => $place->cat_allow,
                'dog_allow' => $place->dog_allow,
                'pet_food_service' => $place->pet_food_service,
                'pets_allowed_number' => $place->pets_allowed_number,
                'check_in_time' => $place->check_in_time,
                'check_out_time' => $place->check_out_time,
                'other_details' => $place->other_details,
            ];
        });

        return response()->json(['places' => $formattedPlaces]);

    }

    public function getPlaceById($id)
    {
        $place_detail = PetAzukePlace::find($id);

        $formattedPlaces = $place_detail->map(function ($place) {
            return [
                'place_id' => $place->id,
                'user_id' => $place->user_id,
                'place_name' => $place->place_name,
                'price' => $place->price,
                'postal_code' => $place->postal_code,
                'address1' => $place->address1,
                'address2' => $place->address2,
                'address3' => $place->address3,
                'description' => $place->description,
                'cat_allow' => $place->cat_allow,
                'dog_allow' => $place->dog_allow,
                'pet_food_service' => $place->pet_food_service,
                'pets_allowed_number' => $place->pets_allowed_number,
                'check_in_time' => $place->check_in_time,
                'check_out_time' => $place->check_out_time,
                'other_details' => $place->other_details,
            ];
        });

        return response()->json(['places' => $formattedPlaces]);
    }

    public function createPlace($data)
    {
        return PetAzukePlace::create($data);
    }

    public function updatePlace($id, $data)
    {
        $place = PetAzukePlace::find($id);
        if (!$place) {
            return null;
        }
        $place->update($data);
        return $place;
    }

    public function deletePlace($id)
    {
        $place = PetAzukePlace::find($id);
        if (!$place) {
            return false;
        }
        $place->delete();
        return true;
    }
}
?>
