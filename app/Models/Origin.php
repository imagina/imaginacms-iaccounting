<?php

namespace Modules\Iaccounting\Models;

use Imagina\Icore\Models\CoreModel;

class Origin extends CoreModel
{
    protected $table = 'iaccounting__origins';
    public string $transformer = 'Modules\Iaccounting\Transformers\OriginTransformer';
    public string $repository = 'Modules\Iaccounting\Repositories\OriginRepository';
    public array $requestValidation = [
        'create' => 'Modules\Iaccounting\Http\Requests\CreateOriginRequest',
        'update' => 'Modules\Iaccounting\Http\Requests\UpdateOriginRequest',
    ];
    //Instance external/internal events to dispatch with extraData
    public $dispatchesEventsWithBindings = [
        //eg. ['path' => 'path/module/event', 'extraData' => [/*...optional*/]]
        'created' => [],
        'creating' => [],
        'updated' => [],
        'updating' => [],
        'deleting' => [],
        'deleted' => []
    ];
    protected $fillable = ['name', 'slug', 'params', 'options'];

    protected $casts = [
        'params' => 'array',
        'options' => 'array'
    ];
}