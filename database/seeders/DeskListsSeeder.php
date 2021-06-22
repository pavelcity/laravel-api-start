<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DeskListsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desk_lists')->insert([
					[
						'desk_id' => 1,
						'name' => 'задача 1'
					],
					[
						'desk_id' => 1,
						'name' => 'задача 11'
					],
					[
						'desk_id' => 2,
						'name' => 'задача 2'
					],
					[
						'desk_id' => 2,
						'name' => 'задача 21'
					],
					[
						'desk_id' => 3,
						'name' => 'задача 3'
					],
					[
						'desk_id' => 4,
						'name' => 'задача 4'
					],
					[
						'desk_id' => 5,
						'name' => 'задача 5'
					],
					[
						'desk_id' => 6,
						'name' => 'задача 6'
					],
				]);
    }
}
