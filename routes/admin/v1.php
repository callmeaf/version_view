<?php

use Illuminate\Support\Facades\Route;

[
    $controllers,
    $prefix,
    $as,
    $middleware,
] = Base::getRouteConfigFromRepo(repo: \Callmeaf\VersionView\App\Repo\Contracts\VersionViewRepoInterface::class);

Route::apiResource($prefix, $controllers['version_view'])->only([
    'index',
    'show'
])->middleware($middleware);
// Route::prefix($prefix)->as($as)->middleware($middleware)->controller($controllers['version_view'])->group(function () {
    // Route::get('trashed/list', 'trashed');
    // Route::prefix('{version_view}')->group(function () {
        // Route::patch('/status', 'statusUpdate');
        // Route::patch('/type', 'typeUpdate');
        // Route::patch('/restore', 'restore');
        // Route::delete('/force', 'forceDestroy');
    // });
// });
