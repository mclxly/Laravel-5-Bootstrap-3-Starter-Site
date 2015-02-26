<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;
use Log;

class SendEmailQue extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		Log::info('SendEmailQue:__construct');
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle()
	{
		Log::info('SendEmailQue:handle');
	}

}
