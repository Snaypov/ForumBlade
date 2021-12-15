<?php

namespace App\Listeners;

use App\Events\OnUserCreated;
use App\Jobs\HandleUserPhotoJob;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class HandleUserPhoto
{
    /**
     * Create the event listener.
     *
     * @return void
     */
//    public function __construct()
//    {
//        //
//    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\OnUserCreated  $event
     * @return void
     */
    public function handle(OnUserCreated $event)
    {
        dispatch(new HandleUserPhotoJob($event->email));
    }
}
