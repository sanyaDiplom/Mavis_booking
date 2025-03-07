<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:../sigin.php");
    }?>
    <div class="container">
    <h2 class="cards_title" id="reg" name="reg">Список менеджеров</h2>
    <div class="project_row">
    <?php
    $status = '1'; 
    $stmt = $connect->prepare("SELECT `id`, `login`, 
    `surname`, `name`, `patronymic` FROM `users` WHERE `status`=?");
    $stmt->bind_param("s", $status);
	$stmt->execute();
	$result = $stmt->bind_result($id,$login,$surname,$name,$patronymic);
    while($stmt->fetch()){?>
        <div class="projects">
        <div class="project_admin">
        <?php echo $surname . ' ' . $name . ' ' . $patronymic ?></div>
        <div class="project_admin">
        <?php echo $login ?></div>
        <form action="vendor/action/user-delete.php" method="get">
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <button class="card_button">Удалить</button></a>
        </form>
        </div>
    <?php } ?>
    <?php if(isset($_SESSION['massege'])){
            foreach($_SESSION['massege'] as $key=> $value){ ?>
                <p class="reg_error"> <?php echo $value; ?></p>    
            <?php }
            unset($_SESSION['massege']);
            }?>
    </div>
    <!-- Добавить менеджера, пользуемся формой регистрации, тоьлко по умолчению ставим статус менеджер -->
    <div class = 'reg_row'>
                <h2 class="cards_title" id="reg" name="reg">Добавит менеджера</h2></div>
                    <form action="vendor/action/add-user.php" method="POST" class="reg_form">
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
                        <button class="reg_button" name="reg">Добавить</button>
                    </form>
                </div>
    </div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>