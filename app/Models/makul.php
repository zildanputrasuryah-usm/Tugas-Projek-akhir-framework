<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makul extends Model
{
    use HasFactory;
    protected $table = "makul";
    protected $fillable=['Makul','Dosem','SKS','Hari','Ruang'];
}
