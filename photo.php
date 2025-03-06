<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<!--Страница с подробным описанием проекта-->
    <main class="main">
        <!--Баннер пока статичный, позже заменить на слайдер-->
        <section class="sec_banner_photo">    
        </section>
        <section class="sec_banner_botom">
        <div class="container">
                <div class="banner_text">
                     <h1 class="banner_title">ЖК «Фотограф»</h1>
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
                <div class="cards_description">«Фотограф» – это современный проект, 
                    сочетающий в себе эстетику урбанизма и философию жизненного комфорта.
                    Мы знаем, как быть счастливыми в мегаполисе, осознанно проживая каждый
                     день своей жизни и наслаждаясь каждым мгновением, фиксируя его 
                     в памяти как на фотоснимках.</div>
            </div>

            <div class = 'cards'>
                <div class = 'cards_row'>
                    <div class='card'>
                        <img class = 'card_img' src="assets/img/photo12.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Детский сад во дворе</h3>
                            <div class = 'card_text'>На территории комплекса будет 
                                работать муниципальный детский сад на 220 мест – 
                                яркое здание с забавными рисунками и современной 
                                отделкой понравится малышам и сэкономит время родителям.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo11.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Закрытая территория с видеонаблюдением</h3>
                            <div class = 'card_text'>Ограждение по периметру и установленные камеры видеонаблюдения в совокупности с современной цифровой системой контроля 
                                доступа на территорию комплекса обеспечат безопасность для вас и ваших близких.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo10.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Школа рядом с домом</h3>
                            <div class = 'card_text'>В непосредственной близости от жилого 
                                комплекса наша компания ввела в эксплуатацию среднеобразовательную 
                                муниципальную школу на 1175 человек. 4-этажное здание построено в соответствии 
                                с актуальными трендами в системе образования.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo09.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Соседский центр</h3>
                            <div class = 'card_text'>В распоряжении жителей будет общественное пространство, 
                                призванное не только сделать жизнь в комплексе более приятной, 
                                но и способствовать развитию добрососедских отношений: соседский 
                                центр для совместных мероприятий – фотовыставок, праздников, мастер-классов, 
                                занятий спортом.</div>
                        </div>
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo08.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Дизайнерские холлы</h3>
                            <div class = 'card_text'>В основе идеи оформления холлов лежит индивидуальный 
                                дизайн-проект, являющийся продолжением общей концепции жилого комплекса. 
                                Входные группы с витринным остеклением сделают пространство более светлым и просторным, а высокие потолки создадут ощущение открытости внутреннего пространства.
                            </div>
                        </div>
                    </div> 
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo07.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Колясочные</h3>
                            <div class = 'card_text'>На первом этаже 1 и 3 корпусов будет располагаться 
                                отдельное помещение для хранения колясок, что позволит жителям более 
                                функционально использовать пространство в квартире.
                            </div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo06.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Подземный паркинг</h3>
                            <div class = 'card_text'>Для удобства автовладельцев на территории 
                                предусмотрен подземный паркинг на 92 машиноместа.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo05.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Спортивный зал</h3>
                            <div class = 'card_text'>Полноценное пространство для тренировок 
                                разместится в 1-м корпусе, в 11-й секции. В распоряжении жителей 
                                комплекса будет бесплатный функциональный зал площадью 105 м² со 
                                всем необходимым оборудованием для различных видов спортивных занятий 
                                и удобными раздевалками. </div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo04.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Уникальные планировки квартир</h3>
                            <div class = 'card_text'>Проектом предусмотрен большой выбор комфортных 
                                планировок – от компактных студий до просторных трехкомнатных квартир 
                                семейного формата. Среди представленных вариантов – планировки евроформата, 
                                лофты с изолированными комнатами, квартиры с мастер-спальнями, гардеробными, 
                                двумя санузлами и даже окном в ванной комнате.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photograf01.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Современная технология строительства</h3>
                            <div class = 'card_text'>Дома возводятся в соответствии с современными 
                                требованиями домостроения по кирпично-монолитной технологии, 
                                которая является залогом прочности и долговечности конструкции, отличается экологичностью и имеет повышенные теплоизоляционные свойства. </div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo03.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Магазины и кафе прямо в доме</h3>
                            <div class = 'card_text'>На первых этажах разместятся встроенные 
                                коммерческие помещения: магазины, аптеки и другие объекты инфраструктуры, 
                                которые обеспечат жителей всем необходимым, будут находиться в шаговой 
                                доступности.</div>
                        </div>   
                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/photo02.png">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Коллекторное отопление</h3>
                            <div class = 'card_text'>В 3 корпусе предусмотрена коллекторная разводка 
                                системы отопления, при которой все трубы до радиаторов прокладываются 
                                в стяжке. При отсутствии стояков в комнатах экономится драгоценное место, 
                                уменьшаются потери тепла, улучшается внешний вид. </div>
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