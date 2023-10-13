<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function items() {
        return $this->hasMany(Item::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
