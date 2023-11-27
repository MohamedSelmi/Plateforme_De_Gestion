<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OfferUser extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'offer_id',
    ];

    protected $table = 'offer_user';

}
