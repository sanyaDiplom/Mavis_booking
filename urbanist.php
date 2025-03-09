<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<!--Страница с подробным описанием проекта-->
    <main class="main">
        <!--Баннер пока статичный, позже заменить на слайдер-->
        <section class="sec_banner_urbanist">    
        </section>
        <section class="sec_banner_botom">
        <div class="container">
                <div class="banner_text">
                     <h1 class="banner_title">ЖК «Урбанист»</h1>
                    <div class="banner_description">
                        <div class="banner_menu"><a href="#advantages" class = 'banner_link'>О проекте</a></div>
                        <div class="banner_menu"><a href = './catalog.php?from=3' class = 'banner_link'>Забронировать квартиру</a></div>
                    </div>
                </div>
            </div>
        </section>

        <!--Карточки с приемуществами-->
        <section class="cards_sec">
            <div class = 'container'>
                <a name = 'advantages'></a>
            <div class = 'cards_text'>
                <h1 class = 'cards_title'>О проекте</h1>
                <h3 class="cards_description">Cовременный проект, сочетающий в себе 
                    эстетику урбанизма и философию жизненного комфорта</h3>
                <div class="cards_description">Это жилой комплекс для молодых и прогрессивных жителей 
                    мегаполиса. Если вы мечтаете жить с комфортом в красивом и безопасном доме, 
                    если вы цените не только стиль и гармонию, но и функциональность, если для вас 
                    важны приятные детали, такие как дизайнерская отделка лифтов или необычные 
                    ландшафтные решения, значит, «УРБАНИСТ» станет для вас идеальным домом.</div>
            </div>

            <div class = 'cards'>
                <div class = 'cards_row'>
                    <div class='card'>
                        <img class = 'card_img' src="assets/img/photo10.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Школа и детский сад</h3>
                            <div class = 'card_text'>Наличие на территории комплекса детского сада 
                                позволит решить проблему поиска дошкольного учреждения.</div>
                            <div class = 'card_text'>Через дорогу от жилого комплекса в декабре 2024 года 
                                наша компания ввела в эксплуатацию среднеобразовательную муниципальную школу 
                                на 1175 человек. 4-этажное здание построено в соответствии с актуальными трендами 
                                в системе образования</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/urbanist03.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Дизайнерская отделка холлов</h3>
                            <div class = 'card_text'>Реечные подвесные потолки, безбарьерный вход в подъезд, 
                                витринное остекление входных групп и выдержанные цвета в отделке – каждая деталь 
                                делает жизнь в комплексе приятной и по-настоящему комфортной.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/urbanist04.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Закрытая территория с видеонаблюдением и 
                                видеодомофон в каждой квартире</h3>
                            <div class = 'card_text'>Ограждение по периметру и установленные камеры 
                                видеонаблюдения в совокупности с современной цифровой системой контроля 
                                доступа на территорию комплекса обеспечат безопасность для вас и ваших близких. 
                                В квартирах будут установлены технологичные сенсорные видеодомофоны TRUE IP</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/urbanist05.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Магазины и кафе прямо в доме</h3>
                            <div class = 'card_text'>Коммерческая галерея располагается 
                                на первом этаже с внешней стороны комплекса. Купить свежие 
                                булочки на завтрак и заказать ароматный кофе можно будет 
                                буквально за пару минут, не выходя за пределы собственного дома!</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/urbanist06.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Современная технология строительства</h3>
                            <div class = 'card_text'>Дома возводятся в соответствии с современными 
                                требованиями домостроения по кирпично-монолитной технологии, которая 
                                является залогом прочности и долговечности конструкции, отличается 
                                экологичностью и имеет повышенные теплоизоляционные свойства.</div>
                        </div>
                    </div> 
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/urbanist07.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Ландшафтный дизайн</h3>
                            <div class = 'card_text'>Эстетическая привлекательность придомовой территории 
                                так же важна, как и архитектура жилого комплекса. Благодаря продуманным 
                                ландшафтным решениям жители смогут проводить время во дворах, как в настоящих 
                                парках.</div>
                        </div>   
                    </div>  
                </div>
                </div>
            </div>
        </div>      
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    
