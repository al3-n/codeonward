<?php

namespace Code\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;

    protected $table = 'users';

    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'email',
        'location',
        'phone',
        'birthday',
        'password'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function getName()
    {
        return "{$this->first_name} " . mb_substr($this->last_name, 0, 1) . ".";
    }

    public function getFullName()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    public function getAvatarUrl()
    {
        return "https://www.gravatar.com/avatar/" . $this->email;
    }
}
