<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $podcast = factory('App\Podcast')->create();

        $episodes = $podcast->episodes()->save(factory('App\Episode')->create());

        $episodes->each(function($e) {
            $e->notes()->save(factory('App\Note')->create())
                        ->each(function($n) {
                            $n->links()->save(factory('App\Link')->create());
                        });
        });
    }
}
