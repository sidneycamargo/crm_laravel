<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_contact_old extends Model
{
    use HasFactory;

    protected $connection = "mysql_old";
    protected $table = 'tbl_contacts';
    protected $primarykey = 'contact_id';

    protected $guarded = [];
}
