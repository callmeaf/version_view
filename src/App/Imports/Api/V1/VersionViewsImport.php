<?php

namespace Callmeaf\VersionView\App\Imports\Api\V1;

use Callmeaf\Base\App\Services\Importer;
use Callmeaf\VersionView\App\Enums\VersionViewStatus;
use Callmeaf\VersionView\App\Repo\Contracts\VersionViewRepoInterface;
use Illuminate\Support\Collection;
use Illuminate\Validation\Rule;
use Maatwebsite\Excel\Concerns\SkipsEmptyRows;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithChunkReading;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class VersionViewsImport extends Importer implements ToCollection,WithChunkReading,WithStartRow,SkipsEmptyRows,WithValidation,WithHeadingRow
{
    private VersionViewRepoInterface $versionviewRepo;

    public function __construct()
    {
        $this->versionviewRepo = app(VersionViewRepoInterface::class);
    }

    public function collection(Collection $collection)
    {
        $this->total = $collection->count();

        foreach ($collection as $row) {
            $this->versionviewRepo->freshQuery()->create([
                // 'status' => $row['status'],
            ]);
            ++$this->success;
        }
    }

    public function chunkSize(): int
    {
        return \Base::config('import_chunk_size');
    }

    public function startRow(): int
    {
        return 2;
    }

    public function rules(): array
    {
        $table = $this->versionviewRepo->getTable();
        return [
            // 'status' => ['required',Rule::enum(VersionViewStatus::class)],
        ];
    }

}
