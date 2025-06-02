<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konselor extends Model
{
    use HasFactory;
    protected $table ='konselor';
    protected $fillable =['kodekonselor','email','password','nama','jenis_kelamin'];
}
