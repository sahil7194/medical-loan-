<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Applications extends Model
{
    /** @use HasFactory<\Database\Factories\ApplicationsFactory> */
    use HasFactory , SoftDeletes;

    protected $guarded = ['id'];
}
