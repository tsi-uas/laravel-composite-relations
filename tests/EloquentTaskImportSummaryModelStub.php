<?php

namespace Halo\LaravelCompositeRelations\Tests;

use Halo\LaravelCompositeRelations\Tests\EloquentTaskModelStub as Task;
use Halo\LaravelCompositeRelations\Tests\EloquentTaskImportDataModelStub as TaskImportData;

class EloquentTaskImportSummaryModelStub extends EloquentCompositeRelationModelStub
{
    protected $table = 'task_import_summaries';

    public function task()
    {
        return $this->compositeBelongsTo(Task::class, ['task_vendor_id', 'task_vendor_name'], ['vendor_id', 'vendor_name']);
    }

    public function importData()
    {
        return $this->compositeHasMany(TaskImportData::class, ['task_vendor_id', 'task_vendor_name'], ['task_vendor_id', 'task_vendor_name']);
    }
}