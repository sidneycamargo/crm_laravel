<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SellersTableSeeder extends Seeder
{
    protected $connection = "mysql_old";
    protected $table = "tbl_sellers";
    protected $primaryKey = "id";

    protected $fillable = [
        'id',
        'name'
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
    }
}
