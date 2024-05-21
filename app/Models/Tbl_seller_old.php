<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_seller_old extends Model
{
    use HasFactory;
    
    protected $connection = "mysql_old";
    protected $table = "tbl_sellers";
    protected $primaryKey = "sellers_id";

    protected $fillable = [
        'sellers_id',
        'sellers_name',
        'sellers_login',
        'sellers_email'
    ];

}
