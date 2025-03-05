<!--Подвал-->
<?php
    include('core.php');
?>
<footer class = 'footer'>
<a name="footer">
        <div class = 'container'>
            <div class = 'footer_row'>
                <div class = 'form'>
                    <div class = 'copyright'>Copyright 2025 Похила Александр Владимирович</div>
                    <div class = 'form_text'>Оставьте свой номер, и мы свяжемся с Вами в ближайшее время</div>
                    <?php if(isset($_SESSION['massage'])){
                        foreach($_SESSION['massage'] as $key=> $value){ ?>
                            <p class="form_text"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['massage']);
                        }?>
                    <?php if(isset($_SESSION['errors'])){
                        foreach($_SESSION['errors'] as $key=> $value){ ?>
                            <p class="form_text"> <?php echo $value; ?></p>    
                        <?php }
                        unset($_SESSION['errors']);
                        }?>
                    <div class="footer_form">
                        <form action="./vendor/action/call_back.php" method="post" class="footer_form">
                        <input type="text" class="footer_input" 
                            placeholder="Ваше имя" 
                            name="name" 
                            required>
                        <input type="text" class="footer_input" 
                            placeholder="+7(xxx)xxx-xx-xx" 
                            name="tel" 
                            required>
                        <button class="footer_button">Отправить</button>
                        </form>
                    </div>
                </div>
                <div class = 'social_networks'>
                    <a href="https://vk.com/isgmavis"><img class = 'footer_logo' src='./assets/img/vk.png'></a>
                    <a href="https://t.me/isg_mavis"><img class = 'footer_logo' src='./assets/img/youtube.png'></a>
                </div>
            </div>
        </div>
    </footer>
</body>
</html>