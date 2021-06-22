<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class TasksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
					[
						'card_id' => 1,
						'name' => 'задача номер 1'
					],
					[
						'card_id' => 2,
						'name' => 'задача номер 2'
					],
					[
						'card_id' => 3,
						'name' => 'задача номер 3'
					],
					[
						'card_id' => 4,
						'name' => 'задача номер 4'
					],
					[
						'card_id' => 5,
						'name' => 'задача номер 5'
					],
					[
						'card_id' => 6,
						'name' => 'задача номер 6'
					],
				]);
    }
}
