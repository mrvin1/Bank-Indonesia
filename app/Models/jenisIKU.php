<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class jenisIKU extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "jenisiku";
    public function indikatoriku(){
        return $this->hasMany(indikatorIKU::class);
    }
    public $timestamps = false;
}
