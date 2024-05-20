<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_seller extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function company() {

        return $this->belongsTo(Tbl_seller::class);
        
    }

}
