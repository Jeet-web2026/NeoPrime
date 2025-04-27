<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    public $table = 'users';
    public $timestamps = false;

    protected $fillable = [
        'username',
        'useremail',
        'userpassword',
        'useraddress',
        'google_id'
    ];

    protected $hidden = [
        'userpassword',
    ];
    protected function casts(): array
    {
        return [
            'userpassword' => 'hashed',
        ];
    }

    public function getAuthPassword()
    {
        return $this->userpassword;
    }
}
