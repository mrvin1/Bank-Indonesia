<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "meetings";
    public function users(){
        return $this->hasMany(User::class);
    }
}
