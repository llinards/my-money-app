<?php

namespace App\Models;

use Carbon\Carbon;
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

    public function scopeNextSalary($query)
    {
        return $query->where('date', '>', now())
            ->orderBy('date', 'asc')
            ->first();
    }

    public function getDaysUntilNextSalary(): float|int
    {
        $nextSalary = $this->nextSalary();
        return round(now()->diffInDays(Carbon::parse($nextSalary->date)));
    }

    public function getDaysBetweenSalaries(): float|int
    {
        $lastSalary = $this->lastSalary();
        $nextSalary = $this->nextSalary();
        if (isset($lastSalary->date)) {
            return Carbon::parse($lastSalary->date)->diffInDays(Carbon::parse($nextSalary->date));
        } else {
            return 0;
        }
    }
}
