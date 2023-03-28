<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone_number'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function wishlist()
    {
        return $this->hasMany(Wishlist::class, 'user_id', 'id');
    }
    public function cart()
    {
        return $this->hasMany(Cart::class, 'user_id', 'id');
    }
    public function review()
    {
        return $this->hasMany(Review::class, 'user_id', 'id');
    }
    public function contact()
    {
        return $this->hasMany(Contact::class, 'user_id', 'id');
    }
    public function order()
    {
        return $this->hasMany(Order::class, 'user_id', 'id');
    }
    public function order_detail()
    {
        return $this->hasMany(OrderDetail::class, 'user_id', 'id');
    }
    public function user_detail()
    {
        return $this->hasOne(UserDetail::class, 'user_id', 'id');
    }
}
