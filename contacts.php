<?php
/*
Template Name: Контакты
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/stationar.css">
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/contacts.css">
<section id="titlePage">
	<div class='container contact-check' style="justify-content: flex-start;">
		<h2 class="entry-title">Контакты </h2>
		<?php //e_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>




<!-- <script src="https://unpkg.com/vue"></script> -->
<section>
	<div id="app">
		<div class="container contact-check"  v-cloak>
			<div class="row">
				<input id="ino" type="radio" v-on:click="chooseLocate = 'ino';" name='contact'>
				<label for="ino">
					<img src="<? echo(get_template_directory_uri())?>/img/icon-home-2404531.png" alt="">
					<p><span>Отделение сестринского ухода</span><br>Село Иноковка 2-я</p>
				</label>
				<input id="office" type="radio" v-on:click="chooseLocate = 'office'" name='contact' checked="true">

				<label for="office">
					<img src="<? echo(get_template_directory_uri())?>/img/premium-icon-workplace-3405670.png" alt="">
					<p><span>Головной офис </span></p>
				</label>
				<input id='sos' type="radio" v-on:click="chooseLocate = 'sos'" name='contact'>

				<label for="sos">
					<img src="<? echo(get_template_directory_uri())?>/img/icon-home-2404531.png" alt="">
					<p><span>Отделение сестринского ухода</span><br>Село Сосновка</p>
				</label>
			</div>
		</div>
		<div v-if="chooseLocate == 'office'" class="container contact-page" id="office" v-cloak>
			<div class="row basic">
				<div class="timeToWorkBlock">
					<div class="weekday">
						<div class="days">
							<span v-on:click="timeWork(false)">Пн</span>
							<span v-on:click="timeWork(false)">Вт</span>
							<span v-on:click="timeWork(false)">Ср</span>
							<span v-on:click="timeWork(false)">Чт</span>
							<span v-on:click="timeWork(true)">Пт</span>
						</div>
						<div class="time" id="worktime">{{timework}}</div>
					</div>
					<div class="holiday">
						<div class="days">
							<span>Сб</span>
							<span>Вс</span>
						</div>
						<div class="time">Выходной</div>
					</div>
					<div class="break">
						<div class="days">
							<span style="text-transform:none">Перерыв</span>
						</div>
						<div class="time">12:00 – 12:45</div>
					</div>
				</div>
				<div class="contactPage">
					<p>Уланова Наталия Владимировна</p>
					<a href="tel:+74752711173">+7 (4752) 71-11-73</a>
					<a href="tel:+7910755168">+7 (910) 755-10-68</a>
				</div>
				<div class="contactBlock">
					<div class="vk">
						<a href="https://vk.com/opeka365" target="_blank"
							rel="noopener noreferrer">https://vk.com/opeka365</a>
					</div>
					<div class="email">
						<a href="mailto:info@opeka365.ru">info@opeka365.ru</a>
						<a href="mailto:ano.opeka@gmail.com">ano.opeka@gmail.com</a>
					</div>
				</div>
			</div>
			<div class="row">
				<h5>Юридический/фактический адрес: 392018, Тамбовская область, г. Тамбов, ул. Широкая д.4</h5>
				<img src="<? echo(get_template_directory_uri())?>/img/PictureOffice.png" alt="">
				<iframe src="https://yandex.ru/map-widget/v1/?z=12&ol=biz&oid=1316533471" width="100%" height="400" frameborder="0"></iframe>
			</div>
			<div class="row hospital" id="controlTitle" style="display:flex">
				<h2 class="entry-title" style="margin: 0 auto 0 0;">Контролирующие органы</h2>
			</div>
			<div class="row hospital procure" id="controlOrganization" style="display:flex">
				<div class="procuring">
					<h4 style="margin: 0px auto 0 0;">Управление социальной защиты и семейной политики<br>Тамбовской области</h4>
					<p>Адрес: Тамбов, ул. Московская, д. 27 «А»<br>Контактный телефон:(4752) 79-16-02</p>
				</div>
				<div class="procuring">
					<h4 style="margin: 0px auto 0 0;">Управление Здравоохранения Тамбовской области</h4>
					<p>Адрес: Тамбов ул. Советская, 106<br>Контактный телефон: +7 (4752) 79-25-12</p>
				</div>
				<div class="procuring">
					<h4>Роспотребнадзор</h4>
					<p>Адрес: Тамбов, ул. Б. Васильева, д. 5<br>Контактый телефон: +7 (4752) 47-25-12</p>
				</div>
				<div class="procuring" style="width:340px">
					<h4>Росздравнадзор</h4>
					<p>Адрес: Тамбов, ул.Урожайная, д. 2 Ж<br>Контактый телефон: +7 (4752) -63-32-14</p>
				</div>
				<div class="procuring" style="max-width: 100%; width: 682px;">
					<h4>Номера вызова экстренных служб с городского/сотового телефона</h4>
					<p>Единый телефон <b>пожарных и спасателей</b> - 01/101
						<br><b>Полиция</b> - 02/102
						<br>Аварийная <b>газовая служба</b> - 04/104
						<br><b>ФСБ</b> по Тамбовской области +7 (4752) 72-40-70</p>
				</div>
			</div>
		</div>
		<div v-else-if="chooseLocate=='ino'" class="container contact-page" id="inokovka" v-cloak>
			<div class="row basic">
				<div class="timeToWorkBlock">
					<div class="weekday">
						<div class="days">
							<span>Пн</span>
							<span>Вт</span>
							<span>Ср</span>
							<span>Чт</span>
							<span>Пт</span>
						</div>
						<div class="time">08:00 – 16:00</div>
					</div>
					<div class="holiday">
						<div class="days">
							<span>Сб</span>
							<span>Вс</span>
						</div>
						<div class="time">Выходной</div>
					</div>
					<div class="break">
						<div class="days" style="text-transform:none">
							<span>Работа внутри отделения</span>
						</div>
						<div class="time">Круглосуточно</div>
					</div>
				</div>
				<div class="contactPage">
					<p>Малицкая<br>Ольга Ивановна</p>
					<a href="tel:+74753763725">+7(47537) 6-37-25</a>
					
				</div>
				
			</div>
			<div class="row">
				<h5>393385, Тамбовская область, Кирсановский район, село Иноковка 2-я, ул. Верхняя Луговка, дом № 14 "В"</h5>
				<img src="<? echo(get_template_directory_uri())?>/img/bg-ino.png" alt="">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A47a34037ca0b537f2a955e33bc32f54c78007db0b12075c4d349628c19b282da&amp;source=constructor" width="100%" height="597" frameborder="0"></iframe>
			</div>
			
		</div>
		<div v-else-if="chooseLocate=='sos'" class="container contact-page" id="sosnovka" v-cloak>
			<div class="row basic">
				<div class="timeToWorkBlock">
					<div class="weekday">
						<div class="days">
							<span>Пн</span>
							<span>Вт</span>
							<span>Ср</span>
							<span>Чт</span>
							<span>Пт</span>
						</div>
						<div class="time">08:00 – 16:00</div>
					</div>
					<div class="holiday">
						<div class="days">
							<span>Сб</span>
							<span>Вс</span>
						</div>
						<div class="time">Выходной</div>
					</div>
					<div class="break">
						<div class="days">
							<span style="text-transform:none">Работа внутри отделения</span>
						</div>
						<div class="time">Круглосуточно</div>
					</div>
				</div>
				<div class="contactPage">
					<p>Абдулмажидов<br>Юсуп Ибрагимович</p>
					<a href="tel:+74754276513">+7(47542) 7-65-13</a>
					
				</div>
				
			</div>
			<div class="row">
				<h5>392090, Тамбовская область, Мордовский район, село Сосновка, ул. Трудовая, дом № 3</h5>
				<img src="<? echo(get_template_directory_uri())?>/img/bg-sos.png" alt="">
				<iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ab5386eec43e258db1f4b185b96523006c9cb37ad139033239352e3afad8a3aed&amp;source=constructor" width="100%" height="602" frameborder="0"></iframe>
			</div>
			
		</div>
		<div v-else>В разработке</div>
	</div>
</section>
<script src="<? echo(get_template_directory_uri())?>/js/vue.global.prod.js"></script>

<!-- <script src="https://unpkg.com/vue@next"></script> -->
<script src="<? echo(get_template_directory_uri())?>/js/contacts.js"></script>

<?php
get_sidebar('feedback');
get_footer();
?>