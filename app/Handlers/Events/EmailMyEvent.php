<?php namespace App\Handlers\Events;

use App\Events\MyEvent;

use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Log;

class EmailMyEvent {

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct()
	{
		Log::info('EmailMyEvent:__construct');
	}

	/**
	 * Handle the event.
	 *
	 * @param  MyEvent  $event
	 * @return void
	 */
	public function handle(MyEvent $event)
	{
		abort(404);
		Log::info('MyEvent.');

		Log::info('This is some useful information.');

		Log::warning('Something could be going wrong.');

		Log::error('Something is really going wrong.');
	}

}
