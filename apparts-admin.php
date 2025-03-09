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
?>
<div class="container">
    <h2 class="cards_title" id="reg" name="reg">Список квартир</h2>
    <div class="project_row">
    <?php $result = $connect->query("SELECT *, (SELECT `name` FROM `projects` WHERE `id`=`project_id`) as `project`  FROM `apparts`");
    if(!$result){
        return die ("Ошибка получения данных: ". $connect->error);
    }
    while($row = $result->fetch_assoc()){?>
        <div class="projects">
        <div class="project_admin">
        <?php echo $row['project'] ?></div>
        <div class="project_admin">
        <?php echo 'корпус'. " " .$row['corpus'] ?></div>
        <div class="project_admin">
        <?php echo 'секция'. " " .$row['section'] ?></div>
        <div class="project_admin">
        <?php echo 'квартира'. " ".$row['number'] ?></div>
        <div class="project_admin">
        <?php echo 'этаж'. " ". $row['floor'] ?></div>
        <div class="project_admin">
        <?php echo $row['price']."₽" ?></div>
        <!-- <div class="project_admin"><img src="<?php // echo $row['img'] ?>" width=50%>
        <?php // echo $row['img'] ?></div> -->
        <form action="update-apparts.php" method="get">
        <input type="hidden" name='id' value=<?php echo $row['id'] ?>>
        <button class="card_button">Изменить</button>
        </form>
        <form action="vendor/action/delete-apparts.php" method="get">
        <input type="hidden" name='id' value=<?php echo $row['id'] ?>>
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
    <!-- Добавить квартиру -->
    <div class = 'reg_row'>
                <h2 class="cards_title" id="reg" name="reg">Добавит квартиру</h2></div>
                    <form enctype="multipart/form-data" action="vendor/action/add-apparts.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    -
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <?php  $result = $connect->query("SELECT * FROM `projects`");?>
                        <select class="reg_select"  name="project"  id="project" required>
                        <option  value="">-- Выберите проект --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                        <?php }?> 
                        </select>
                        <?php  $result = $connect->query("SELECT * FROM `type_apparts`");?>
                        <select class="reg_select"  name="type"  id="type" required>
                        <option  value="">-- Выберите тип квартиры --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                        <?php }?> 
                        </select>
                        <select class="reg_select"  name="floor"  id="floor" required>
                        <option  value="">-- Выберите этаж --</option>
                        <?php $i=1;
                         while($i<23){?>
                            <option  value="<?php echo $i?>"><?php echo $i?></option>
                           <?php $i++;
                        }?>
                        </select>
                        <input class="reg_input"
                            type="text"
                            placeholder="Корпус"
                            name="corpus"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['corpus'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Секция"
                            name="section"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['section'];}?>
                        />
                        <input class="reg_input"
                            type="number"
                            placeholder="Номер квартиры"
                            name="number"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['number'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Общая площадь"
                            name="square_1"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['square_1'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Жилая площадь"
                            name="square_2"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['square_2'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Высота потолков"
                            name="ceiling_height"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['ceiling_height'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Отделка"
                            name="finishing"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['ceiling_height'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Стоимость"
                            name="price"
                            required
                            <?php 
                            if(isset($_SESSION['regform'])){?>
                                value=<?php echo $_SESSION['regform']['price'];}?>
                        />
                        <?php  $result = $connect->query("SELECT * FROM `booking_status`");?>
                        <select class="reg_select"  name="status"  id="status" required>
                        <option  value="">-- Выберите статус бронирования --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"><?php echo $row["name"] ?></option>
                        <?php }?>
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