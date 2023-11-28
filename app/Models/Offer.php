<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'deadline',
        'user_id'
    ];
    public function admin()
    {
        return $this->belongsTo(User::class);
    }
    public function candidates(){
        return $this->belongsToMany(User::class);
    }
}
