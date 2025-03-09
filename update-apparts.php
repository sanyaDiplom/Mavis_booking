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
<div class = 'reg_row'>
    <!-- Делаем запрос и заполняем форму -->
    <?$id=$_GET["id"];
    if(!empty($id)){
        $stmt = $connect->prepare("SELECT * FROM `apparts` WHERE `id`=?");
	    $stmt->bind_param("s",$id);
	    $stmt->execute();
	    $result = $stmt->get_result();
        if($result->num_rows != 0){
            $project = $result->fetch_assoc(); 
                foreach($project as $key=> $value){
                    $_SESSION['apparts'][$key] = $value;
                }
         }

    }?>
                <h2 class="cards_title" id="reg" name="reg">Изменить квартиру</h2></div>
                    <form enctype="multipart/form-data" action="vendor/action/update-apparts.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    -
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <input type="hidden" name='id'
                        <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['id'];}?>>
                        <?php  $result = $connect->query("SELECT * FROM `projects`");?>
                        <select class="reg_select"  name="project"  id="project" required>
                        <option  value="">-- Выберите проект --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"<?php 
                            if($row["id"]==$_SESSION['apparts']['project_id']) echo 'selected' ?>><?php echo $row["name"] ?></option>
                        <?php }?> 
                        </select>
                        <?php  $result = $connect->query("SELECT * FROM `type_apparts`");?>
                        <select class="reg_select"  name="type"  id="type" required>
                        <option  value="">-- Выберите тип квартиры --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"
                            <?php 
                            if($row["id"]==$_SESSION['apparts']['type_id']) echo 'selected' ?>>
                            <?php echo $row["name"] ?></option>
                        <?php }?> 
                        </select>
                        <select class="reg_select"  name="floor"  id="floor" required>
                        <option  value="">-- Выберите этаж --</option>
                        <?php $i=1;
                         while($i<23){?>
                            <option  value="<?php echo $i?>"
                            <?php 
                            if($i==$_SESSION['apparts']['floor']) echo 'selected' ?>><?php echo $i?></option>
                           <?php $i++;
                        }?>
                        </select>
                        <input class="reg_input"
                            type="text"
                            placeholder="Корпус"
                            name="corpus"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['corpus'];}?>>
                        <input class="reg_input"
                            type="text"
                            placeholder="Секция"
                            name="section"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['section'];}?>>
                        <input class="reg_input"
                            type="number"
                            placeholder="Номер квартиры"
                            name="number"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['number'];}?>>
                        <input class="reg_input"
                            type="text"
                            placeholder="Общая площадь"
                            name="square_1"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['square_1'];}?>>
                        <input class="reg_input"
                            type="text"
                            placeholder="Жилая площадь"
                            name="square_2"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['square_2'];}?>>
                        <input class="reg_input"
                            type="text"
                            placeholder="Высота потолков"
                            name="ceiling_height"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['ceiling_height'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Отделка"
                            name="finishing"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['ceiling_height'];}?>
                        />
                        <input class="reg_input"
                            type="text"
                            placeholder="Стоимость"
                            name="price"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['price'];}?>
                        />
                        <?php  $result = $connect->query("SELECT * FROM `booking_status`");?>
                        <select class="reg_select"  name="status"  id="status" required>
                        <option  value="">-- Выберите статус бронирования --</option>
                        <?while($row=$result->fetch_assoc()){?>
                            <option value="<?php echo $row["id"] ?>"
                            <?php 
                            if($row["id"]==$_SESSION['apparts']['status_id']) echo 'selected' ?>><?php echo $row["name"] ?></option>
                        <?php }?>
                        <input class="reg_input"
                            type="file"
                            placeholder="Изображение"
                            name="img"
                            required
                            <?php 
                            if(isset($_SESSION['apparts'])){?>
                                value=<?php echo $_SESSION['apparts']['img'];}?>
                        />
                        <button class="reg_button" name="reg">Изменить</button>
                    </form>
                </div>
    </div>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>