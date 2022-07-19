<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package opeka-theme
 */

get_header();
?>


<link rel="stylesheet" href="<?php echo(get_template_directory_uri()); ?>/css/mainpage.css">
</div>
<section id='mission'>
    <div class="container">
        <p><?php echo(CFS()->get( 'our-mission' ));?></p>
        <a href="/помочь-сейчас"
            style="background-color: <?php echo(CFS()->get( 'button-color' )) ?>; color:<?php echo CFS()->get( 'button-color-text') ?>"><?php echo(CFS()->get( 'help-today' ));?></a>
    </div>
</section>
<section id="history">
    <?php $fields = CFS()->get( 'years' ); ?>
    <div class="container" style="background-color: <?php echo CFS()->get( 'history-description-background	' );?>;">
        <h3><?php echo CFS()->get( 'history-title' );?></h3>
        <p><?php echo CFS()->get( 'history-description' );?></p>
		<div class="string">
			<div class="round light"></div>
			<p> – Оказание  паллиативной медицинской помощи в стационарных условиях</p>
		</div>
		<div class="string">
			<div class="round dark"></div>
			<p> – Оказание социального ухода на стационарной основе </p>
		</div>
        <div class="historyLoops">
            <div class="timeline"></div>
            <? 
 				// echo '<pre>';
 				// print_r($fields);
 				// echo '</pre>';
				foreach ( $fields as $i => $year ) {
					//  echo(
 					// 	 '<div class="yearblock">
                 	// 		<label for="year-'.$year['year-item'].'">'.$year['year-item'].'</label>
 					// 		<input type="radio" name="timeLine" id="year-'.$year['year-item'].'" value="'.$year['year-item'].'">
             		// </div>'
 					// );
					if($i ==0){?>
            <div class="yearblock">
                <label for="year-<? echo($year['year-item'])?>">
                    <? echo($year['year-item']);?></label>
                <input type="radio" name="timeLine" id="year-<? echo($year['year-item'])?>"
                    value="<? echo($year['year-item']);?> " checked>
            </div>
            <?} else{?>
            <div class="yearblock">
                <label for="year-<? echo($year['year-item'])?>">
                    <? echo($year['year-item']);?></label>
                <input type="radio" name="timeLine" id="year-<? echo($year['year-item']);?>"
                    value="<? echo($year['year-item']);?>">
            </div>
            <?};
					//echo'Индекс:'. $i .'\nЗначение:'. $year['year-item'] .'\n';
				};
			?>
            <div class="yearblock" style='opacity:0'>
                <label for="year-none"></label>
                <input type="radio" name="timeLineNone" id="year-non" value="none">
            </div>
        </div>
        <div class="eventList">
            <?
				foreach ( $fields as $i => $year ) {
				$classList = ($ii ==0)?'field active':'field'	
			?>
            <div class="<? echo($classList) ?>" id="list-<? echo($year['year-item'])?>">
                <? foreach($year['event-list'] as $ii => $event) {?>
                <div class="row">
                    <? if($event['date-event-start']){?>
					<script>
						var text1 = '<? echo($event['date-event-start']) ?>'.split('-').reverse();
						var text10 = text1;
						var text2 = '<? echo($event['date-event-end']) ?>'.split('-').reverse();
						var text20 = text2;
						text = text1.join('.') + ' - ' + text2.join('.');
					</script>
                    <?}else{?>
					<script>
						var text2 = '<? echo($event['date-event-end']) ?>'.split('-').reverse();
						var text20 = text2;
						text = text2.join('.');
					</script>
                    <?}?>
                    <div class="date">
                        <script>
                            document.write(text);
                        </script>
                    </div>
                    <div class="eventdescription">
                        <? echo($event['event-description'])?>
                        <? echo($event['link'])?>
                    </div>
                </div>
                <? } ?>
            </div>
            <?}
			?>

        </div>
        <div class="historyLoopsMobile">
            <div class="swiper mySwiper">
                <div class="line"></div>
                <div class="swiper-wrapper">
                    <?php
                        foreach ( $fields as $i => $year ){
                            if($i ==0){?>
                    <div class="swiper-slide key<? echo($year['year-item'])?> active">
                        <div class="round"></div>
                        <h8>
                            <? echo($year['year-item']) ?>
                        </h8>
                    </div>
                    <?} else {?>
                    <div class="swiper-slide key<? echo($year['year-item'])?> ">
                        <div class="round"></div>
                        <h8>
                            <? echo($year['year-item']) ?>
                        </h8>
                    </div>
                    <?}
                        }
                    ?>
                    
                </div>
            </div>
			<div class="swiper-button">
				<div class="swiper-button-next"></div>
      			<div class="swiper-button-prev"></div>
			</div>
			
        </div>
        <div class="eventListMobile" style="" >
            <?
                foreach ( $fields as $i => $year ) {
                	$classList = ($ii ==0)?'field active':'field';
					$display = ($i ==0)?'flex':'none';
			?>
				<div class="field" id="list-mobile-<? echo($year['year-item']) ?>" data-atrr=<? echo($i)?> style="display:<? echo($display)?>" >
					<? 
						foreach($year['event-list'] as $ii => $event) {?>
							<div class="row" ">
							<? 
								if($event['date-event-start']){
							?>
								<script>
									var text1 = '<? echo($event['date-event-start']) ?>'.split('-').reverse();
									var text10 = text1;
									var text2 = '<? echo($event['date-event-end']) ?>'.split('-').reverse();
									var text20 = text2;
									text = text1.join('.') + ' - ' + text2.join('.');
								</script>
							<?
								}else{
							?>
								<script>
									var text2 = '<? echo($event['date-event-end']) ?>'.split('-').reverse();
									var text20 = text2;
									text = text2.join('.');
								</script>
							<?
								}
							?>
							<div class='date'>
								<script>
									document.write(text);
								</script>
							</div>
							<div class='eventdescription'>
								<? echo($event['event-description'])?>
								<? echo($event['link'])?>
							</div>
						</div>
						<? 
					}
					?>
					</div>
			<?
				}
			?>
            </div>
            
        </div>
    </div>
</section>
<section id='managment'>
    <div class='container'>
        <h3><?php echo CFS()->get( 'management-Title' );?></h3>
        <div class='managment-list'>
            <? 
                $managmentList =CFS()->get( 'management-list' ); 
                foreach ( $managmentList as $chief ){?>
            <div class='managment-item'>
                <div class='photo' style="background-image: url(<? echo($chief['management-photo']);?>);"></div>
                <div class='textBlock'>
                    <h4>
                        <? echo($chief['management-firstname']);?>
                    </h4>
                    <p>
                        <? echo($chief['management-rang']);?>
                    </p>
                </div>
            </div>
            <?}
            ?>
        </div>
    </div>
</section>
<section id="partnerList">
	<?
		$partnersList =CFS()->get('partnersList');

	?>
    <div class="container">
        <h3>Наши партнеры</h3>
        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
				<?
					foreach($partnersList as $partner){?>
						<div class="swiper-slide">
                    		<a href="<? echo($partner['link']) ?>" target="_blank" rel="noopener noreferrer" style="background-image: url(<? echo($partner['logo']) ?>);" title="<? echo($partner['title']) ?>"></a>
                		</div>
						
					<?}
				?>
                
            </div>
           
        </div>
		<div class="swiperButtons">
        	<div class="swiper-button-next"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="transform: rotate(180deg);"></div>
			<div class="swiper-button-prev"><img src="/wp-content/themes/opeka-theme/img/polygon9.svg" alt="" srcset="" style="position:absolute; right:10px"></div>
        </div>
        <div>

        </div>
</section>								  

<?php
get_sidebar('feedback');
get_footer();
echo('<script src="'.get_template_directory_uri().'/js/mainpage.js"></script>');
?>