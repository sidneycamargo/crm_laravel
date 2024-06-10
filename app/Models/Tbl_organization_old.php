<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_organization_old extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = 'tbl_organizations';
    protected $primaryKey = 'organization_id';

    protected $guarded = [];
}
