<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'company',
        'company_name',
        'KVK_number',
        'firstname',
        'lastname',
        'street',
        'house_number',
        'zipcode',
        'location',
        'email',
        'phone_number',
        'function',
        'company_id'
    ];
}
