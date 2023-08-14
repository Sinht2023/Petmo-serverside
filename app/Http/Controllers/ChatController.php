<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Display the chat view
    public function index()
    {
        return view('chat');
    }

    // Fetch chat messages
    public function fetchMessages()
    {
        // You can retrieve messages from your database or any other data source
        $messages = [
            ['username' => 'User1', 'message' => 'Hello, how are you?'],
            ['username' => 'User2', 'message' => 'I\'m good, thank you!'],
            // Add more messages...
        ];

        return response()->json($messages);
    }

    // Send chat message
    public function sendMessage(Request $request)
    {
        // Validate the request
        $this->validate($request, [
            'username' => 'required',
            'message' => 'required',
        ]);

        // Store the message in the database or any other data source
        // You can also broadcast the message to other users in real-time

        return response()->json(['success' => true]);
    }
}
