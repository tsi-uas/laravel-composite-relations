<?php

namespace Halo\LaravelCompositeRelations\Tests;

use Halo\LaravelCompositeRelations\Tests\EloquentTaskModelStub as Task;
use Halo\LaravelCompositeRelations\Tests\EloquentTaskImportSummaryModelStub as TaskImportSummary;

class EloquentTaskImportDataModelStub extends EloquentCompositeRelationModelStub
{
    protected $table = 'task_import_data';

    public function task()
    {
        return $this->compositeBelongsTo(Task::class, ['task_vendor_id', 'task_vendor_name'], ['vendor_id', 'vendor_name']);
    }

    public function importSummary()
    {
        return $this->compositeBelongsTo(TaskImportSummary::class, ['task_vendor_id', 'task_vendor_name'], ['task_vendor_id', 'task_vendor_name']);
    }
}