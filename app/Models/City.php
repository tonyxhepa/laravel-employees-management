<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//kc

class City extends Model
{
    use HasFactory;

    protected $fillable =['state_id', 'name'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }
}
