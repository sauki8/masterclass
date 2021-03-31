<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\softDeletes;

class Contact extends Model
{
    use HasFactory;
    use softDeletes;

    protected $table = "contacts";
    protected $guarded = ['id', 'created_at'];
    protected $dates = ['created_at', 'updated_at'];
}
