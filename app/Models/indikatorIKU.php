<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class indikatorIKU extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "indikatoriku";
    public function iku(){
        return $this->hasMany(IKU::class);
    }
    public $timestamps = false;
}
