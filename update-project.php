<!-- Добавляем шапку -->
<?php
        include('vendor/components/admin-header.php');
?>
<main class="main">
<?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])||$_SESSION['users']['status']==0){
        header("Location:../sigin.php");
    }
    $id=$_GET["id"];
    if(!empty($id)){
         //Делаем запрос в базу по id пользователя и заполняем форму;
        $stmt = $connect->prepare("SELECT * FROM `projects` WHERE `id`=?");
	    $stmt->bind_param("s",$id);
	    $stmt->execute();
	    $result = $stmt->get_result();
        if($result->num_rows != 0){
            $project = $result->fetch_assoc(); 
                foreach($project as $key=> $value){
                    $_SESSION['project'][$key] = $value;
                }
         }
    }
    ?>
    <div class="container">
    <div class = 'reg_row'>
                <h2 class="cards_title" id="reg" name="reg">Изменить Проект</h2></div>
                    <form enctype="multipart/form-data" action="vendor/action/update-project.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <input type="hidden" name='id'
                        <?php 
                            if(isset($_SESSION['project'])){?>
                                value=<?php echo $_SESSION['project']['id'];}?>>
                        <input class="reg_input"
                            type="text"
                            placeholder="Название проекта"
                            name="name"
                            required
                            <?php 
                            if(isset($_SESSION['project'])){?>
                                value=<?php echo $_SESSION['project']['name'];}?>
                        />
                        <textarea class="textarea_feedback"
                            placeholder="Описание проекта"
                            name="description"
                            required>
                            <?php 
                            if(isset($_SESSION['project'])){?><?php echo $_SESSION['project']["descreption"];}?></textarea>
                        <input class="reg_input"
                            type="file"
                            placeholder="Изображение"
                            name="img"
                            required
                            <?php 
                            if(isset($_SESSION['project'])){?>
                                value=<?php echo $_SESSION['project']['img'];}?>
                        />
                        <button class="reg_button" name="reg">Изменить</button>
                    </form>
                </div>
    </div>       
</div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>
