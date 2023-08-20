<?php

//use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Chat; // Make sure to import your Chat model
use App\Models\User; // Make sure to import your User model

class TestChatController extends TestCase
{
    //use RefreshDatabase;

    /** @test */
    public function it_can_send_a_message()
    {
        $messageData = [
            'sender_user_id' => 1,
            'receiver_user_id' => 2,
            'place_id' => 2, // You can set a place ID if needed
            'message' => 'Hello there!',
        ];
        
        // Send a POST request to the chat endpoint
        $response = $this->withoutMiddleware()
            ->post('/api/chat', $messageData);        
        
        //dump($response);

        // Assert the response status code and content
        $response->assertStatus(201);
        $response->assertJson(['message' => 'Message sent successfully']);

        // Assert that the message was saved in the database
        $this->assertDatabaseHas('chats', [
            'sender_user_id' => 1,
            'receiver_user_id' => 2,
            'message' => 'Hello there!',
        ]);
    }
}
