<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ViewMore extends Model
{
    use HasFactory;

    protected $table = 'viewmore';

    protected $fillable = [
        'video',
        'image1',
        'couple_name',
        'title',
        'description',
        'film_by',
        'outfit',
        'bulk_image',
    ];

    protected $casts = [
        'bulk_image' => 'array',
    ];
}
