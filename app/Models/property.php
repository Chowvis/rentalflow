<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Property extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'user_id',
        'address_1',
        'address_2',
        'country',
        'state',
        'city',
        'pincode',
        'rent',
        'description',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
