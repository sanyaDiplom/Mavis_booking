<!-- Добавляем шапку -->
<?php
        include('vendor/components/account-header.php');
?>
<main class="main">
    <?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])){
        header("Location:./sigin.php");
    }?>
    <section class="reg_setion">
            <div class="container">
                <div class = 'reg_row'>
                <h1 class="cards_title">Поменять пароль</div>
                <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                <?php if(isset($_SESSION['massege'])){
                            foreach($_SESSION['massege'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['massege']);
                        }?>
                    <form action="vendor/action/password-update.php" method="POST" class="reg_form">
                    <label for="old_password">Введите текущий пароль</label>
                    <input class="reg_input"
                    type="password" class="reg_input"
                    placeholder="Текущий пароль"
                    name="old_password"
                    id="old_password"
                    pattern=".{8,}"
                    required
                    />
                    <label for="new_password">Введите новый пароль (не менее 8 знаков)</label>
                    <input class="reg_input"
                    type="password" class="reg_input"
                    placeholder="Новый пароль"
                    name="new_password"
                    id="new_password"
                    pattern=".{8,}"
                    required
                    />
                    <label for="repeat_password">Повторите новый пароль</label>
                    <input class="reg_input"
                    type="password" class="reg_input"
                    placeholder="Новый пароль"
                    name="repeat_password"
                    id="repeat_password"
                    pattern=".{8,}"
                    required
                    />
                        <button class="reg_button" name="reg">Изменить</button>
                    </form>
                </div>
            </div>
        </section>             
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    