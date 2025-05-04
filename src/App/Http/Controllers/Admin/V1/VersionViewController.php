<?php

namespace Callmeaf\VersionView\App\Http\Controllers\Admin\V1;

use Callmeaf\Base\App\Http\Controllers\Admin\V1\AdminController;
use Callmeaf\VersionView\App\Repo\Contracts\VersionViewRepoInterface;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

class VersionViewController extends AdminController implements HasMiddleware
{
    public function __construct(protected VersionViewRepoInterface $versionViewRepo)
    {
        parent::__construct($this->versionViewRepo->config);
    }

    public static function middleware(): array
    {
        return [
           //
        ];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->versionViewRepo->latest()->search()->paginate();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        return $this->versionViewRepo->create(data: $this->request->validated());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return $this->versionViewRepo->findById(value: $id);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        return $this->versionViewRepo->update(id: $id, data: $this->request->validated());
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return $this->versionViewRepo->delete(id: $id);
    }

    public function statusUpdate(string $id)
    {
        return $this->versionViewRepo->update(id: $id, data: $this->request->validated());
    }

    public function typeUpdate(string $id)
    {
        return $this->versionViewRepo->update(id: $id, data: $this->request->validated());
    }

    public function trashed()
    {
        return $this->versionViewRepo->trashed()->latest()->search()->paginate();
    }

    public function restore(string $id)
    {
        return $this->versionViewRepo->restore(id: $id);
    }

    public function forceDestroy(string $id)
    {
        return $this->versionViewRepo->forceDelete(id: $id);
    }
}
