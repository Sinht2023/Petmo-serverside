<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SendMessageRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sender_user_id' => 'required|exists:users,id',
            'receiver_user_id' => 'required|exists:users,id',
            'place_id' => 'nullable|exists:pet_azuke_places,id',
            'message' => 'required|string',
        ];
    }
}
