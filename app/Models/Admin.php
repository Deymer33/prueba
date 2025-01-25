<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'admin_name',
        'admin_email',
        'admin_password',
    ];

    protected $hidden = [
        'admin_password',
        'remember_token',
    ];

    // Renombrar el campo password para cumplir con la convención de Laravel
    public function getAuthPassword()
    {
        return $this->admin_password;
    }
}
