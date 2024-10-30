<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_company_old extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = "tbl_companys";
    protected $primaryKey = "company_id";

    // protected $guarded = [];

    protected $fillable = [
        'company_id',
        'cmpn_cnpj',
        'cmpn_name',
        'cmpn_fantasy',
        'cmpn_logomarca',
        'created_at',
        'updated_at'
    ];
}
