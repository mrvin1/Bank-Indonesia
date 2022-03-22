<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IKU extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "ikus";
    public function users(){
        return $this->hasMany(User::class);
    }
}
