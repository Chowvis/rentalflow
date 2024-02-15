<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'user_id',
        'property_id',
        'contact_no',
        'email',
        'address',
        'property_name',
        'status',
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
