<?php

namespace App\Models;

use App\Traits\Uuids;
// use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Worker extends Model
{
    use Uuids;
    // use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'name',
        'surname',
        'city',
        'street',
        'zip',
        'salary',
        'type'
    ];
}