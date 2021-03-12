<footer>
    <div class="footer">
    <div class="footer_text ">
        <h2 class="footer_text-h2">Все лучшее за неделю</h2>
        <form class="form-inline" action="" method='post'>
            <label for="email" class="form-email">Email:</label>
            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
            <button type="submit"  class="btn btn-primary">Подписаться</button>
        </form>
                 <h3 class="email-text"> Отправили письмо вам на почту <br> <? echo $_POST['email'];?></h3>
        <h3 class="footer_text-h3">Есть предложения?<a href='https://vk.com/kran_usual' class="footer_text-a">Пишите</a></h3> 
    </div>
    <div class="social ">
        <?php
            while($link = mysqli_fetch_assoc($result)){?>
                <a href="<?php echo $link['link'] ?>"><img src="<?php echo $link['link_img'] ?>" alt="" ></a>
            <?php
            }
        ?>
    </div>
    </div>
</footer>