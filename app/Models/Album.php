<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function artist(){
        return $this->belongsTo(Artist::class);
    }

    public function track(){
        return $this->hasMany(Track::class);
    }

    public function played(){
        return $this->hasMany(Played::class);
    }
}
