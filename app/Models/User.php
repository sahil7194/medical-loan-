<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\ApplicationStatus;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $guarded = ['id'];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function isApplicant()
    {
        return $this->user_type == 0;
    }
    public function isReferent()
    {
        return $this->user_type == 1;
    }

    public function isVendor()
    {
        return $this->user_type == 2;
    }

    public function isStaff()
    {
        return $this->user_type == 3;
    }

    public function blogs()
    {
        return $this->hasMany(Blog::class);
    }

    public function applications()
    {
        return $this->belongsToMany(Scheme::class)->withPivot(['status'])->withTimestamps();
    }

    public function referrals()
    {
        return $this->belongsToMany(Scheme::class, 'scheme_user', 'referral_id', )->withPivot(['status'])->withTimestamps();
    }

    public function schemes()
    {
        return $this->hasMany(Scheme::class);
    }

}
