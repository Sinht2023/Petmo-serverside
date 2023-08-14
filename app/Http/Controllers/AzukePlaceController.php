<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Services\AzukePlaceService;

class AzukePlaceController extends Controller
{
    private $accountService;

    public function __construct(
        AzukePlaceService $accountService
    ) {
        $this->accountService         = $accountService;
    }

    public function getAllPetAzukePlaces()
    {
        try {

            dump('GET ALL AZUKE PLACES ******');

            $places = $this->accountService->getAllPlaces();

            //dump($places);

            return response()->json([
                'result' => true,
                'places' => $places
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Error fetching reservation places'], 500);
        }
    }
    public function getPetAzukePlace($place_id)
    {
        // Search for the place using the provided place_id
        $place = $this->accountService->getPlaceById($place_id);

        if (!$place) {
            return response()->json(['message' => 'Place not found'], 404);
        }

        return response()->json($place);
    }
}
