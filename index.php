    <!-- Добавляем шапку -->
    <?php
        include('vendor/components/header.php');
    ?>
    <!--Сделали шапку и подвал отдельными компонентами, 
    загружаемыми на все страницы, что бы быстрее вносить 
    изменения в эти разделы на всех страницах -->
    <main class="main">
        <!--Баннер пока статичный, позже заменить на слайдер-->
        <section class="banner_sec">
            <div class="container">-
                <div class="banner_text">
                    <h1 class="banner_title">Наши проекты</h1>
                    <div class="banner_description">
                        <div class="banner_menu"><a href="#project" class = 'banner_link'>Проекты</a></div>
                        <div class="banner_menu"><a href = 'catalog.php' class = 'banner_link'>Выбрать квартиру</a></div>
                    </div>
                </div>
            </div>
        </section>
        <!--Карточки с проектами-->
        <section class="cards_sec">
            <div class = 'container'>
                <a name = 'project'></a>
            <div class = 'cards_ext'>
                <h1 class = 'cards_title'>«МАВИС» — 18 лет строим точно в срок!</h1>
            </div>

            <div class = 'cards'>
                <div class = 'cards_row'>
                    <div class = 'card'>

                        <img class = 'card_img' src="assets/img/aviator.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Авиатор</h3>
                            <div class = 'card_text'>1265 квартир. Сдача в 2027 году.</div>
                            <a class = 'card_link' href = 'catalog.php'>
                            <div class = 'card_button'>
                                Выбрать квартиру
                            </div>
                            </a>
                        </div>

                    </div>
                    <div class = 'card'>

                        <img class = 'card_img' src="assets/img/fotograf.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Фотограф</h3>
                            <div class = 'card_text'>628 квартир. Сдача в 2025 году.</div>
                            <a class = 'card_link' href = 'catalog.php'>
                            <div class = 'card_button'>
                                Выбрать квартиру
                            </div>
                            </a>
                        </div>

                    </div>

                    <div class = 'card'>

                        <img class = 'card_img' src="assets/img/urbanist.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Урбанист</h3>
                            <div class = 'card_text'>628 квартир. Сдача в 2025 году.</div>
                            <a class = 'card_link' href = 'catalog.php'>
                            <div class = 'card_button'>
                                Выбрать квартиру
                            </div>
                            </a>
                        </div>

                    </div>
                    <div class = 'card'>
                        <img class = 'card_img' src="assets/img/grafika.jpg">
                        <div class = 'card_body'>
                            <h3 class = 'card_title'>Графика</h3>
                            <div class = 'card_text'>405 квартир. Сдача с 2026 году.</div>
                            <a class = 'card_link' href = 'catalog.php'>
                            <div class = 'card_button'>
                                Выбрать квартиру
                            </div>
                            </a>
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