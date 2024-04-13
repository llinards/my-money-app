<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = ['balance', 'daily_limit'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function scopeGetAccount($query)
    {
        return $query->first();
    }
}
