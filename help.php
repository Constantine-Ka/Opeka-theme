<?php
/*
Template Name: Помочь сейчас
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/help.css">
<section id="titlePage">
	<div class='container contact-check' style="justify-content: flex-start;">
		<h2 class="entry-title">Помочь сейчас </h2>
		<?php //e_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>
<section class="container" id="helpApp">
    <div class="row" id="helpBth">
        <input type="radio" name="page" id="card" v-on:click="page = 'card'"><label for="card">
            <img src="<? echo(get_template_directory_uri())?>/img/free-icon-two-credit-cards-79591_1.png" alt="">
            <h3>Банковской<br>картой</h3>
        </label>
        <input type="radio" name="page" id="crownd" v0-on:click="page = 'crownd'" onclick="window.location.href = 'https://nuzhnapomosh.ru/funds/opeka/'"><label for="crownd">
            <img src="<? echo(get_template_directory_uri())?>/img/image_62.png" alt="">
            <h3>Через сайт<br>“Нужна помощь”</h3>
        </label>
        <input type="radio" name="page" id="volonter" v-on:click="page = 'volonter'"><label for="volonter">
            <img src="<? echo(get_template_directory_uri())?>/img/premium-icon-volunteer-824155_1.png" alt="">
            <h3>Став нашим<br>волонтером</h3>
        </label>
        <input type="radio" name="page" id="other" v-on:click="page = 'other'"><label for="other">
            <img src="<? echo(get_template_directory_uri())?>/img/premium-icon-shopping-bag-4563490_1.png" alt="">
            <h3>Иная помощь</h3>
        </label>
    </div>
    <div class="row" id="money" v-if="page=='card'">
        <div class="pageDonate">
            <div class="str">
                <img src="/wp-content/themes/opeka-theme/img/Group_20.png" alt="">
                <h4>Здравствуйте! Вы собираетесь сделать пожертвование в пользу нашей автономной некоммерческой организации “Опека”</h4>
            </div>
            <? echo do_shortcode( '[leyka_campaign_form id="896"]' ); ?>
        </div>
    </div>
	<div class="row" id="pageVolonter" v-else-if="page=='volonter'">
		<p class="greenPoint">Волонтёр – это человек, который добровольно и безвозмездно делает что-то для людей, нуждающихся в помощи.</p>
        <p>Дело в том, что не только профессионализм и добросовестное отношение сотрудников к своей работе делают отделение сестринского ухода комфортным для одиноких пожилых людей и инвалидов, но и элементарное тепло и забота, живое общение, участие. И в этом бабушкам и дедушкам помогают наши волонтёры!<br><br>Вы тоже можете стать волонтёром Центра помощи «ОПЕКА»!</p>
        <h4>Ищем волонтеров для следующих направлений своей деятельности:</h4>
        <p class="greenPoint">Участие в поездках к бабушкам и дедушкам.</p>
        <p>Они очень ждут нас! Живого общения, немного внимания, тепла и заботы. Приветствуется наличие творческих способностей, но не является обязательным.</p>
        <p class="greenPoint">Участие в благотворительных акциях «АНО «ОПЕКА», спортивных турнирах, ярмарках, мастер-классах.</p>
        <p>Вы фотограф или оператор, любите создавать шедевры, у вас есть своя камера, желание сделать что-то значимое? Мы будем очень рады Вам. Помощь фотографа и оператора необходима нам на праздниках в стационарах, на благотворительных акциях, в подготовке социальных роликов.</p>
        <p class="greenPoint">Распространение информационных материалов</p>
        <p class="greenPoint">Помощь в организации и проведении конференции</p>
    </div>
    <div class="row" id="pageOther" v-else-if="page=='other'">
		<p class="greenPoint">Центр социальной помощи «ОПЕКА» вместе с Вами помогает одиноким пожилым людям и инвалидам</p>
        <p>Нам важна любая помощь — это может быть денежное пожертвование, материальная помощь, волонтерство или спонсорство определенных направлений деятельности.<br><br>Если Вы хотите стать официальным спонсором одного или нескольких направлений деятельности центра «ОПЕКА», пожалуйста, сообщите нам об этом на ano.opeka@gmail.com или по телефону (4752) 71-11-73.<br>Любой из нас может сделать подарок одиноким пожилым гражданам, находящимся в отделении сестринского ухода, так и одиноким, проживающим по соседству с Вами!<br><br>Нам известны их нужды и мы обеспечим их уют вместе с Вами.<br><br>Дорогие друзья! Все указанные ниже позиции всегда актуальны. Искренне благодарны Вам за поддержку!</p>
        <p class="greenPoint">Изделия медицинского назначения</p>
        <ul>
            <li>Перевязочные материалы;</li>
            <li>Мочеприемники прикроватные;</li>
            <li>Контейнеры 500 мл;</li>
            <li>Шпатели одноразовые стерильные, и нестерильные;</li>
            <li>Перчатки нитриловые N150 в упаковке, размеры S, M, L;</li>
            <li>Фартуки непромокаемые;</li>
            <li>Тест-полоски к глюкометру (аккучек актив);</li>
            <li>Тонометры;</li>
            <li>Электронные градусники.</li>
        </ul>
        <p class="greenPoint">Гигиена</p>
        <ul>
            <li>Мочалки мягкие;</li>
            <li>Станки одноразовые и помазки для бритья, гели и бальзамы до и после бритья;</li>
            <li>Памперсы для взрослых;</li>
            <li>Одноразовые впитывающие пеленки 60×90 см;</li>
            <li>Гель для массажа Menalind (200 мл);</li>
            <li>Помада гигиеническая;</li>
            <li>Влажные салфетки для ухода за лежачими больными;</li>
            <li>Ватные палочки;</li>
            <li>Спрей «Октенисепт» для обработки кожи;</li>
            <li>Шампуни, кремы, зубные пасты;</li>
            <li>Щетки и приспособления для чистки языка;</li>
            <li>Туалетная бумага (мягкая);</li>
            <li>Одноразовые полотенца;</li>
            <li>Гель для мытья лежачих больных.</li>
        </ul>
        <p class="greenPoint">Бытовая химия</p>
        <ul>
            <li>Domestos и другие моющие/чистящие средства для ванных и туалетных комнат;</li>
            <li>Жидкое мыло;</li>
            <li>Стиральный порошок для машин-автоматов.</li>
        </ul>
        <p class="greenPoint">Продукты питания</p>
        <ul>
            <li>Кофейный напиток, какао;</li>
            <li>Чай;</li>
            <li>Сахар;</li>
            <li>Сладости, сухофрукты.</li>
        </ul>
        <p class="greenPoint">Другие вещи</p>
        <ul>
            <li>Постельное белье;</li>
            <li>Полотенца;</li>
            <li>Сорочки женские;</li>
            <li>Расчески;</li>
            <li>Пластиковые контейнеры с герметичной крышкой 400-500 мл;</li>
            <li>Прикроватные коврики на резиновой основе;</li>
            <li>Носки х/б, чулки х/б, колготки х/б;</li>
            <li>Халаты женские;</li>
            <li>Майки мужские;</li>
            <li>Мужское нижнее белье;</li>
            <li>Одеяла, теплые пледы;</li>
            <li>Тапочки;</li>
            <li>Канцелярские товары (бумага, ручки).</li>
            
        </ul>
    </div>
    <div class="row" v-else></div>
</section>

<script src="<? echo(get_template_directory_uri())?>/js/vue.global.prod.js"></script>

<!-- <script src="https://unpkg.com/vue@next"></script> -->
<script src="<? echo(get_template_directory_uri())?>/js/help.js"></script>

<?php
get_sidebar('feedback');
get_footer();
?>