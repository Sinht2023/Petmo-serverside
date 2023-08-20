<?php
namespace App\Http\Services;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;


use App\Models\Chat;

class ChatService
{
    public function sendMessages($request)
    {

        $chat = new Chat([
            'sender_user_id' => $request->sender_user_id,
            'receiver_user_id' => $request->receiver_user_id,
            'place_id' => $request->place_id,
            'message' => $request->message,
        ]);

        $chat->save();

    }

     /**
     * Get messages by sender user ID and place ID.
     *
     * @param int $sender_user_id
     * @param int $place_id
     */
    public function getMessagesByUserPlaceId($sender_user_id, $place_id)
    {
        // Retrieve and return messages from the database based on sender_user_id and place_id
        $messages = Chat::where('sender_user_id', $sender_user_id)
            ->where('place_id', $place_id)
            ->orderBy('created_at', 'asc')
            ->get();

        //return $messages;
        $formattedMessages = [];

        // Iterate through each message and format the details
        foreach ($messages as $message) {
            $formattedMessages[] = [
                'message_id' => $message->id,
                'sender_user_id' => $message->sender_user_id,
                'receiver_user_id' => $message->receiver_user_id,
                'place_id' => $message->place_id,
                'message' => $message->message,
            ];
        }

        return $formattedMessages;
    }

    public function createChat($data)
    {
        return Chat::create($data);
    }

    public function updateChat($id, $data)
    {
        $place = Chat::find($id);
        if (!$place) {
            return null;
        }
        $place->update($data);
        return $place;
    }
}
?>
