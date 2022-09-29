<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    
    use HasFactory;

    protected $fillable = [
            
            'name',
            'artist',
            'img',
            'location',
    ];

    public function user(){
        return $this->belongsToMany(User::class);
    }

}


