<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<main class="main">
        <section class="reg_setion">
            <div class="container">
                <div class = 'reg_row'>
                    <h1 class="cards_title" id="register">Регистрация</div>
                    <form method="POST" class="reg_form">
                        <input class="reg_input"
                            type="text"
                            placeholder="Имя"
                            name="name"
                            required
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Отчество"
                            name="patronymic"
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Фамилия"
                            name="surname"
                            required
                        />
                    <input class="reg_input"
                        type="text" class="reg_input"
                        placeholder="Логин"
                        name="login"
                        required
                    />
                    <input class="reg_input" type="email" placeholder="Email" name="email" required />
                    <input class="reg_input"
                    type="tel" class="reg_input"
                    placeholder="Номер телефона"
                    name="tel"
                    required
                    />
                    <input class="reg_input"
                        type="password"
                        placeholder="Пароль"
                        name="password"
                        pattern=".{8,}"
                        required
                    />
                    <input class="reg_input"
                        type="password"
                        placeholder="Повтор пароля"
                        name="password_repeat"
                        required
                    />
                        <button class="reg_button">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    