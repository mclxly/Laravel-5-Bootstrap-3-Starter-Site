<?php namespace App\Handlers;
use Log;

class UserEventHandler {

    /**
     * Handle user login events.
     */
    public function onUserLogin($event)
    {
      Log::info('onUserLogin');
    }

    /**
     * Handle user logout events.
     */
    public function onUserLogout($event)
    {
      Log::info('onUserLogout');
    }

    /**
     * Register the listeners for the subscriber.
     *
     * @param  Illuminate\Events\Dispatcher  $events
     * @return array
     */
    public function subscribe($events)
    {
        $events->listen('App\Events\UserLoggedIn', 'App\Handlers\UserEventHandler@onUserLogin');

        $events->listen('App\Events\UserLoggedOut', 'App\Handlers\UserEventHandler@onUserLogout');
    }

}
?>