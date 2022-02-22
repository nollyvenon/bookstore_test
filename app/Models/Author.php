<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'phone'];

	protected $hidden = [
		'email',
        'laravel_through_key',
        'created_at',
        'updated_at'
    ];
}
