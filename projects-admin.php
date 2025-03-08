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
    <h2 class="cards_title" id="reg" name="reg">Список проектов</h2>
    <div class="project_row">
    <?php $stmt = $connect->prepare("SELECT * FROM `projects`");
	$stmt->execute(); 
	$result = $stmt->bind_result($id, $name, $description, $img);
    while($stmt->fetch()){?>
        <div class="projects">
        <div class="project_admin">
        <?php echo $name ?></div>
        <div class="project_admin">
        <?php echo $description ?></div>
        <div class="project_admin"><img src="<?php echo $img ?>" width=50%>
        <?php echo $img ?></div>
        <form action="update-project.php" method="get">
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <button class="card_button">Изменить</button>
        </form>
        <form action="vendor/action/delete-project.php" method="get">
        <input type="hidden" name='id' value=<?php echo $id ?>>
        <button class="card_button">Удалить</button>
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
    <!-- Добавить проект -->
    <div class = 'reg_row'>
                <h2 class="cards_title" id="reg" name="reg">Добавит Проект</h2></div>
                    <form enctype="multipart/form-data" action="vendor/action/add-project.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <input class="reg_input"
                            type="text"
                            placeholder="Название проекта"
                            name="name"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['name'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Описание проекта"
                            name="description"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['description'];}?>
                        />
                        <input class="reg_input"
                            type="file"
                            placeholder="Изображение"
                            name="img"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['img'];}?>
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