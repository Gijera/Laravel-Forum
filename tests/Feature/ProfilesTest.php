<?php

namespace Tests\Feature;

use App\Activity;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Tests\TestCase;

class ProfilesTest extends TestCase
{
	use DatabaseMigrations;

	/**
	* @test
	**/
	public function a_user_has_a_profile()
	{
		$user = create('App\User');

		$this->get("/profiles/{$user->name}")
			->assertSee($user->name);
	}

	/**
	 * @test
	 **/
	public function profiles_display_all_threads_created_by_the_associated_use()
	{
		$this->signIn();

		$thread = create('App\Thread', ['user_id' => auth()->id()]);

		$this->get("/profiles/" . auth()->user()->name)
			->assertSee($thread->title)
			->assertSee($thread->body);
	}

	/**
	 * @test
	 **/
	public function it_fetches_a_feed_for_any_user()
	{
	    $this->signIn();

	    create('App\Thread', ['user_id' => auth()->id()], 2);

	    auth()->user()->activity()->first()->update([
	    	'created_at' => Carbon::now()->subWeek()
	    ]);

	    $feed = Activity::feed(auth()->user());

	    $this->assertTrue($feed->keys()->contains(
	    	Carbon::now()->format('Y-m-d')
	    ));

	    $this->assertTrue($feed->keys()->contains(
	    	Carbon::now()->subweek()->format('Y-m-d')
	    ));
	}
}