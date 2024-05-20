<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tbl_company extends Model
{
    use HasFactory;

    // protected $guarded = [];

    protected $fillable = [
        'id',
        'cnpj',
        'name',
        'fantasy',
        'logomarca',
        'created_at',
        'updated_at'
    ];


    public function sellers() {
        return $this->hasMany( Tbl_seller::class);
        }

}
