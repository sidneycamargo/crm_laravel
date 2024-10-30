<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_lead_source_old extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = 'tbl_lead_source';
    protected $primaryKey = "lead_source_id";

    protected $guarded = [];
}
