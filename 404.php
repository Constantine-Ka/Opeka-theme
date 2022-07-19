<?php
/**
 * Шаблон для 404 страницы (Не найдена)
 *
 * @package opeka-theme
 */

get_header();
?>
<title>Упс, страница не найдена</title>

<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/404.css">
<div class='container er404'>
    <div class="bg">
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
        <div class="round"></div>
    </div>
    <div class="row">
        <span>4</span>
        <img src="<? echo(get_template_directory_uri())?>/img/404.png" alt="Дедушка, пытается с биноклем найти страницу">
        <span>4</span>
    </div>
    <div class="row">
        <p>Страница не найдена </p>
    </div>
</div>

<?php
get_sidebar('feedback');
get_footer();
?>
