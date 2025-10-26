<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Borrower extends Model
{
    protected $fillable = ['first_name', 'last_name', 'id_number', 'section'];
}
