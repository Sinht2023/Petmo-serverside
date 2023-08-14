<?php

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\PetAzukePlace;

class TestPetAzukePlaceController extends TestCase
{
    //use RefreshDatabase;

    public function testGetAllPetAzukePlaces()
    {
        // Simulate a GET request to the index endpoint
        $response = $this->withoutMiddleware()
        ->get('/api/pet-azuke-places');

        // Assert successful response
        $response->assertStatus(200);

        $collectResponse = collect($response['places']);

        $this->assertCount(3, $collectResponse);
    }

    // Other test methods for CRUD operations...
}
?>
