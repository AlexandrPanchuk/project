<?php

/*
	Получить все ссылки клиник
*/

function getInfo(string $url)
{

	$page_all_clinics = file_get_contents($url);

	preg_match_all('/<div class="page.*?">(.*?)<\/div>/s', $page_all_clinics, $pagination);
	$pagination = array_pop($pagination);

	foreach ($pagination as $value) {
		$number[] = (int)$value;
	}

	
	$max = max($number); // количество пагинации на странице

	for ($i = 1; $i <= $max; $i++)
	{
		$content = file_get_contents($url.$i);

		preg_match_all('/<div.*?class="expertName".*?>(.*?)<\/div>/s', $content, $clinics);
		$clinics =array_pop($clinics);

		foreach ($clinics as $tag_a) 
		{
			preg_match('/<a.*?href="(.*?)".*?>/s', $tag_a, $link);
			if (!empty($link[1]))	
				$all_link_clinics[] = $link[1];
		}
	}

	/*
		имея все ссыли клиник, пройтись по всем ссылкам и получить нужный контент
	*/
	$info = [];	
	foreach ($all_link_clinics as $link_clinic) 
	{
		$one_page_clinic = file_get_contents($link_clinic);

		// название клиники
		preg_match('/<div class="expertName">(.*?)<\/div>/s', $one_page_clinic, $title);
		$info[$link_clinic]['title'] = trim($title[1]);

		// краткое описание
		preg_match('/<div class="expertSpeciality">(.*?)<\/div>/s', $one_page_clinic, $desc);
		$info[$link_clinic]['description'] = trim($desc[1]);

		// удобства
		preg_match('/<div class="experience">(.*?)<\/div>/s', $one_page_clinic, $experience);
		$info[$link_clinic]['experience'] = trim($experience[1]);

		// оценка
		preg_match('/<div class="expertLevel">.*?<span>(.*?)<\/span>.*?<\/div>/s', $one_page_clinic, $level);
		$info[$link_clinic]['level'] = trim(strip_tags($level[1]));

		// полное описание 	
		preg_match('/<div class="aboutExpert">(.*?)<\/div>/s', $one_page_clinic, $about);
		$info[$link_clinic]['about'] = trim(strip_tags($about[1]));

		// график работы


		// адрес

	}	

	if (!empty($info)) {
		return $info;
	} else {
		return NULL;
	} 

}


$link = 'http://experts.org.ua/clinics/all/';
// $link = 'http://experts.org.ua/experts/all/';
$infoLinks = getInfo($link);

echo "<pre>";
var_dump($infoLinks);
echo "</pre>";