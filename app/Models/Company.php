<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
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


    public function sellers()
    {
        return $this->hasMany(Seller::class);
    }
}
