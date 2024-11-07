<?php

namespace Modules\Iaccounting\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Modules\Iaccounting\Events\Handlers\CallWorkflow;
use Modules\Iaccounting\Events\PurchaseIsCreating;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    protected $listen = [
    ];

    public function register()
    {
      Event::listen(
        PurchaseIsCreating::class,
        [CallWorkflow::class, 'handle']
      );
    }
}
