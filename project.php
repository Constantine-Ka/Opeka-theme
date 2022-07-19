<?php
/*
Template Name: Проекты
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/project.css">
<section id="titlePage">
    <div class='container'>
        <h2 class="entry-title">Новости</h2>
    </div>
</section>

<section id="project">
    <div class='container'>
        <div class="row" id="btnBlock">
            <input type="radio" name="project" id="proj0" v-on:click="cat = '0'" checked="true">
            <label for="proj0">Радость-лекарство от старости</label>
            <input type="radio" name="project" id="proj1" v-on:click="cat = '1'">
            <label for="proj1">Дарим праздник подопечным</label>
            <input type="radio" name="project" id="proj2" v-on:click="cat = '2'">
            <label for="proj2">Достойная старость</label>
            <input type="radio" name="project" id="proj3" v-on:click="cat = '3'">
            <label for="proj3">Психология в помощь здоровью и долголетию</label>
            <input type="radio" name="project" id="proj4" v-on:click="cat = '4'">
            <label for="proj4">Благотворительный турнир по лазертагу</label>
            <input type="radio" name="project" id="proj5" v-on:click="cat = '5'">
            <label for="proj5" style="display:none">Покровская ярмарка</label>
        </div>

        <div class="row" v-show="cat == '0'">
            <p class="greenPoint">Проект "Радость-лекарство от старости"</p>
            <div class="desc">
                <p>Проект разработан для подопечных, проживающих
                    в отделениях сестринского&nbsp;ухода. На данный момент отделения сестринского
                    ухода закрыты для посещения, в связи с этим нам пришлось столкнуться с рядом целей и задач :
                </p>
                <ul>
                    <li> -сохраним общение с близкими и
                        волонтерами не смотря на установленный режим посещения;
                    </li>
                    <li> -разнообразим досуг бабушек и дедушек,
                        внедряя новые развивающие секции.
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p>Так как посещение отделений запрещено мы будем развивать и популяризировать онлайн занятие для
                    пожилых людей проживающих в отделениях. Это актуально за счет безопасного общения дистанционно и
                    дарит возможность общения с близкими.</p>
                <p> По результатам работы психолога, который был реализован в рамках проекта "ПСИХОЛОГИЯ В ПОМОЩЬ
                    ЗДОРОВЬЮ И ДОЛГОЛЕТИЮ" им был произведен анализ и формирован список потребностей подопечных.
                    Психолог (реализованный в рамках данного проекта) сделает вывод, что проживающим в отделениях не
                    хватает более разнообразного досуга (уроки по рисованию, лепке и многому другому), общения с
                    родственниками и волонтерами.</p>
                <p> </p>
                <h2 class="winner__details-title" >Для решения данных задач формируются
                    группы по следующим направлениям:</h2>
                <ul>
                    <li>группа по занятию рисованием в формате
                        онлайн; </li>
                    <li>группа по занятию настольными играми в
                        формате онлайн;</li>
                    <li>группа по занятию лепкой в формате
                        онлайн;</li>
                    <li>группа по чтению книг в текстовом и
                        аудио формате, просмотр фильмов или концертов онлайн;</li>
                    <li>группа по изучению компьютерных
                        технологий (будут привлечены все подопечные)</li>
                </ul>
                <p>&nbsp;</p>
                <p>Культуролог проходит курс по повышению квалификации, способствуя более грамотному подходу к
                    реализации проекта. Данный сотрудник осуществляет время проведения мастер-классов, присутствуя в
                    отделениях лично, а так же занимать с ними дополнительно:</p>
                <ul>
                    <li><b>Онлайн специалисты</b> будут
                        проводить занятия по видео-связи;</li>
                    <li><b>IT-специалист</b> необходим для
                        слежения за стабильным подключением техники и работой всего необходимого для
                        онлайн коммуникаций;</li>
                    <li><b>Менеджер</b> найдет специалистов,
                        которые будут учить подопечных развиваться в вышеперечисленных
                        направлениях;</li>
                    <li> <b>Культуролог</b> проведет опрос среди
                        подопечных, чтобы понять кто конкретно хочет заниматься в той или иной
                        группе, после полученных данных культуролог передает информацию менеджеру. Он составляет удобное
                        для всех
                        расписание (с учетом того, если один человек захочет прибывать в нескольких группах сразу) и
                        согласует со
                        специалистами. </li>
                </ul>
                <p>&nbsp;</p>
                <p>В ходе проведения данных мероприятий бабушек
                    и дедушек будут обучать компьютерной грамотности для онлайн-связи с
                    близкими, волонтерами и друзьями, так как общение с людьми необходимо для любого человека. Во время
                    проекта будет
                    осуществлять связь с различным НКО, входе которой мы будем обмениваться опытом, узнавать о новых
                    акциях и проектах и
                    осуществлять различную взаимопомощь. </p>
                <p> </p>
                <h2 class="winner__details-title" >Для реализации проекта приобретено:</h2>
                <ul>
                    <li>материалы для рисования;</li>
                    <li>настольные игры;</li>
                    <li>материалы для лепки; </li>
                    <li><span class="masha_index masha_index24" rel="24"></span>подписки на онлайн сервисы для прочтения
                        книг, просмотров фильмов или концертов;</li>
                    <li><span class="masha_index masha_index25" rel="25"></span>оборудование для онлайн коммуникаций.
                    </li>
                </ul>
                <p>&nbsp;</p>
                <p style="text-align: center; letter-spacing: 0; ">
                </p>
            </div>
            <?php
            $q = new WP_Query( 'cat=13&posts_per_page=1000');
            if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                                the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons" style="opacity: 0.6;">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg); "></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px; "></div>
                </div>
            </div>
        </div>
        <div class="row" v-show="cat == '1'">
            <p class="greenPoint">Проект "Дарим праздник подопечным"</p>
            <div class="desc">
                <p><b><span class="masha_index masha_index3" rel="3"></span>С песней жить веселей! </b></p>
                <p><span class="masha_index masha_index4" rel="4"></span>Наши бабушки и дедушки очень любят праздники, и
                    мы вместе с партнерами стараемся всегда организовывать их для них.</p>
                <p><span class="masha_index masha_index5" rel="5"></span>Для пожилого человека крайне важны радостные
                    эмоции и общение.</p>
                <p><b><span class="masha_index masha_index6" rel="6"></span>Программа «Дарим праздник подопечным»
                        направлена на:</b></p>
                <p><span class="masha_index masha_index7" rel="7"></span>- работу с творческими коллективами, артистами,
                    музыкальными группами, аниматорами и всеми людьми, которые занимаются творчеством;</p>
                <p><span class="masha_index masha_index8" rel="8"></span>- сотрудничество с организациями,
                    благотворителями, волонтерами, неравнодушными гражданами.</p>
                <p><span style="font-weight: bold; letter-spacing: 0px; word-spacing: 0.1em;"><span
                            class="masha_index masha_index9" rel="9"></span>По двум основным направлением:</span>
                </p>
                <p><span class="masha_index masha_index10" rel="10"></span>- организация культурно – досуговых
                    мероприятий;</p>
                <p><span class="masha_index masha_index11" rel="11"></span>- подготовка подарков к праздникам.</p>
                <p><br>
                </p>
                <p>Желающих для совместной организации
                        концертов, музыкальных выступлений, творческих вечеров, мастер классов на базе отделений
                        сестринского&nbsp;ухода.</p>
                <p><span style="letter-spacing: 0px; word-spacing: 0.1em;"><span class="masha_index masha_index13"
                            rel="13"></span>(
                        <!--filter:с. Сосновка-->с.&nbsp;Сосновка
                        <!--/filter--> Мордовского района и
                        <!--filter:с. Иноковка-->с.&nbsp;Иноковка
                        <!--/filter--> 2-ая Кирсановского р-на).</span></p>
                <p><span class="masha_index masha_index14" rel="14"></span>Вы можете передать подарки нашим
                    подопечным
                    перед праздниками или просто так, чтобы подарить внимание и приятные эмоции. Подарки могут быть
                    любыми, главное, чтобы бабушки и дедушки могли использовать его в быту.</p>
                <p><br>
                </p>
                <p style="text-align: left;"><b><span class="masha_index masha_index15" rel="15"></span>Самые
                        распространенные варианты:</b></p>
                <p style="text-align: left;"><br>
                </p>
                <p style="text-align: center; "><b> </b></p>
                <div class="column"
                    style="text-align:justify;-webkit-column-count: 3;-moz-column-count: 3;column-count: 3;">
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index16" rel="16"></span> - одежда (халаты, футболки, костюмы,
                        платочки);</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index17" rel="17"></span> - шампуни;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index18" rel="18"></span> - средства личной гигиены;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index19" rel="19"></span> - крема;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index20" rel="20"></span> - украшения для волос (резинки или
                        ободки);</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index21" rel="21"></span> - мягкие игрушки;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index22" rel="22"></span> - книги;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index23" rel="23"></span> - настольные игры;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index24" rel="24"></span> - комнатные цветы;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index25" rel="25"></span> - элементы декора;</p>
                    <p style="text-align: left; letter-spacing: 0;text-indent:0;font-family: "><span
                            class="masha_index masha_index26" rel="26"></span> - и т.д. на Ваше усмотрение.</p>
                </div>
                <p><br>
                    <br><span class="masha_index masha_index27" rel="27"></span>
                    Сейчас посещение отделений по Постановлению Главного санитарного врача по Тамбовской области №1
                    от
                    12.01.2021 запрещено. Поэтому выездные мероприятия в отделениях пока не проводим.</p>
                <p><span class="masha_index masha_index28" rel="28"></span>Все подарки передаем в отделения. После
                    дополнительной обработки их раздают подопечным.</p>
                <p style="text-align: justify;"><span times="" new=""><span helvetica="" sans=""><span
                                class="masha_index masha_index29" rel="29"></span>С нашими сотрудниками Вы можете
                            согласовать доставку подарков в отделения (Транспортной компанией, через нас или
                            самостоятельно).</span><br>
                    </span></a></p><span helvetica="" sans=""><span class="masha_index masha_index30"
                        rel="30"></span>Принять участие дистанционно - записав видео поздравления или выступления и
                    прислать его нам на электронную почту:&nbsp;</span><span><a href="mailto:ano.opeka@gmail.com"
                        target="_blank" title="ano.opeka@gmail.com">ano.opeka@gmail.com</a></span><span helvetica=""
                    sans="">&nbsp;или позвонить по телефону 8 (4752)71-11-73 (по будням с 8.00 до 17.00) и выбрать
                    удобный способ отправки сообщения.<br>

                    <div style="text-align: center;"><span style="letter-spacing: 0px; word-spacing: 0.1em;">Порадуем
                            одиноких бабушек и дедушек вместе!&nbsp;</span></div>
                </span>
            </div>
            <?php
    $q = new WP_Query( 'cat=9&posts_per_page=1000');
    if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                        the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px"></div>
                </div>
            </div>
        </div>
        <div class="row" v-show="cat == '2'">
            <p class="greenPoint">Проект "Достойная старость"</p>
            <div class="desc">
                <p style="text-align: justify; "><b><span class="masha_index masha_index3" rel="3"></span>Каждый
                        человек
                        мечтает...</b></p>
                <p style="text-align: justify; "><b><span class="masha_index masha_index4" rel="4"></span> чтобы его
                        старость была здоровой, счастливой, комфортной и активной, в окружении родных и
                        близких.&nbsp;</b></p>
                <p style="text-align: justify; "><br>
                </p>
                <p style="text-align: justify; "><span sans=""></span><span sans=""><span
                            class="masha_index masha_index5" rel="5"></span>К сожалению, не всегда этому суждено
                        сбыться. Когда пожилой человек одинок и не может обеспечить свой быт самостоятельно, он
                        может
                        жить в учреждениях интернатного типа.</span><br>
                    <span style="letter-spacing: 0px; word-spacing: 0.1em;"></span></p>
                <p style="text-align: justify; "><span style="letter-spacing: 0px; word-spacing: 0.1em;"><span
                            class="masha_index masha_index6" rel="6"></span>Автономная некоммерческая организация
                        "Центр
                        инновации в социально-медицинском обслуживании «ОПЕКА»" предоставляет социальные услуги с
                        обеспечением проживания и необходимого ухода пожилым людям и инвалидам.</span></p>
                <p style="text-align: justify; "><span class="masha_index masha_index7" rel="7"></span>Наши
                    подопечные –
                    это бабушки и дедушки, оставшиеся один на один со своими тяготами, проблемами, болезнями. Они не
                    могут позаботиться о себе-здоровье не позволяет. Родственники далеко, или у них свои сложности,
                    а у
                    большинства – родни нет.</p>
                <p style="text-align: justify; "><span class="masha_index masha_index8" rel="8"></span>Коллектив
                    организации старается создать комфортные условия для жизни каждого подопечного, обеспечить всем
                    необходимым (питание, одежда, предметы быта, средства личной гигиены, личные вещи). Организует
                    досуг
                    и праздники.</p>
                <p style="text-align: justify; "><span class="masha_index masha_index9" rel="9"></span>Чтобы пожилые
                    люди ощущали теплоту, внимание и заботу со стороны, чувствовали себя нужными.</p>
                <p style="text-align: justify; "><span class="masha_index masha_index10" rel="10"></span>Каждый
                    сотрудник настоящий профессионал своего дела и имеет многолетний опыт работы.</p>
                <p style="text-align: justify; "><br>
                </p>
                <p style="font-weight: bold; "><span class="masha_index masha_index11" rel="11"></span>Цель
                    программы:
                </p>
                <p style=""><span class="masha_index masha_index12" rel="12"></span>Создание комфортных условий
                    проживания для одиноких пожилых людей и инвалидов в отделениях
                    <!--filter:сестринского ухода-->сестринского&nbsp;ухода
                    <!--/filter--> АНО «ОПЕКА», забота о здоровье и благополучии подопечных.</p><br>
                <p style="text-indent: 0;text-align:center;"> </p>
                <p style="text-indent: 0;text-align:center;"><br>
                </p>
                <p style="text-align: left;" new=""><span
                            class="masha_index masha_index13" rel="13"></span>Основные направления:</span><span
                        style="letter-spacing: 0px; word-spacing: 0.1em; text-indent: 1.5em;">&nbsp;</span></p>
                <ul>
                    <li><span class="masha_index masha_index14" rel="14"></span>обновление мебели, техники,
                        хозяйственного инвентаря;</li>
                    <li><span class="masha_index masha_index15" rel="15"></span>проведение ремонта основных
                        помещений и
                        поддержание здания в надлежащем состоянии; </li>
                    <li><span class="masha_index masha_index16" rel="16"></span>разнообразие питания подопечных (в
                        соответствии с разрешенным перечнем); </li>
                    <li><span class="masha_index masha_index17" rel="17"></span>организация досуга и культурно –
                        развлекательной программы; </li>
                    <li><span class="masha_index masha_index18" rel="18"></span>поздравление с основными
                        праздниками;
                    </li>
                    <li><span class="masha_index masha_index19" rel="19"></span>Обеспечение&nbsp;отделений
                        средствами&nbsp;дезинфекции и индивидуальной&nbsp;защиты (новое направление, действует с
                        2020
                        года).</li>
                </ul>
                <p style=" text-align:justify"><br>
                </p>
                <p style="word-spacing: 1.1px;"><span
                            class="masha_index masha_index20" rel="20"></span>Описание программы</span></p>
                <p><span class="masha_index masha_index21" rel="21"></span>В наших учреждениях пожилые люди
                    проживают на
                    постоянной основе, но могут по собственному желанию отправиться к себе домой.</p><br>
                <p><span class="masha_index masha_index22" rel="22"></span>Как показывает практика – для многих
                    отделение
                    <!--filter:сестринского ухода-->сестринского&nbsp;ухода
                    <!--/filter--> становится вторым домом, а сотрудники и соседи по комнате – по настоящему родными
                    людьми и друзьями.</p> <br>
                <p><span class="masha_index masha_index23" rel="23"></span>Мы ведем постоянную работу по сохранению
                    достигнутого уровня оснащения, продолжению обновления техники и мебели, проведению необходимых
                    ремонтных работ.</p><br>
                <p><span class="masha_index masha_index24" rel="24"></span>В рамках программы мы помогаем подопечным
                    отделений&nbsp;сестринского&nbsp;ухода в с.&nbsp;Сосновка Мордовского&nbsp;р-на и
                    с.&nbsp;Иноковка&nbsp;2-ая Кирсановского&nbsp;р-на Тамбовской&nbsp;области. Сейчас это более 60
                    пожилых людей и инвалидов.</p>
                <p><br>
                </p>
                <p style="text-align: center;">
                </p>
                <p style="text-align: center;"><br>
                </p>
                <p><b>Существенный объем задач и
                        потребностей
                        связан с:</b></p>
                <p><b></b></p>
                <ul>
                    <li>
                        <p><b><span class="masha_index masha_index26" rel="26"></span>обслуживанием зданий
                                отделений:</b></p>
                        <p><span class="masha_index masha_index27" rel="27"></span>Строениям несколько десятков лет,
                            без
                            проведения капитального ремонта, что делает обязательными: косметический ремонт,
                            проведение
                            работ по замене и обслуживанию коммуникаций, работ по обновлению фасадов.</p>
                    </li>
                    <li>
                        <p><b><span class="masha_index masha_index28" rel="28"></span>обеспечением подопечных всем
                                необходимым:</b></p>
                        <p><span class="masha_index masha_index29" rel="29"></span>Сумма средств, необходимая для
                            обеспечения работы отделений, закупку продуктов питания, оплату жилищно – коммунальных
                            услуг, замену оборудования, приобретение одежды, средств личной гигиены и многого
                            другого
                            превышает сумму поступлений. Поэтому для поддержания стабильности и решения всех
                            постоянных
                            и внештатных задач необходима помощь со стороны – поддержка благотворителей и партнеров.
                            Именно благодаря краудфандинговым проектам и прямому сотрудничеству становятся возможны
                            обновления и долгожданные положительные изменения. </p>
                    </li>
                    <li>
                        <p><span style="letter-spacing: 0px; word-spacing: 0.1em;"><b><span
                                        class="masha_index masha_index30" rel="30"></span>обеспечение отделений
                                    средствами дезинфекции и индивидуальной защиты</b> (новое направление, действует
                                с
                                2020 года).&nbsp;Пандемия «Covid-19» внесла коррективы в привычный уклад жизни
                                отделений.</span></p>
                        <p><span class="masha_index masha_index31" rel="31"></span>Средства для дезинфекции
                            поверхностей
                            и средства индивидуальной защиты (СИЗы) стали обязательными, т.к. возросло количество и
                            масштаб обязательных ежедневных уборок.</p>
                    </li>
                </ul>
                <p><b>Основные результаты:</b></p>
                <ul>
                    <li>
                        <p><span class="masha_index masha_index33" rel="33"></span>проведение ремонта комнаты отдыха
                            и
                            коридора в отделении с.&nbsp;Сосновка Мордовского района;</p>
                    </li>
                    <li>
                        <p><span class="masha_index masha_index34" rel="34"></span>замена мебели в комнатах отдыха;
                        </p>
                    </li>
                    <li>
                        <p><span class="masha_index masha_index35" rel="35"></span>регулярное обновление
                            технического
                            оснащения (стиральные машины, водонагреватели, телевизоры);</p>
                    </li>
                    <li>
                        <p><span class="masha_index masha_index36" rel="36"></span>регулярная замена сантехники и
                            хозяйственного инвентаря;</p>
                    </li>
                    <li>
                        <p><span class="masha_index masha_index37" rel="37"></span>ежегодное частичное обновление
                            фасада
                            зданий.</p>
                    </li>
                </ul>
            </div>

            <?php
        $q = new WP_Query( 'cat=10&posts_per_page=1000');
        if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                        the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg); "></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px; "></div>
                </div>
            </div>
        </div>
        <div class="row" v-show="cat == '3'">
            <p class="greenPoint">Проект "Психология в помощь здоровью и долголетию"</p>
            <div class="desc">
                <p align="justify" style=" "><span class="masha_index masha_index3"
                        rel="3"></span>«Психология в помощь здоровью и долголетию» — сейчас так называется один из
                    наших
                    грантовых проектов, который стал победителем Специального конкурса 2020 года «Фонда
                    Президентских
                    грантов».</p>
                <p align="justify" style=" "><br>
                </p>
                <p align="center" style="font-weight: bold;"><span
                        class="masha_index masha_index4" rel="4"></span>История программы началась вместе с активной
                    проектной работой организации в&nbsp;2015&nbsp;году.<br>
                    <br>
                </p>
                <p align="justify" style=""><span class="masha_index masha_index5"
                        rel="5"></span>«15&nbsp;сентября 2015&nbsp;г. состоялись первые встречи пожилых людей,
                    находящихся в&nbsp;отделениях
                    <!--filter:сестринского ухода-->сестринского&nbsp;ухода
                    <!--/filter--> АНО&nbsp;«Опека» (село «Шехмань» и&nbsp;посёлок «Сосновка»), с&nbsp;психологом.
                    Были
                    проведены групповые занятия и&nbsp;личные беседы с&nbsp;подопечными. Цель данного события&nbsp;—
                    с&nbsp;помощью психологических упражнений, общения, дать почувствовать людям, живущим
                    в&nbsp;отделениях, что они не&nbsp;одиноки, не&nbsp;забыты, они нужны, а&nbsp;также помочь
                    создать
                    им&nbsp;дружную, понимающую семью там, где они сейчас находятся, среди людей, оказавшихся
                    в&nbsp;одинаковых условиях. Кроме того, повышение эмоционального тонуса и&nbsp;настроения,
                    в&nbsp;результате проведения тренинга, просто необходимы пожилым людям, т.к. все это помогает
                    легче
                    справиться с&nbsp;недомоганиями и&nbsp;физической слабостью, которые, к&nbsp;сожалению, являются
                    частыми спутниками людей в&nbsp;преклонном возрасте».</p>
                <p align="justify" style=" "><span class="masha_index masha_index6"
                        rel="6"></span>Организовать работу в постоянном режиме на тот момент не удалось.</p>

                <p>&nbsp;</p>
                <p align="justify" style=" "><span
                        style=" letter-spacing: 0px; word-spacing: 0.1em;"><span
                            class="masha_index masha_index7" rel="7"></span>Главная сложность — это финансовые
                        затраты и
                        отсутствие целевого финансирования программы.</span></p>
                <p align="justify" style=" "><span class="masha_index masha_index8"
                        rel="8"></span>Ведь выбирая между обязательным бытовым, материальным, важным для всех
                    подопечных
                    и сотрудников организации и дополнительным духовном — выбор приоритетов очевиден.</p>
                <p align="justify" style=" "><span class="masha_index masha_index9" rel="9"></span>Но
                    потребность и положительный отклик подопечных мотивировал возвращаться к этому направлению
                    вновь.
                </p>
                <p align="justify" style=" "><br>
                </p>
                <p align="justify" style=""><span class="masha_index masha_index10" rel="10"></span>В
                    2018 году на помощь пришли наши друзья и партнеры — Благотворительный Фонд «ПРЕОДОЛЕНИЕ», они
                    стали
                    победителями Второго конкурса Фонда «Президентских грантов» в 2018 году с проектом «Философия
                    уюта».
                </p>
                <p align="justify" style=" "><span helvetica="" sans=""><span
                            class="masha_index masha_index11" rel="11"></span>В рамках реализации проекта с ноября
                        2018
                        года по май 2019 года к подопечным АНО «ОПЕКА», проживающим в
                        <!--filter:с. Сосновка-->с.&nbsp;Сосновка
                        <!--/filter--> Мордовского р-на и
                        <!--filter:с. Иноковка-->с.&nbsp;Иноковка
                        <!--/filter--> 2-ая Кирсановского р-на регулярно выезжала психолог проекта Носкова Галина
                        Юрьевна. Именно с ней мы начинали реализацию программы в 2015 году.</span></p>
                <p align="justify" style=" "><span class="masha_index masha_index12"
                        rel="12"></span>Так же в рамках этого проекта к нам приезжали волонтеры, общались с нашими
                    бабушками и дедушками, организовывали досуг и активности. Плюс обновилась мебель в комнате
                    отдыха.
                    Занятия проводились и с сотрудниками отделений, для помощи в снижении эмоциональной
                    напряженности и
                    получения персональных рекомендаций по взаимодействию с каждым подопечным. </p>
                <p align="justify" style=" "><span class="masha_index masha_index13"
                        rel="13"></span>Такой комплексный подход показал свою эффективность и повысил
                    заинтересованность
                    среди подопечных. </p>
                <p align="justify" style=" "><span
                        style=" letter-spacing: 0px; word-spacing: 0.1em;"><span
                            class="masha_index masha_index14" rel="14"></span>В 2020 году мы стали победителями
                        конкурса
                        Фонда президентских грантов. (Пока проект приостановлен, так как посещение отделений
                        запрещено в
                        соответствии с Постановлением №1 от 12.01.2021 года Главного санитарного врача по Тамбовской
                        области)</span></p>
                <p><span class="masha_index masha_index15"
                        rel="15"></span>Подробнее о действующем проекте:<span
                        style="text-align: center; letter-spacing: 0px; word-spacing: 0.1em;">&nbsp;</span></p>
                <h2 class="winner__details-title" style=""><span class="masha_index masha_index16"
                        rel="16"></span>Цель</h2>
                <p style="text-align: justify; letter-spacing: 0cm; word-spacing: 0.1em; "><span
                        class="masha_index masha_index17" rel="17"></span>Оказание психологической помощи подопечным
                    отделений
                    <!--filter:сестринского ухода-->сестринского&nbsp;ухода
                    <!--/filter-->, обеспечение общения и социальной активности одиноких пожилых людей.</p>

            </div>
            <?php
                $q = new WP_Query( 'cat=12&posts_per_page=1000');
                if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                        the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px"></div>
                </div>
            </div>
        </div>
        <div class="row" v-show="cat == '4'">
            <p class="greenPoint">Благотворительный турнир по лазертагу</p>
            <div class="desc">
                <p style="text-align: center; ">
                    <b>Помогая,&nbsp;ты&nbsp;всегда&nbsp;побеждаешь!</b></p>
                <p style="text-align: center; "><br>
                </p>
                <p>Так гласит девиз ежегодного благотворительного турнира по лазертагу «Большая игра во имя
                    добра» среди корпоративных команд.</p>
                <p style="text-align: justify;"><span class="masha_index masha_index5" rel="5"></span> Первый
                    благотворительный турнир состоялся в 2015 году. Это настоящее спортивное событие для всей
                    семьи.</p>
                <p style="text-align: justify; "><span class="masha_index masha_index6" rel="6"></span> Летом
                    этого года
                    запланировано проведение 8 – го турнира.</p>
                <p style="text-align: justify; "><span class="masha_index masha_index7" rel="7"></span>
                    Спортивное
                    состязание, активный досуг, отдых для всей семьи и помощь в обеспечении потребностей и
                    обустройстве
                    отделений сестринского ухода – все это благотворительный турнир по лазертагу. </p>
                <p style="text-align: justify; "><span class="masha_index masha_index8" rel="8"></span>Уникальность
                    мероприятие в формате проведения: спорт, отдых и участие в благотворительности.</p>

                <p style="text-align: justify; "> За
                    многолетнюю историю турнир показал свою эффективность и широкий диапазон развития. Команда
                    может
                    быть сформирована от организации, а так же возможно участие от нескольких организаций или
                    просто
                    от инициативной группы. Участники приезжают с группой поддержки, поэтому для детей
                    организуют
                    отдельное сражение (для детей от 5 лет), а так же конкурсы и подарки. В обязательную
                    программу
                    так же входит обед.</p>
                <p style="text-align: justify; "><br>
                </p>
                <p style="text-align: justify; "> По итогам проведения соревнований и
                    сформированного благотворительного фонда (сумма благотворительных взносов от команд) мы
                    обеспечиваем
                    решение актуальных на момент&nbsp; проведения, задач для отделений:</p>
                <p style="text-align: justify; "><br>
                </p>
                <p style="text-align: justify; "> <b><span class="masha_index masha_index11" rel="11"></span>Ранее,
                        средства собранные благодаря серии турниров, позволили:</b></p>
                <blockquote style="margin: 0 0 0 0; border: none; padding: 0px;">
                    <p style="text-align: justify; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index12" rel="12"></span>2015 год</span> -
                            приобрести
                            реабилитационное оборудование для инвалидов, проживающих в отделениях;</i> </p>
                    <p style="text-align: justify; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index13" rel="13"></span>2016 год</span> – закупить
                            продукты питания для подопечных отделений;</i> </p>
                    <p style="text-align: justify; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index14" rel="14"></span>2017 год</span> – собрать
                            часть
                            средств на ремонт отделения сестринского ухода в с Сосновка Мордовского р-на;</i>
                    </p>
                    <p style="text-align: left; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index15" rel="15"></span>2018 год</span> –
                            приобрести и
                            установить беседки в трех отделениях сестринского ухода </i></p>
                    <p style="text-align: left; "><i><span class="masha_index masha_index16" rel="16"></span>&nbsp;
                            &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                            (2&nbsp;‑&nbsp;АНО&nbsp;«ОПЕКА»&nbsp;и&nbsp;1&nbsp;‑&nbsp;отделение&nbsp;АНО&nbsp;ЦСП&nbsp;«Надежда»);</i>
                    </p>
                    <p style="text-align: justify; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index17" rel="17"></span>2019 год</span> – собрать
                            средства
                            на ремонт в отделении с Иноковка 2-ая Кирсановского района;</i> </p>
                    <p style="text-align: justify; "><i> <span style="text-decoration-line: underline;"><span
                                    class="masha_index masha_index18" rel="18"></span>2020 год</span> –
                            установить новую
                            систему пожарной безопасности в с. Сосновка Мордовского р-на (было необходимо после
                            проведения ремонта в коридоре и комнате отдыха).</i></p>
                    <p style="text-align: justify; "><i></i> </p>
                </blockquote>
                <p style="text-align:center;text-indent: 0"> </p>
            </div>
            <?php
                $q = new WP_Query( 'cat=6&posts_per_page=1000');
                if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                        the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px"></div>
                </div>

            </div>
        </div>
        <div class="row" v-show="cat == '5'">
            <p class="greenPoint">Покровская ярмарка</p>
            <div class="desc"></div>
            <?
            $q = new WP_Query( 'cat=11&posts_per_page=1000');
            if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing1">
                    <div class="swiper-wrapper sm1iSwiper">
                        <?php while ( $q->have_posts() ) {
                    $q->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="swiper-slide">
                            <div class="card">
                                <div class="crop">
                                    <? if ( has_post_thumbnail() ) {
                                        the_post_thumbnail('thumbnail');
                                    } else { ?>
                                        <img src="<? bloginfo('template_directory'); ?>/img/nophoto.png" alt="<? the_title(); ?>" >
                                    <? } ?>
                                </div>
                                <h3>
                                    <? the_title(); ?>
                                </h3>
                                <? the_excerpt(); 
                        the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img
                            src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset=""
                            style="position:absolute; right:10px"></div>
                </div>
            </div>
        </div>
        <div class="row" v-show="cat == ''">
            <p class="greenPoint">Не найдено</p>
            <div class="desc"></div>
        </div>

</section>
<script src="/wp-content/themes/opeka-theme/js/swiper-bundle.min.js?ver=1.0.0" id="swiper-libruary-js"></script>
<script src="<? echo(get_template_directory_uri())?>/js/vue.global.prod.js"></script>

<script src="<? echo(get_template_directory_uri())?>/js/project.js"></script>
<?php
get_sidebar('feedback');
get_footer();
?>