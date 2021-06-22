<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class DeskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('desks')->insert([
					[
						'name' => 'Александр'
					],
					[
						'name' => 'Андрей'
					],
					[
						'name' => 'Георгий'
					],
					[
						'name' => 'Семен'
					],
					[
						'name' => 'Юрий'
					],
					[
						'name' => 'Егор'
					],
					[
						'name' => 'Мстислав'
					],
					[
						'name' => 'Сергей'
					],
					[
						'name' => 'Марк'
					],
					[
						'name' => 'Вениамин'
					],

				]);
    }
}
