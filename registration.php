<!-- Добавляем шапку -->
<?php
        include('vendor/components/header.php');       
?>
<main class="main">
        <section class="reg_setion">
            <div class="container">
                <div class = 'reg_row'>
                <h1 class="cards_title" id="reg" name="reg">Регистрация</div>
                    <form action="vendor/action/register.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <input class="reg_input"
                            type="text"
                            placeholder="Имя"
                            name="name"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['name'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Отчество"
                            name="patronymic"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['patronymic'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Фамилия"
                            name="surname"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['surname'];}?>
                        />
                    <input class="reg_input"
                        type="text" class="reg_input"
                        placeholder="Логин"
                        name="login"
                        required
                        <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['login'];}?>
                    />
                    <input class="reg_input" 
                    type="email" 
                    placeholder="Email" 
                    name="email" 
                    required
                    <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['email'];}?>
                    />
                    <input class="reg_input"
                    type="text" class="reg_input"
                    placeholder="+7(xxx)xxx-xx-xx"
                    name="tel"
                    required
                    <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['tel'];}?>
                    />
                    <?php unset($_SESSION['regform']); ?>
                    <input class="reg_input"
                        type="password"
                        placeholder="Пароль (не менее 8 знаков)"
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
                        <button class="reg_button" name="reg">Зарегистрироваться</button>
                    </form>
                </div>
            </div>
        </section>
    </main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>    