<?php

namespace Mlk\Comment\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mlk\User\Models\User;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'comment_id', 'commentable_id', 'commentable_type', 'body', 'status'];

    public const STATUS_ACTIVE = 'active';
    public const STATUS_NEW = 'new';
    public const STATUS_INACTIVE = 'inactive';

    public static array $statuses = [self::STATUS_ACTIVE, self::STATUS_INACTIVE, self::STATUS_NEW];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function comment()
    {
        return $this->belongsTo(__CLASS__, 'comment_id');
    }

    public function comments()
    {
        return $this->hasMany(__CLASS__);
    }

    public function commentable()
    {
        return $this->morphTo();
    }

    // Methods
}
