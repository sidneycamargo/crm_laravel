<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_seller extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $connection = "mysql_old";
    protected $table = "tbl_sellers";
    protected $primaryKey = "sellers_id";

    protected $fillable = [
        'id',
        'company_id',
        'name',
        'login',
        'email'
    ];

    public function company() {

        return $this->belongsTo(Tbl_seller::class);
        
    }

}
