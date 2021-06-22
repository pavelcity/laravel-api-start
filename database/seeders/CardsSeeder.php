<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CardsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cards')->insert([
					[
						'desk_list_id' => 1,
						'name' => 'Карточка номер 1'
					],
					[
						'desk_list_id' => 2,
						'name' => 'Карточка номер 2'
					],
					[
						'desk_list_id' => 3,
						'name' => 'Карточка номер 3'
					],
					[
						'desk_list_id' => 4,
						'name' => 'Карточка номер 4'
					],
					[
						'desk_list_id' => 5,
						'name' => 'Карточка номер 5'
					],
					[
						'desk_list_id' => 6,
						'name' => 'Карточка номер 6'
					],
				]);
    }
}
