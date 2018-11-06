<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        // $adminRole = factory(App\Role::class)->create(['name' => 'Administrator']);
        // $simpleUser = factory(App\Role::class)->create(['name' => 'Simple user']);

    	$agents = factory(App\Agent::class, 5)
                        ->create()
                        ->each(function($agent) {
                            $agent->account()->create(factory(App\User::class)->make()->toArray());
                        });

        $user = factory(App\Agent::class)
            ->create()
            ->account()
            ->create(factory(App\User::class)->make([
                    'first_name' => 'Daniel',
                    'last_name' => 'Rubango',
                    'username' => 'danielrubango'
                ])->toArray());

        $user->roles()->attach(factory(App\Role::class)->create(['name' => 'Administrator']));

        $tutor = factory(App\Tutor::class, 50)->create()->each(function($tutor) {
        	$tutor->account()->create(factory(App\User::class)->make()->toArray());

        	$children = [1, 2, 3, 4];

        	factory(App\Student::class, array_random($children))->create()
        		->each(function($child) use ($tutor) {
		        	$child->account()->create(factory(App\User::class)->make()->toArray());

		        	$child->tutor()->attach($tutor);
		        });
        });

        // factory(App\Message::class, 100)->create()->each();

        // array_random($agents->pluck('id')->all());
        $this->call(LevelsTableSeeder::class);
    }
}
