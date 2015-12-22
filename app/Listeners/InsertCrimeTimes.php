<?php

namespace App\Listeners;

use App\Events\SignedUp;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use App\CrimeTime;
class InsertCrimeTimes
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
     * @param  SignedUp  $event
     * @return void
     */
    public function handle(SignedUp $event)
    {
    }
}
