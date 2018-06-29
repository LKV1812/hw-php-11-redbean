<?php  

	require 'db.php';

	// // R::dispense('имя таблицы'); - создание новых записей
	// $course = R::dispense('courses');

	// // задаем значение бина(в данном случае заголовку)
	// $course->title = 'Курс по верстке';

	// // создаем динамически новые столбцы в таблице не заходя в саму таблицу изначально их там не было
	// $course->tuts = 10;
	// $course->homeworks = 8;
	// $course->level = "Для новичков";

	// // сохраняем бин чтобы он появился в бд
	// R::store($course);

	/**********Получение всех записей*********/

	// $courses = R::find('courses');
	// // echo "<pre>";
	// // print_r($courses);
	// // echo "</pre>";
	// foreach ($courses as $course) {
	// 	echo "ID: ".$course->id.'<br>';
	// 	echo "Название: ".$course->title.'<br>';
	// 	echo "Кол-во уроков: ".$course->tuts.'<br>';
	// 	echo "Кол-во ДЗ: ".$course->homeworks.'<br>';
	// 	echo "Уровень: ".$course->level.'<br>';
	// 	echo "<hr>";
	// }

	/**********Изменение записей*********/

	// получить строку таблицы
	// $course = R::load('courses', 1);

	// // теперь в нашей строке можем изменять значение, просто присвоив новые
	// $course->title = "React - ступень 1";
	// $course->tuts = 15;
	// $course->homeworks = 10;
	// $course->level = "Продвинутый";
	// R::store($course);

	// echo "ID: ".$course->id.'<br>';
	// echo "Название: ".$course->title.'<br>';
	// echo "Кол-во уроков: ".$course->tuts.'<br>';
	// echo "Кол-во ДЗ: ".$course->homeworks.'<br>';
	// echo "Уровень: ".$course->level.'<br>';
	// echo "<hr>";

	/**********Удаление записей*********/

	$course = R::load('courses', 1);
	R::trash($course);

?>