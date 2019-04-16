<?php

namespace App\Listeners;

use App\Events\TestPusherEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;

class TestPusherListener implements ShouldQueue
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  TestPusherEvent  $event
     * @return void
     */
    public function handle(TestPusherEvent $event)
    {
        //
    }
}
