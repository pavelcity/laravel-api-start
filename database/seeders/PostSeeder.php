<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
					[
						'title' => 'Как установить Windows 11 на свой компьютер',
						'descr' => 'Ранее на этой неделе в интернет просочилась тестовая сборка Windows 11, удивившая многих своим новым интерфейсом.'
					],
					[
						'title' => 'Обои из Windows 11 уже появились в сети. Скачайте их',
						'descr' => 'Основные обои по умолчанию выглядят как скомканные куски ткани и включают в себя светлый и темный режимы. Это кардинальный отход от логотипа Windows, который использовался по умолчанию в Windows 10, и от двух цветов ромашки на обоях в Windows 8.'
					],
					[
						'title' => 'Пять ключевых процессов в Антарктике, которые надо затормозить',
						'descr' => 'Антропогенное изменение климата ведет Антарктику к точке невозврата. Это уже влияет на большинство земных систем и будет иметь серьезные последствия для человечества и биоразнообразия. К такому выводу пришла виртуальная экспертная рабочая группа Полярного института при Научном центре имени Вудро Вильсона и благотворительного фонда Pew Charitable Trusts, в состав которой вошли ведущие ученые — специалисты по Антарктике из различных научных сфер.'
					],
					[
						'title' => 'Экспертная рабочая группа отмечает',
						'descr' => 'Южный океан играет роль распределительного центра для Мирового океана: с участием его холодных вод регулируется тепловой режим, на соленость влияет схождение гигантских пресных айсбергов, а необыкновенное биоразнообразие обеспечивает значительную часть питательных веществ для всего живого. Но в последние годы его воды как на поверхности, так и на большой глубине теплели быстрее, чем в среднем по миру. Южный океан поглотил непропорционально большее количество антропогенного углекислого газа из всего улавливаемого Мировым океаном — около 40%. Следствием этого становятся фундаментальные сдвиги в жизни океана, что вызовет физические, биологические и социально-экономические последствия глобального масштаба.'
					],
					[
						'title' => 'Рост температуры океана.',
						'descr' => 'Теплые воды вокруг Антарктиды заставляют ледники отступать и приводят к таянию шельфового льда. Эти изменения могут вызвать нестабильность ледяного покрова и схождению льдов в океан, что приведет к их таянию и необратимому многометровому повышению глобального уровня моря с разрушительными последствиями для прибрежных регионов во всем мире — под угрозой существование 1 млрд человек.'
					],
					[
						'title' => 'Деградация ледяного покрова',
						'descr' => 'Изменения площади, сезонности и толщины морского льда приводят к утрате важнейших местообитаний, а также угрожают биоразнообразию. Это влияет на производительность и доступ рыболовных судов к ресурсам в условиях изменяющейся экосистемы.'
					],
					[
						'title' => 'Изменения способности региона поглощать углерод.',
						'descr' => 'Потепление снижает эффективность биосистемы Южного океана в обмене углеродом между атмосферой, популяциями растений и животных, а также поверхностными и глубокими слоями воды. Изменения в этом процессе — одном из самых важных экосистемных процессов Земли — несут необратимые последствия для здоровья Мирового океана.'
					],
				]);
    }
}