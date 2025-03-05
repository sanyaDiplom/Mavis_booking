<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');
?>
<main class="main">
        <section class="auto_setion">
        <div class="container">
        <div class = 'reg_row'>
            <h1 class="cards_title" id="auto">Авторизация</div>
            <form action="vendor/action/sigin.php" method="POST" class="auto_form">
            <?php if(isset($_SESSION['massage'])){
                            foreach($_SESSION['massage'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['massage']);
                        }
             ?>
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
          <?php unset($_SESSION['autoform']); ?>
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