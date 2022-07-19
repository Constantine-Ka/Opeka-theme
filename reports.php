<?php
/*
Template Name: Отчеты
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/reports.css">
<section id="titlePage">
	<div class='container contact-check' style="justify-content: flex-start;">
		<h2 class="entry-title">Отчеты</h2>
		<?php //e_title( '<h2 class="entry-title">', '</h2>' ); ?>
	</div>
</section>
<section>
    <div class="container" id="reports">
        <div class="row" id="reportsBth" v-if="year==''">
            <?
                $reportOrigin = CFS()->get( 'reports' );
                $reversed = array_reverse($reportOrigin);
                foreach( $reversed as $key=>$item){
            ?>
            <button v-on:click="year = '<? echo($item['year']) ?>'">
                <img src="wp-content/themes/opeka-theme/img/premium-icon-file-2711387_1.png" alt="">
                <p><? echo($item['year']) ?></p>
            </button>
            <?}?>
        </div>
        
        <?
            foreach( $reversed as $key=>$item){
        ?>
        <div class="row" id="<? echo($item['year']) ?>" v-else-if="year=='<? echo($item['year']) ?>'">
            <div class="modal-body"  v-on:click="year=''">
                <div class="modal">
                    <a href="<? echo($item['f0001']) ?>" target="_blank">
                        <img src="wp-content/themes/opeka-theme/img/premium-icon-documents-2365511_1.png" alt="">
                        <p>Форма 0001</p>
                    </a>
                    <a href="<? echo($item['f0002']) ?>" target="_blank">
                        <img src="wp-content/themes/opeka-theme/img/premium-icon-documents-2365511_1.png" alt="">
                        <p>Форма 0002</p>
                    </a>
                </div>
            </div>
        </div>
        <?}?>
        <div class="row" v-else>
            <p>Отчет не найден</p>
        </div>
    </div>
</section>
<script src="<? echo(get_template_directory_uri())?>/js/vue.global.prod.js"></script>

<script src="<? echo(get_template_directory_uri())?>/js/reports.js"></script>
<?php
get_sidebar('feedback');
get_footer();
?>