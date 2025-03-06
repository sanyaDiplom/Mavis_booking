<!-- Добавляем шапку -->
<?php
        include('vendor/components/account-header.php');
?>
<main class="main">
    <?php
    // Проверяем на права доступа
    if(!isset($_SESSION['users'])){
        header("Location:../sigin.php");
    }
    ?>
    <section class="reg_setion">
            <div class="container">
                <div class = 'reg_row'>
                <h1 class="cards_title">Оставить обращение</div>
                    <form action="vendor/action/user-feedback.php" method="POST" class="reg_form">
                    <?php if(isset($_SESSION['errors'])){
                            foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="reg_error"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                        <textarea class="textarea_feedback" 
                        name="new_feedback" 
                        id="new_feedback"
                        placeholder = "Это форма для создания нового обращения. Если вы хотите продолжить диалог в уже созданном ранее обращении, то перейдите на страницу Обратная связь"
                        required></textarea>    
                        
                        <button class="reg_button" name="reg">Отправить</button>
                    </form>
                </div>
            </div>
        </section>
</main>
<!--Добавляем подвал-->
<?php
    include('vendor/components/footer.php');
?>