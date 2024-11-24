<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'company'];

    public function packages()
    {
        return $this->hasMany(Package::class);
    }
}

