<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class prakerja extends Model
{
    use HasFactory;
    protected $table = 'prakerjas';
    protected $fillable = ['nama' ,'email' ,'telpon' ,'alamat' ,'pddkan' ,'foto'];
}
