<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $table ='departemen';
    protected $primarykey ='kodedepartemen';
    protected $fillable =['nama_departemen'];
    
}
