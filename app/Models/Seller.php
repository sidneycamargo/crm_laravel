<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    //protected $guarded = [];
    protected $fillable = [
        'id',
        'company_id',
        'name',
        'login',
        'email',
        'tbl_company_id'
    ];

    public function company()
    {

        return $this->belongsTo(Seller::class);
    }
}
