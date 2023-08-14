<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class PetAzukePlace extends Model
{
    use HasFactory;
    protected $table = 'pet_azuke_places'; // Assuming the table name is 'pet_azuke_places'

    protected $fillable = [
        'user_id',
        'place_name',
        'price',
        'postal_code',
        'address1',
        'address2',
        'address3',
        'description',
        'cat_allow',
        'dog_allow',
        'pet_food_service',
        'pets_allowed_number',
        'check_in_time',
        'check_out_time',
        'other_details',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'cat_allow' => 'boolean',
        'dog_allow' => 'boolean',
    ];

    /**
     * Get the user that owns the pet azuke place.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
