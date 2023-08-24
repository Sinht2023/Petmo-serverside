<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PlaceHoliday extends Model
{
    protected $primaryKey = 'holiday_id'; // Primary key column name
    protected $fillable = ['place_id', 'holiday_date']; // Fillable columns

    // Define the relationship with the Place model
    public function place()
    {
        return $this->belongsTo(Place::class, 'place_id', 'id');
    }
}
