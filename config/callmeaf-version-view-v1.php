<?php

use Callmeaf\Base\App\Enums\RequestType;

return [
    'model' => \Callmeaf\VersionView\App\Models\VersionView::class,
    'route_key_name' => 'id',
    'repo' => \Callmeaf\VersionView\App\Repo\V1\VersionViewRepo::class,
    'resources' => [
        RequestType::API->value => [
            'resource' => \Callmeaf\VersionView\App\Http\Resources\Api\V1\VersionViewResource::class,
            'resource_collection' => \Callmeaf\VersionView\App\Http\Resources\Api\V1\VersionViewCollection::class,
        ],
        RequestType::WEB->value => [
            'resource' => \Callmeaf\VersionView\App\Http\Resources\Web\V1\VersionViewResource::class,
            'resource_collection' => \Callmeaf\VersionView\App\Http\Resources\Web\V1\VersionViewCollection::class,
        ],
        RequestType::ADMIN->value => [
            'resource' => \Callmeaf\VersionView\App\Http\Resources\Admin\V1\VersionViewResource::class,
            'resource_collection' => \Callmeaf\VersionView\App\Http\Resources\Admin\V1\VersionViewCollection::class,
        ],
    ],
    'events' => [
        RequestType::API->value => [
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewIndexed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewCreated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewShowed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewDeleted::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Api\V1\VersionViewTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::WEB->value => [
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewIndexed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewCreated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewShowed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewDeleted::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Web\V1\VersionViewTypeUpdated::class => [
                // listeners
            ],
        ],
        RequestType::ADMIN->value => [
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewIndexed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewCreated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewShowed::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewDeleted::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewStatusUpdated::class => [
                // listeners
            ],
            \Callmeaf\VersionView\App\Events\Admin\V1\VersionViewTypeUpdated::class => [
                // listeners
            ],
        ],
    ],
    'requests' => [
        RequestType::API->value => [
            'index' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewIndexRequest::class,
            'store' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewStoreRequest::class,
            'show' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewShowRequest::class,
            'update' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewUpdateRequest::class,
            'destroy' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewDestroyRequest::class,
            'statusUpdate' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\VersionView\App\Http\Requests\Api\V1\VersionViewTypeUpdateRequest::class,
        ],
        RequestType::WEB->value => [
            'index' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewIndexRequest::class,
            'create' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewCreateRequest::class,
            'store' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewStoreRequest::class,
            'show' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewShowRequest::class,
            'edit' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewEditRequest::class,
            'update' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewUpdateRequest::class,
            'destroy' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewDestroyRequest::class,
            'statusUpdate' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\VersionView\App\Http\Requests\Web\V1\VersionViewTypeUpdateRequest::class,
        ],
        RequestType::ADMIN->value => [
            'index' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewIndexRequest::class,
            'store' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewStoreRequest::class,
            'show' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewShowRequest::class,
            'update' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewUpdateRequest::class,
            'destroy' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewDestroyRequest::class,
            'statusUpdate' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewStatusUpdateRequest::class,
            'typeUpdate' => \Callmeaf\VersionView\App\Http\Requests\Admin\V1\VersionViewTypeUpdateRequest::class,
        ],
    ],
    'controllers' => [
        RequestType::API->value => [
            'version_view' => \Callmeaf\VersionView\App\Http\Controllers\Api\V1\VersionViewController::class,
        ],
        RequestType::WEB->value => [
            'version_view' => \Callmeaf\VersionView\App\Http\Controllers\Web\V1\VersionViewController::class,
        ],
        RequestType::ADMIN->value => [
            'version_view' => \Callmeaf\VersionView\App\Http\Controllers\Admin\V1\VersionViewController::class,
        ],
    ],
    'routes' => [
        RequestType::API->value => [
            'prefix' => 'version_views',
            'as' => 'version_views.',
            'middleware' => [],
        ],
        RequestType::WEB->value => [
            'prefix' => 'version_views',
            'as' => 'version_views.',
            'middleware' => [],
        ],
        RequestType::ADMIN->value => [
            'prefix' => 'version_views',
            'as' => 'version_views.',
            'middleware' => [
                'auth:sanctum',
                'role:' . \Callmeaf\Role\App\Enums\RoleName::SUPER_ADMIN->value,
            ],
        ],
    ],
    'enums' => [
         'status' => \Callmeaf\VersionView\App\Enums\VersionViewStatus::class,
         'type' => \Callmeaf\VersionView\App\Enums\VersionViewType::class,
    ],
     'exports' => [
        RequestType::API->value => [
            'excel' => \Callmeaf\VersionView\App\Exports\Api\V1\VersionViewsExport::class,
        ],
        RequestType::WEB->value => [
            'excel' => \Callmeaf\VersionView\App\Exports\Web\V1\VersionViewsExport::class,
        ],
        RequestType::ADMIN->value => [
            'excel' => \Callmeaf\VersionView\App\Exports\Admin\V1\VersionViewsExport::class,
        ],
     ],
     'imports' => [
         RequestType::API->value => [
             'excel' => \Callmeaf\VersionView\App\Imports\Api\V1\VersionViewsImport::class,
         ],
         RequestType::WEB->value => [
             'excel' => \Callmeaf\VersionView\App\Imports\Web\V1\VersionViewsImport::class,
         ],
         RequestType::ADMIN->value => [
             'excel' => \Callmeaf\VersionView\App\Imports\Admin\V1\VersionViewsImport::class,
         ],
     ],
];
