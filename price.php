<?php
/*
Template Name: Калькулятор услуг
*/
?>
<? 
get_header();
?>
<link rel="stylesheet" href="<? echo(get_template_directory_uri())?>/css/pages/price-calc.css">
<script src="<? echo(get_template_directory_uri())?>/js/service-list.js"></script>


<section id="titlePage">
    <div class='container'>
        <h2 class="entry-title">Калькулятор услуг</h2>
        <?php //e_title( '<h2 class="entry-title">', '</h2>' ); ?>
    </div>
</section>
<section>
    <div class='container'>
        <div class="row">
            <p class="price-description">
                С помощью нашего калькулятора, вы сможете расcчитать примерную стоимость услуг,
                которые будут необходимы именно вам
            </p>
            <p class="checktariffs">Выберете категорию</p>
            <div class="categoryes">
                <button id="ip" class="active">
                    По индивидуальной программе

                </button>
                <button id="payment">
                    Полностью на платной основе

                </button>

            </div>

        </div>
        <div class="price-block">
            <div class="service-list col-md-8 col-12" id="priceCalc"></div>
            <div class="price-column">
                <div class="sticky">
                    <div class="result-service col-md-4 col-12" style="height: 390px; position:relative; z-index:10000">
                        <h4 tabindex="-1" area-label="Расчет стоимости услуг">Расчет стоимости услуг:</h4>
                        <p class="description" tabindex="-1"
                            area-label="Выберите желаемые услуги. Кликните на поле с права от текста и поставьте галочку. Поля над которыми расположена Звездочка - являются не активными, так как в ходят в перечень обязательных услуг.">
                            Выберите желаемые услуги.<br>Кликните на поле с права от текста и поставьте галочку. Поле над
                            которым расположена * являются не активными, так как в ходят в перечень обязательных услуг.
                        </p>
                        <p id="result-money" class="ignore-select"
                            style="margin-top: 0;margin-bottom: 1rem;font-size: 17px;line-height: 25px;" tabindex="-1"
                            area-label="Стоимость услуг">Стоимость услуг: <span area-label="">0</span> руб.</p>
                        <p id="result-length" class="ignore-select"
                            style="margin-top: 0;margin-bottom: 1rem;font-size: 17px;line-height: 25px;" tabindex="-1"
                            area-label="Количество услуг:">Количество услуг: <span area-label="">0</span> шт.</p>
                        <div class="btnblock">
                            <a class="btn " tabindex="-1" role="button" aria-disabled="true" id="printBtn"
                                onclick="javascript:CallPrint('priceCalc');" area-label="Кнопка распечатать">Распечатать</a>
                        </div>
                    </div>
                    <div class="result-service col-md-4 col-12" style="height: 160px;">
                        <p style="margin:0">Цены формируются на основании приказа №1587-ф от 24.09.2021</p>
                        <p style="margin:0">Управления социальной защиты и семейной политики Тамбовской области</p>
                        <a style="margin:0" href="https://uprsoc.tmbreg.ru/DOC/2021/1587f.pdf" target="_blank" rel="noopener noreferrer">https://uprsoc.tmbreg.ru</a>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>


<script src="./wp-content/themes/opeka-theme/js/calc-handler_v2.js"></script>


<?php
get_sidebar('feedback');
get_footer();
?>
