<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Scheme extends Model
{
    /** @use HasFactory<\Database\Factories\SchemeFactory> */
    use HasFactory, SoftDeletes;
    protected $guarded = ['id'];


    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot(['status'])->withTimestamps();
    }

    public function referrals()
    {
        return $this->belongsToMany(User::class, 'scheme_user', 'scheme_id', 'id')->withPivot(['status'])->withTimestamps();
    }

    public function creator(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function memo()
    {
        return Str::words($this->description,8);
    }
}
