<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'image'];

    public function hotels()
    {
        return $this->hasMany(Hotel::class);
    }

    public function packages()
    {
        return $this->belongsToMany(Package::class, 'package_destinations');
    }
}
