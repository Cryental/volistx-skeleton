<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalKeys extends Model
{
    use HasFactory;

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'personal_keys';
    protected $hidden = ['id'];

    protected $fillable = [
        'key_id',
        'user_id',
        'key',
        'secret',
        'secret_salt',
        'max_count',
        'permissions',
        'whitelist_range',
        'activated_at',
        'expires_at'
    ];

    protected $casts = [
        'max_count' => 'integer',
        'permissions' => 'array',
        'whitelist_range' => 'array',
        'activated_at' => 'date:Y-m-d H:i:s',
        'expires_at' => 'date:Y-m-d H:i:s',
        'created_at' => 'date:Y-m-d H:i:s',
        'updated_at' => 'date:Y-m-d H:i:s',
    ];
}
