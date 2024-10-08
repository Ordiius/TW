<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    const OWNER = 'owner';
    const ADMIN = 'admin';
    const EMPLOYEE = 'employee';

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
