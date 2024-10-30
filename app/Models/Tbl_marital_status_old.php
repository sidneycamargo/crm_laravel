<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_marital_status_old extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = 'tbl_marital_status';
    protected $primaryKey = "marital_status_id";

    protected $guarded = [];
}
