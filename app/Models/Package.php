<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'transportation_id'];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'package_destinations');
    }

    public function transportation()
    {
        return $this->belongsTo(Transportation::class);
    }
}

