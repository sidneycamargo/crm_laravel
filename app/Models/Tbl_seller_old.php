<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_seller_old extends Model
{
    use HasFactory;
    
    protected $connection = "mysql_old";
    protected $table = "tbl_sellers";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name'
    ];

}
