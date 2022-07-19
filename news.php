<?php
/*
Template Name: Новости
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/newsList.css">
<section id="titlePage">
    <div class='container'>
        <h2 class="entry-title">Новости</h2>
    </div>
</section>

<section id = "newsSlider">
    <div class='container'>
		<div class="row" id="preBtnBlock">
            <p class="greenPoint">Выберите категорию новостей:</p>
            <div id="btnBlock">
                <input type="radio" name="category" id="cat0" value="0" v-on:click="cat = 'events'" checked="true">
                <label for="cat0">
                    <h6>Мероприятия</h6>
                    <img src="<? bloginfo('template_directory'); ?>/img/premium-icon-calendar-114796-1.png" alt="">
                </label>
                <input type="radio" name="category" id="cat1" value="1"  v-on:click="cat = 'charity'" >
                <label for="cat1">
                    <h6>Благотворительные акции</h6>
                    <img src="<? bloginfo('template_directory'); ?>/img/free-icon-charity-2731860-1.png" alt="">
                </label>
                <input type="radio" name="category" id="cat2" value="2" v-on:click="cat = 'projects'">
                <label for="cat2">
                    <h6>Проекты</h6>
                    <img src="<? bloginfo('template_directory'); ?>/img/premium-icon-project-2679418-1.png" alt="">
                </label>
                <input type="radio" name="category" id="cat3" value="3" v-on:click="cat = 'updates'">
                <label for="cat3">
                    <h6>Обновления</h6>
                    <img src="<? bloginfo('template_directory'); ?>/img/free-icon-file-3143443-1.png" alt="">
                </label>
            </div>
            
		</div>
        <div class="row rows" id="cat-1" v-show="cat == 'events'">
            <?
            $q = new WP_Query( 'cat=21&posts_per_page=1000');
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
                                <h3><? the_title(); ?></h3>
                                <? the_excerpt(); 
                                the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next2"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev2"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="position:absolute; right:10px"></div>
                </div>
            </div>
        </div>
		<div class="row rows" id="cat-2" v-show="cat == 'charity'">
            <?php
          
            $q = new WP_Query( 'cat=18&posts_per_page=1000');
            if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing2">
                    <div class="swiper-wrapper sm1iSwiper" >
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
                                <h3><? the_title(); ?></h3>
                                <? the_excerpt(); 
                                the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="position:absolute; right:10px"></div>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="row rows" id="cat-3" v-show="cat == 'projects'">
            <?php
          
            $q = new WP_Query( 'cat=19&posts_per_page=1000');
            if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing2">
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
                                <h3><? the_title(); ?></h3>
                                <? the_excerpt(); 
                                the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="position:absolute; right:10px"></div>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
        <div class="row rows" id="cat-4" v-show="cat == 'updates'">
            <?php
          
            $q = new WP_Query( 'cat=10&posts_per_page=1000');
            if ( $q->have_posts() ) {?>
            <div class="slidr">
                <div class="swiper newsLising newsListing2">
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
                                <h3><? the_title(); ?></h3>
                                <? the_excerpt(); 
                                the_date( 'd-m-Y', '<p class="date">', '</p>' ); ?>
                            </div>
                        </a>
                        <?}?>
                    </div>
                </div>
                <?}?>
                <div class="swiperButtons">
                    <div class="swiper-button-next swiper-button-next1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="transform: rotate(180deg);"></div>
                    <div class="swiper-button-prev swiper-button-prev1"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="position:absolute; right:10px"></div>
                </div>
            </div>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</section>
<section id="mentionList">
    <div class="container">
        <?	$mention =CFS()->get( 'years_smi' );?>
        <h3>СМИ о нас</h3>
        <div class="slidr">
            <div class="swiper smiSwipers">
                <div class="swiper-wrapper sm1iSwiper">
                    <? foreach( $mention as $n=>$item){?>
                    <div class="swiper-slide key-<? echo($item['year'])?>">
                        <div class="blueLight">
                            <div class="str">
                                <span class="hole"></span>
                                <span class="hole"></span>
                                <span class="hole"></span>
                                <span class="hole"></span>
                                <span class="hole"></span>
                                <span class="hole"></span>
                            </div>
                        </div>
                        <h4>
                            <? echo($item['year']) ?>
                        </h4>
                    </div>

                    <?}?>
                </div>
            </div>
            <div class="swiperButtons">
                <div class="swiper-button-next0 swiper-button-next"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt=""
                        srcset="" style="transform: rotate(180deg);"></div>
                <div class="swiper-button-prev0 swiper-button-prev"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt=""
                        srcset="" style="position:absolute; right:10px"></div>
            </div>
        </div>
        <div class="textblock">
            <? foreach( $mention as $items){?>
            <div class="list" id="alert-<? echo($items['year'])?>">
                <? foreach($items['alerts'] as $listing){?>
                <p class="greenPoint" style="">
                    <? echo(date( 'd.m.Y', strtotime( $listing['date'] ) ). " - " . $listing['description'])?>
                    <? 
                            if ($listing['link']===''){
                                echo('');
                            }else{?>
                    <a href="<? echo($listing['link']) ?>" target="_blank" rel="noopener noreferrer">Источник</a>
                    <?
                        }?>
                </p>
                <?}?>
            </div>
            <?}?>
        </div>
    </div>
</section>
<script src="/wp-content/themes/opeka-theme/js/swiper-bundle.min.js?ver=1.0.0" id="swiper-libruary-js"></script>
<script src="<? echo(get_template_directory_uri())?>/js/vue.global.prod.js"></script>

<script src="<? echo(get_template_directory_uri())?>/js/newslist.js"></script>
<?php
get_sidebar('feedback');
get_footer();
?>