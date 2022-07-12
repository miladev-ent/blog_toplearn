<?php

namespace Mlk\Advertising\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Mlk\User\Models\User;

class Advertising extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'imagePath', 'imageName', 'link', 'title', 'location'];

    // Variables
    public const LOCATION_TOP_MAIN_PAGE = 'top main page';
    public const LOCATION_BOTTOM_MAIN_PAGE = 'bottom main page';
    public const LOCATION_DETAIL_ARTICLES = 'detail articles';

    public static array $locations = [
        self::LOCATION_TOP_MAIN_PAGE,
        self::LOCATION_BOTTOM_MAIN_PAGE,
        self::LOCATION_DETAIL_ARTICLES,
    ];

    // Relations
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
