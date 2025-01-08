<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'description',
        'status',
        'priority',
        'deadline',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
