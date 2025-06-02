<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konseling extends Model
{
    use HasFactory;
    protected $table ='konseling';
    protected $fillable =['kodekonseling','id_konselor','id_siswa','status','pesan','tanggal'];

    }
