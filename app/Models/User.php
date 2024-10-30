<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    public function getLoginField($loginValue)
    {
        return "username";
    }

    public function chars() {
        return Char::where("userid", $this->userid)->get();
    }

    public function char() {
        return $this->belongsTo(Char::class, "main_id", "char_id");
    }

    public function getMain() {
        return $this->char ? $this->char->getName() : "Chưa tạo nhân vật";
    }

    public function getOnline($char_id) {
        return $this->is_online & $this->main_id == $char_id ? "<span class='btn btn-sm btn-success'>Online<span>" : "";
    }

    public function guild() {
        return $this->hasOne(GuildUser::class);
    }

    public function isAdminGuild() {
        return $this->guild && $this->guild->role == "admin";
    }
}
