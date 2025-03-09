<!-- Добавляем шапку -->
<?php
        include('vendor/components/account-header.php');
?>
<main class="main">
    <?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])){
        header("Location:./sigin.php");
    }
    //Делаем запрос в базу по id пользователя и заполняем форму;
    $stmt = $connect->prepare("SELECT * FROM `users` WHERE `id`=?");
	$stmt->bind_param("s",$_SESSION['users']['id']);
	$stmt->execute();
	$result = $stmt->get_result();
    if($result->num_rows != 0){
        $user = $result->fetch_assoc(); 
            foreach($user as $key=> $value){
                $_SESSION['account'][$key] = $value;
             }
    }
    ?>
    <section class="reg_setion">
            <div class="container">
                <div class = 'reg_row'>
                <h1 class="cards_title">Личные данные</div>
                    <form action="vendor/action/user-update.php" method="POST" class="reg_form">
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
                        <input class="reg_input"
                            type="text"
                            placeholder="Имя"
                            name="name"
                            required
                            <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['name'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Отчество"
                            name="patronymic"
                            required
                            <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['patronymic'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Фамилия"
                            name="surname"
                            required
                            <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['surname'];}?>
                        />
                    <input class="reg_input"
                        type="text" class="reg_input"
                        placeholder="Логин"
                        name="login"
                        required
                        <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['login'];}?>
                    />
                    <input class="reg_input" 
                    type="email" 
                    placeholder="Email" 
                    name="email" 
                    required
                    <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['email'];}?>
                    />
                    <input class="reg_input"
                    type="text" class="reg_input"
                    placeholder="+7(xxx)xxx-xx-xx"
                    name="tel"
                    required
                    <?php 
                            if(isset($_SESSION['account'])){?>
                                value=<?php echo $_SESSION['account']['tel'];}?>
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