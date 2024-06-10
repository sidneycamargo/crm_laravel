<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_organization_fields extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = 'tbl_organization_fields';
    protected $primaryKey = 'organization_fields_id';

    protected $guarded = [];
}
