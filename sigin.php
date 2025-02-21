<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<main class="main">
        <section class="auto_setion">
            <div class="head" id="register">Авторизация</div>
        
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
          <button class="auto_button">Войти</button>
        </form>

        </section>
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    