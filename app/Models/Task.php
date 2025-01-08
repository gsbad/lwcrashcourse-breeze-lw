<?php

namespace App\Models;

use App\Enums\PriorityType;
use App\Enums\StatusType;
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

    protected $casts = [
        'deadline' => 'date',
        'status' => StatusType::class,
        'priority' => PriorityType::class,
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
