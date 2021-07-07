<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $primaryKey = 'id';

    public $timestamps = true;

    protected $fillable = [
        'company-name',
        'name',
        'reading-name',
        'postal_code',
        'prefecture',
        'address1',
        'address2',
        'tel',
        'email',
        'contents'
    ];
}
