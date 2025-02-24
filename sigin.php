<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<main class="main">
        <section class="auto_setion">
        <div class="container">
        <div class = 'reg_row'>
            <h1 class="cards_title" id="auto">Авторизация</div>
            <form method="POST" class="auto_form">
          <input class="reg_input"
            type="text" class="auto_input"
            placeholder="Логин"
            name="login"
            required
          />
          <input class="reg_input"
            type="password"
            placeholder="Пароль"
            name="password"
            pattern=".{8,}"
            required
          />
          <button class="reg_button">Войти</button>
        </form>
    </div>
    </div>
    </section>
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    