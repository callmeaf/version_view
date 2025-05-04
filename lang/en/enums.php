<?php

use Callmeaf\VersionView\App\Enums\VersionViewStatus;
use Callmeaf\VersionView\App\Enums\VersionViewType;

return [
    VersionViewStatus::class => [
        VersionViewStatus::ACTIVE->name => 'Active',
        VersionViewStatus::INACTIVE->name => 'InActive',
        VersionViewStatus::PENDING->name => 'Pending',
    ],
    VersionViewType::class => [
        //
    ],
];
