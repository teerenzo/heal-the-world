<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Community extends Model
{

    protected $fillable = [
        'title',
        'description',
        'image',
        'owner'
    ];
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }
}