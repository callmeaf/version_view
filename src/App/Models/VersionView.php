<?php

namespace Callmeaf\VersionView\App\Models;

use Callmeaf\Base\App\Models\BaseModel;
use Illuminate\Database\Eloquent\SoftDeletes;

class VersionView extends BaseModel
{
    // use SoftDeletes;

    protected $fillable = [
        'user_id',
        'version_id'
    ];

    public static function configKey(): string
    {
        return 'callmeaf-version-view';
    }

    protected function casts(): array
    {
        return [
            ...(self::config()['enums'] ?? []),
        ];
    }
}
