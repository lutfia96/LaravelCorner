<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class UserDetail extends Model
{
    use HasFactory, Notifiable;
    protected $fillable = [
        'first_name',
        'last_name',
        'phone_number',
        'dob',
        'email',
        'status',
        'gender',
    ];
    protected $guard_name = 'web';
    public $table = 'user_details';
    public $primaryKey = 'user_id';
    public $incrementing = true;
}
