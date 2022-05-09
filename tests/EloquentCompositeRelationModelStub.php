<?php

namespace Halo\LaravelCompositeRelations\Tests;

use Illuminate\Database\Eloquent\Model;
use Halo\LaravelCompositeRelations\HasCompositeRelations;

class EloquentCompositeRelationModelStub extends Model
{
    use HasCompositeRelations;

    protected $guarded = [];
}