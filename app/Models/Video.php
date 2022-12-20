<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject_id',
        'week',
        'resource_url',
        'description',
        'part',
        'session_parts',
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}
