<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lapanganUsaha extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = "lapanganusaha";
    public $timestamps = false;
}
