<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<!--Страница с подробным описанием проекта-->
    <main class="main">
        <!--Баннер пока статичный, позже заменить на слайдер-->
        <section class="sec_banner_grafica">    
        </section>
        <section class="sec_banner_botom">
        <div class="container">
                <div class="banner_text">
                     <h1 class="banner_title">ЖК «Графика»</h1>
                    <div class="banner_description">
                        <div class="banner_menu"><a href="#advantages" class = 'banner_link'>О проекте</a></div>
                        <div class="banner_menu"><a href = './catalog.php' class = 'banner_link'>Забронировать квартиру</a></div>
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
                <h3 class='cards_title'>Дома, свободные от стереотипов</h3>
                <div class="cards_description">Оригинальные и нестандартные решения часто 
                    оказываются оптимальными. Расположенный в одном из самых молодых и демократичных 
                    районов, ЖК «Графика» претендует на то, чтобы встать в один ряд с проектами, 
                    формирующими лицо города.</div>
            </div>

            <div class = 'cards'>
                <div class = 'cards_row'>
                    <div class='card'>
                        <img class = 'card_img' src="assets/img/grafika04.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Кладовые</h3>
                            <div class = 'card_text'>Собственная кладовая – это закрытое помещение с 
                                доступом только для владельцев. Правильная прямоугольная форма и высота 
                                потолка 2,68 м делают его функциональным, позволяя экономить не только 
                                жилую площадь, но и деньги – ведь стоимость квадратного метра кладовой ниже, 
                                чем стоимость метра квартиры.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo02.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Коллекторное отопление</h3>
                            <div class = 'card_text'>В ЖК Графика предусмотрена коллекторная разводка системы 
                                отопления, при которой все трубы до радиаторов прокладываются в стяжке. 
                                При отсутствии стояков в комнатах экономится драгоценное место, уменьшаются 
                                потери тепла, улучшается внешний вид.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika05.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Спортзал для жителей</h3>
                            <div class = 'card_text'>В «Графике» всегда найдется время для спорта, 
                                а тренировки легко станут частью вашего графика – каким бы насыщенным он 
                                ни был: и всё благодаря спортзалу, который разместится непосредственно на 
                                территории жилого комплекса. В распоряжении жильцов – стильный зал площадью 
                                80 м² со всем необходимым оборудованием для силовых тренировок, кардиозоной 
                                и зоной для занятий йогой.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika06.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Подземный паркинг</h3>
                            <div class = 'card_text'>Вы всегда найдете место для своего автомобиля, ведь в 
                                комплексе предусмотрен подземный охраняемый паркинг, спуститься в который 
                                можно прямо на лифте.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika07.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Панорамное остекление с высокими окнами</h3>
                            <div class = 'card_text'>Большие окна визуально увеличивают пространство и 
                                наполняют комнату естественным светом, что особенно важно для петербургского 
                                климата.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika08.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Дизайнерская отделка холлов</h3>
                            <div class = 'card_text'>Отделка холлов будет выполнена в лаконичном стиле с 
                                применением качественного керамогранита и дизайнерских элементов отделки. 
                                Витринное остекление входных групп будет создавать ощущение безопасности, 
                                делать пространство более светлым и просторным.</div>
                        </div>
                    </div> 
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika09.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Закрытая территория с видеонаблюдением и видеодомофон 
                                в каждой квартире</h3>
                            <div class = 'card_text'>Ограждение по периметру и установленные камеры 
                                видеонаблюдения в совокупности с современной цифровой системой контроля 
                                доступа на территорию комплекса обеспечат безопасность для вас и ваших близких. 
                                В квартирах будут установлены технологичные сенсорные видеодомофоны TRUE IP.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika10.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Магазины и кафе прямо в доме</h3>
                            <div class = 'card_text'>оммерческая галерея будет располагаться на первом этаже с внешней 
                                стороны комплекса. Купить свежие булочки на завтрак и заказать ароматный кофе можно 
                                будет буквально за пару минут, не выходя за пределы собственного дома!</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika11.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Современная технология строительства</h3>
                            <div class = 'card_text'>Дома возводятся в соответствии с современными требованиями 
                                домостроения по кирпично-монолитной технологии, которая является залогом прочности
                                и долговечности конструкции, отличается экологичностью и имеет повышенные 
                                теплоизоляционные свойства. </div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika12.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Уникальные планировки квартир</h3>
                            <div class = 'card_text'>Проектом предусмотрен большой выбор комфортных 
                                планировок – от компактных студий до просторных трехкомнатных квартир 
                                семейного формата. Среди представленных вариантов – планировки евроформата, 
                                квартиры с мастер-спальнями, гардеробными, двумя санузлами, и даже двухуровневые 
                                студии.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo10.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Рядом школа и детский сад</h3>
                            <div class = 'card_text'>ДВ 7 минутах от жилого комплекса наша компания ввела в эксплуатацию 
                                среднеобразовательную муниципальную школу на 1175 человек. 4-этажное здание построено в
                                 соответствии с актуальными трендами в системе образования.
                                Также в соседних жилых комплексах - "Авиатор" и "Фотограф", 
                                находятся муниципальные детские сады.</div>
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