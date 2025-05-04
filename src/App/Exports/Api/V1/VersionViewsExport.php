<?php

namespace Callmeaf\VersionView\App\Exports\Api\V1;

use Callmeaf\VersionView\App\Models\VersionView;
use Callmeaf\VersionView\App\Repo\Contracts\VersionViewRepoInterface;
use Illuminate\Contracts\Support\Responsable;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithCustomChunkSize;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Excel;

class VersionViewsExport implements FromCollection,WithHeadings,Responsable,WithMapping,WithCustomChunkSize
{
    use Exportable;

    /**
     * It's required to define the fileName within
     * the export class when making use of Responsable.
     */
    private $fileName = '';

    /**
     * Optional Writer Type
     */
    private $writerType = Excel::XLSX;

    /**
     * Optional headers
     */
    private $headers = [
        'Content-Type' => 'text/csv',
    ];

    private VersionViewRepoInterface $versionviewRepo;
    public function __construct()
    {
        $this->versionviewRepo = app(VersionViewRepoInterface::class);
        $this->fileName = $this->fileName ?: \Base::exportFileName(model: $this->versionviewRepo->getModel()::class,extension: $this->writerType);
    }

    public function collection()
    {
        if(\Base::getTrashedData()) {
            $this->versionviewRepo->trashed();
        }

        $this->versionviewRepo->latest()->search();

        if(\Base::getAllPagesData()) {
            return $this->versionviewRepo->lazy();
        }

        return $this->versionviewRepo->paginate();
    }

    public function headings(): array
    {
        return [
           // 'status',
        ];
    }

    /**
     * @param VersionView $row
     * @return array
     */
    public function map($row): array
    {
        return [
            // $row->status?->value,
        ];
    }

    public function chunkSize(): int
    {
        return \Base::config('export_chunk_size');
    }
}
