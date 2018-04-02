<?php

use Illuminate\Database\Seeder,
    App\Schedule;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws \Illuminate\Contracts\Filesystem\FileNotFoundException
     */
    public function run()
    {
        DB::table('schedules')->truncate();
        $json = File::get('database/data/schedules.json');
        $data = json_decode($json, true);

        foreach ($data as $obj) {
            Schedule::create($obj);
        }
    }
}
