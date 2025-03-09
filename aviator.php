<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<!--Страница с подробным описанием проекта-->
    <main class="main">
        <!--Баннер пока статичный, позже заменить на слайдер-->
        <section class="sec_banner_aviator">    
        </section>
        <section class="sec_banner_botom">
        <div class="container">
                <div class="banner_text">
                     <h1 class="banner_title">ЖК «Авиатор»</h1>
                    <div class="banner_description">
                        <div class="banner_menu"><a href="#advantages" class = 'banner_link'>О проекте</a></div>
                        <div class="banner_menu"><a href = './catalog.php?from=1' class = 'banner_link'>Забронировать квартиру</a></div>
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
                <h3 class="cards_description">Уникальный авторский проект, 
                    архитектурная концепция которого разработана собственным проектным бюро</h3>
                <div class="cards_description">Выразительные плавные изгибы домов 
                напоминают траекторию движения самолетов и создают образ свободных 
                воздушных линий. Эта же идея легла в основу оформления придомовых 
                территорий с целью сохранить баланс между функциональностью современного 
                городского общественного пространства и эффектом естественности природной 
                атмосферы.</div>
            </div>

            <div class = 'cards'>
                <div class = 'cards_row'>
                    <div class='card'>
                        <img class = 'card_img' src="assets/img/photo10.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Школа и детский сад во дворе</h3>
                            <div class = 'card_text'>В декабре 2024 года наша компания 
                                ввела в эксплуатацию среднеобразовательную муниципальную 
                                школу на 1175 человек. 4-этажное здание построено в соответствии 
                                с актуальными трендами в системе образования.</div>
                            <div class = 'card_text'>В 3 корпусе открыт муниципальный детский сад.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/aviator04.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Современная технология строительства</h3>
                            <div class = 'card_text'>Дома возводятся в соответствии с современными 
                                требованиями домостроения по кирпично-монолитной технологии, 
                                которая является залогом прочности и долговечности конструкции, 
                                отличается экологичностью и имеет повышенные теплоизоляционные свойства.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/aviator05.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Магазины и кафе прямо в доме</h3>
                            <div class = 'card_text'>Коммерческая галерея располагается 
                                на первом этаже с внешней стороны комплекса. Купить свежие 
                                булочки на завтрак и заказать ароматный кофе можно будет 
                                буквально за пару минут, не выходя за пределы собственного дома!</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/aviator06.jpg">
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
                        <img class = 'card_img' src="assets/img/aviator07.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Дизайнерские холлы</h3>
                            <div class = 'card_text'>Особенность нашего комплекса – стильные 
                            и эстетичные входные группы с витринным остеклением, выполненные на европейский манер. 
                            В отделке использованы высококачественные материалы – реечные подвесные потолки, 
                            керамогранит для напольных покрытий, оригинальные светильники.</div>
                        </div>
                    </div> 
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/aviator08.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Крытый паркинг</h3>
                            <div class = 'card_text'>Для удобства автовладельцев на 
                                территории предусмотрен крытый многоуровневый паркинг с возможностью 
                                установки зарядных станций для электромобилей. </div>
                        </div>   
                    </div>               
                </div>
                </div>
            </div>
        </div>
        </section>      
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    