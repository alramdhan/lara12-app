<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserRole extends Model
{
    use HasFactory;

    protected $fillable = [
        'role_id',
        'role_name'
    ];

    public function user()
    {
        $this->belongsTo(User::class);
    }
}
