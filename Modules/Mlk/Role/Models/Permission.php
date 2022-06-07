<?php

namespace Mlk\Role\Models;

use Spatie\Permission\Models\Permission as PemissionSpatie;

class Permission extends PemissionSpatie
{
    PUBLIC CONST PERMISSION_SUPER_ADMIN = 'permission super admin';
    PUBLIC CONST PERMISSION_PANEL = 'permission panel';
    PUBLIC CONST PERMISSION_USERS = 'permission users';
    PUBLIC CONST PERMISSION_CATEGORIES = 'permission categories';
    PUBLIC CONST PERMISSION_ROLES = 'permission roles';
    PUBLIC CONST PERMISSION_ARTICLES = 'permission articles';

    public static array $permissions = [
        self::PERMISSION_SUPER_ADMIN,
        self::PERMISSION_PANEL,
        self::PERMISSION_USERS,
        self::PERMISSION_CATEGORIES,
        self::PERMISSION_ROLES,
        self::PERMISSION_ARTICLES,
    ];
}
