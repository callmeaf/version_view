<?php

namespace Callmeaf\VersionView\App\Enums;


use Callmeaf\Base\App\Enums\BaseStatus;

enum VersionViewStatus: string
{
    case ACTIVE = BaseStatus::ACTIVE->value;
    case INACTIVE = BaseStatus::INACTIVE->value;
    case PENDING = BaseStatus::PENDING->value;
}
