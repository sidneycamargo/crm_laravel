<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Marital_status extends Model
{
    use HasFactory;

    protected $table = 'marital_status';

    protected $fillable = [
        'masculine_name',
        'female_name',
        'company_id',
    ];
}
