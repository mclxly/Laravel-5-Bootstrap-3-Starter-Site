<?php namespace App\Events;

use App\Events\Event;

use Illuminate\Queue\SerializesModels;
use Log;

class MyEvent extends Event {

	use SerializesModels;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		Log::info('MyEvent:__construct');
	}

}
