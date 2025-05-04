<?php

namespace Callmeaf\VersionView\App\Traits;

use Callmeaf\VersionView\App\Repo\Contracts\VersionViewRepoInterface;
use Illuminate\Database\Eloquent\Relations\HasMany;

trait UserVersionView
{
    public function versionsViews(): HasMany
    {
        /**
         * @var VersionViewRepoInterface $versionSeenRepo
         */
        $versionViewRepo = app(VersionViewRepoInterface::class);
        return $this->hasMany($versionViewRepo->getModel()::class);
    }
}
