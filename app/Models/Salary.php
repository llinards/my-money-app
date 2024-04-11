<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = ['date', 'amount'];

    public function user()
    {
        $this->belongsTo(User::class);
    }

    public function scopeLastSalary($query)
    {
        return $query->where('date', '<=', now())
            ->orderBy('date', 'desc')
            ->first();
    }
}
