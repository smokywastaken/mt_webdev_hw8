<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['content', 'op'];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            // Set the default value of 'op' to the user's name
            $user = Auth::user();
            $model->op = $user->name;
        });
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
