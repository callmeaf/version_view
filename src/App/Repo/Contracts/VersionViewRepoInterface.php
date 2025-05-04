<?php

namespace Callmeaf\VersionView\App\Repo\Contracts;

use Callmeaf\Base\App\Repo\Contracts\BaseRepoInterface;
use Callmeaf\VersionView\App\Models\VersionView;
use Callmeaf\VersionView\App\Http\Resources\Api\V1\VersionViewCollection;
use Callmeaf\VersionView\App\Http\Resources\Api\V1\VersionViewResource;

/**
 * @extends BaseRepoInterface<VersionView,VersionViewResource,VersionViewCollection>
 */
interface VersionViewRepoInterface extends BaseRepoInterface
{

}
