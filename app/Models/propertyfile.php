<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class propertyfile extends Model
{
    use HasFactory;
    protected $fillable = [

        'user_id',
        'property_id',
        'files',

    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function properties()
    {
        return $this->belongsTo(Property::class);
    }

}
