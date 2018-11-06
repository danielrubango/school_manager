<?php

use Illuminate\Database\Seeder;

class LevelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Section::class)->create(['name' => 'Secondaire'])->each(function($section) {
            collect([ '1er', '2e' ])->each(function($level) use ($section) {
                $section->levels()->create(factory(App\Level::class)->make([
                    'name' => $level
                ])->toArray());
            });
        });

        factory(App\Section::class)->create(['name' => 'Humanité'])->whereName('Humanité')->each(function($section) {
            collect([ '3e SC', '4e BC', '5e BC', '6e BC' ])->each(function($level) use ($section) {
                $section->levels()->create(factory(App\Level::class)->make([
                    'name' => $level
                ])->toArray());
            });

            collect([ '3e Lit.', '4e Lit.', '5e Lit.', '6e Lit.' ])->each(function($level) use ($section) {
                $section->levels()->create(factory(App\Level::class)->make([
                    'name' => $level
                ])->toArray());
            });

            collect([ '3e Peda.', '4e Peda', '5e Peda', '6e Peda' ])->each(function($level) use ($section) {
                $section->levels()->create(factory(App\Level::class)->make([
                    'name' => $level
                ])->toArray());
            });

            collect([ '3e Com.', '4e Com', '5e Com', '6e Com' ])->each(function($level) use ($section) {
                $section->levels()->create(factory(App\Level::class)->make([
                    'name' => $level
                ])->toArray());
            });
        });

        App\Student::all()->each(function($student) {
            if(array_random([true, false])) {
                factory(App\Inscription::class)->create([
                    'level_id' => array_random(App\Level::get()->pluck('id')->all()),
                    'student_id' => $student->id
                ]);
            }
        });
    }
}
