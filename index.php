<?php
$fname="Vsevolod";
$sname="Smirnov";
$age=21 ;?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="style.css">
  <title>Document</title>
</head>
<body>
  <header>
    <div class="container">
      <div>
        <ul class="row">
          <li><a href="https://vk.com/sbst749">Вконтакте</a></li>
          <li><a href="https://www.instagram.com/vsevolod_sm/?hl=ru">Instagram</a></li>
          <li><a href="https://mail.google.com/">G-mail</a></li>
          <li><a href="/">Whats_App</a></li>
        </ul>
      </div>

    </div>

  </header>

  <section class="card">
    <div class="container">
      <div class="row">
        <div class="card_img">
          <img src="avatar.jpg" alt="">
        </div>
        <div class="card_info">
          <div class="card_name">
            <p><?php echo $fname; echo " ";
                  echo $sname;?></p>
          </div>
          <div class="card_info row">
              <div class="card_info_myself">
                <p><span class="category"0>Возраст:</span> <?php echo $age; ?> </p>
                <p><span class="category">Город:</span> Магнитогорск</p>
                <p><span class="category">Хобби:</span> Сноуборд , книги , программирование</p>
                <p><span class="category">Место учебы:</span> МГТУ им.Носова , ИЭиАС , прикладная информатика (Управление IT-проектами)</p>
             </div>
             <div class="card_info_offer">
                <p>Пожеланий нет , все круто!)</p>
             </div>
            </div>
          </div>
       </div>
    </div>
  </section>

</body>
</html>
