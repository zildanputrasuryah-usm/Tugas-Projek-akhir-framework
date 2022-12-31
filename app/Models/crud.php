<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class crud extends Model
{
    use HasFactory;
    protected $table = "dosen";
    protected $primarykey = 'NIDN';
    public $incrementing=false;
    protected $fillable=['NIDN','Nama','Pendidikan','Makul','Status'];

}
