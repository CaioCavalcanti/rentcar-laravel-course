<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Advertisement extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id', 'uuid', 'title', 'description', 'tags', 'price', 'published_at'
    ];

    protected $dates = [
        'published_at', 'created_at', 'updated_at', 'deleted_at'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function pictures() {
        return $this->hasMany(Picture::class);
    }
}
