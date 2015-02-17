<?php namespace App\Handlers\Events;

use App\Events\MyEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Log;

class GoMyEvent {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		Log::info('GoMyEvent:__construct');
	}

	/**
	 * Handle the event.
	 *
	 * @param  MyEvent  $event
	 * @return void
	 */
	public function handle(MyEvent $event)
	{
		Log::info('GoMyEvent:handle');
	}

}
