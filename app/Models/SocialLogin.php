<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SocialLogin extends Model
{
    use HasFactory;
    protected $table = 'social_logins';
    protected $fillable = [
        'provider',
        'provider_id',
        'user_id',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id')->withDefault();
    }
}
