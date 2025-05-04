<?php

namespace Callmeaf\VersionView\App\Http\Resources\Admin\V1;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

/**
 * @extends ResourceCollection<VersionViewResource>
 */
class VersionViewCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, VersionViewResource>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
    }
}
