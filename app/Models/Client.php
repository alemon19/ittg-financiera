<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    protected $fillable = [
        'id','name', 'phone', 'address',
    ];

   public function loan()
    {
        return $this->hasOne(loan::class);
    }
}
