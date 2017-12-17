<?php

use Illuminate\Database\Seeder;

class ThreadTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $threads = factory('App\Thread',5)->create();
		$threads->each(function($thread){
			factory('App\Reply',2)->create(['thread_id' => $thread->id]);
		});
    }
}
