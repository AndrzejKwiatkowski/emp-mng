<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'brith_day',
        'phone',
        'country',
        'city',
        'street',
        'post_code',
        'job_title',
        'user_id',
    ];
    public function user()
    {
        return $this->belongsTo(UserProfiles::class);
    }
}
