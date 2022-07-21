<?php 

$sites = array(

"en" => "index.html",

// "cn" => "index_cn.html",

// "de" => "index_de.html",

// "el" => "index_el.html",

// "es" => "index_es.html",

// "fr" => "index_fr.html",

// "id" => "index_id.html",

// "it" => "index_it.html"

);

// Get 2 char lang code

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Установка языка по умолчанию если переменная $lang не соответствуют не одному значению из массива $site

if (!isset($sites[$lang])) {

$lang = ‘en’;

}

// Редирект пользователя на нужный домен

header('Location: ' . $sites[$lang]);

exit;