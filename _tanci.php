<?php 
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

session_start();
$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ТА "Балканска младост"</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php
     require "_logged_out.php";
     ?>

<style>
    iframe {
      width: 560px;
      height: 315px;
      max-width: 100%;
      border: none;
    }

    </style>
<br><br><br>

<div style = "position: relative;width: 100%;max-width: 100%;">
  <img src="sirni_zagovezni.jpg" style = " width: 100%;height: auto;display: block;">
  <div style = "position: absolute;top: 0;eft: 0;width: 100%;height: 100%;color: white;background: rgba(0, 0, 0, 0.5); display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;">
    <h1 style= "font-size: 55px;font-weight: bold;margin-bottom: 24px;">Танцов ансамбъл "Балканска младост"</h1>
    <h1 style= "font-size: 25px;font-weight: bold;margin-bottom: 24px;"
    >"Танцът - начин на живот"</h1><br><br>
    
  </div>
</div>




<div style = "background: white; height: 70px"><br><br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;">За нас</h2>
</div>
<div style="display: flex;gap: 20px;background-color: white; width:100%;height:350px">

    <div style= "flex:1;margin-left: 15%;margin-top:5%"> 
        <img src = "88.jpg" style = "width:100%;height: auto;border-radius:40px">
</div>
    <div style= "flex:1;margin-right: 18%"><br><br>
    <p style = "width: 500px">Ансамбълът е създаден с цел съхраняване и популяризиране на българския фолклор. 
            През годините се е утвърдил като важен културен символ на град Етрополе, участвайки в редица национални и международни фестивали. 
            Съставът е носител на престижни награди и признания, 
            което го прави горд представител на българската фолклорна традиция.</p>
    <br>
    <p style = "width: 500px">При нас ще откриете школи по музика, танци, 
        театър и изобразително изкуство, както и богата библиотека. 
        Съхраняваме и развиваме българските традиции, като създаваме пространство 
        за творчество и вдъхновение. Заповядайте – тук културата оживява!</p>
    <br>
</div>
</div>







<div style = "background: white; height: 70px"><br><br><br><br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;">Конкурси и награди</h2>
</div><br><br><br>








<div style="display: flex; justify-content: center; gap: 20px; padding: 20px; flex-wrap: wrap;">

  <div style="background: #f9fafb; padding: 20px; border-radius: 120px; width: 350px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🏆
    </div>
    <p style="font-weight: bold;">Участие и отличия в конкурса „ТОП 10 Български танцов фолклор“ 2024</p>
    <p>Награда на публиката, определена чрез зрителски вот.</p>
   <p> Специална награда от Асоциацията на хореографите в България, връчена от Христо Димитров.</p>
  </div>

  <div style="background: #f9fafb; padding: 20px; border-radius: 120px; width: 350px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🏆
    </div>
    <p style="font-weight: bold;">Международни участия и отличия</p>
    <p>През 2018 г. „Балканска младост“ представи България на XIX Международен културен и арт фестивал „Бюююкчекмедже“ в Истанбул, Турция. Сред участници от 64 държави ансамбълът се класира на трето място, като бе единственият представител от България.</p>
  </div>
     <div style="background: #f9fafb; padding: 20px; border-radius: 120px; width: 350px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🏆
    </div>
    <p style="font-weight: bold;">Международен фолклорен фестивал в Закопане, Полша:</p>
    <p>През 2018 г. ансамбълът бе специален гост на 50-то юбилейно издание на фестивала в Закопане, Полша. Те представиха 30-минутна програма от български фолклорни танци, съпроводена от жива музика и народна певица. Публиката ги извика на бис два пъти.</p>
  </div>
  <div style="background: #f9fafb; padding: 20px; border-radius: 120px; width: 350px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🏆
    </div>
    <p style="font-weight: bold;">Успехи на фестивала „Златни нишки“ – Трудовец</p>
    <p>Ансамбълът е трикратен носител на голямата награда на фестивала „Златни нишки“ в Трудовец. Освен основната награда, „Балканска младост“ е отличен и с призовете за „Най-ансамблово изпълнение“ и „Най-масова група“.</p>
  </div>

  <div style="background: #f9fafb; padding: 20px; border-radius: 120px; width: 350px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🏆
    </div>
    <p style="font-weight: bold;">Признание за художествения ръководител</p>
    <p>Калинка Пушкарова, дългогодишен хореограф и ръководител на ансамбъла, бе удостоена с Почетния знак „За граждански принос“ от кмета на община Етрополе. Тя споделя, че това признание е за целия ансамбъл, подчертавайки колективния дух и усилията на всички участници.</p>
  </div>
  </div><br><br><br>




  <div style="display: flex;gap: 20px;background-color: white; width:100%;height:700px">

    <div style= "flex:1;margin-left: 15%;margin-top:5%"> 
        <img src = "kalinka_photo.jpg" style = "width:70%;height: auto;border-radius:40px">
</div>
    <div style= "flex:1;margin-right: 18%"><br><br>
    <h2>Калинка Пушкарова – художествен ръководител на ТА „Балканска младост“, гр. Етрополе</h2>
    <p style = "width: 500px">Калинка Пушкарова е дългогодишен хореограф и художествен ръководител на танцов ансамбъл „Балканска младост“. Тя е основната двигателна сила зад успехите на ансамбъла на местно, национално и международно ниво.</p>
    <br>
    <p style = "width: 500px">Освен с техническата подготовка на танцьорите, тя работи и за изграждането на дисциплина, културна принадлежност и любов към българския фолклор сред децата.
    Пушкарова е позната със своята всеотдайност, трудолюбие и умението да обединява поколения около магията на танца.</p>
    <br>
    <h5 style = "font-weight: bold">Цитат:</h5>
    <p>„Тази награда не е само за мен, тя е за целия ансамбъл. За всички, които са били и са част от него.“
– Калинка Пушкарова след връчването на почетния знак</p>
</div>
</div><br>


<div style="width: 100%;
      display: flex;
      justify-content: center;
      padding: 20px;
      background: #f0f0f0;">
    <iframe 
      src="https://www.youtube.com/embed/BMR73M8VYlU" 
      title="YouTube video player"
      allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
      allowfullscreen>
    </iframe>
  </div><br><br><br>

<div style="background:rgb(226, 141, 50); color: white; padding: 40px 20px;width:100%">
  <div style="max-width: 1200px; margin: auto; display: flex; flex-wrap: nowrap; justify-content: space-between; gap: 20px;">
    
    <!-- Лого и описание -->
    <div style="width: 30%;">
      <div style="display: flex; align-items: center; margin-bottom: 10px;">
        <img style="width: 40px; height: 40px; background: white; border-radius: 50%; margin-right: 1px;" src="Chitalishte2copy.png">
        <h5 >Народно читалище "Тодор Пеев" 1871г.</h5>
      </div>
      <p style="line-height: 1.5;">Културен център с над 150-годишна история, 
        посветен на съхраняването на традициите и 
        развитието на съвременните изкуства.</p>
    </div>
<div style = "display:flex;gap: 30pxx">
    <!-- Навигация -->
    <div style="width: 30%;margin-right:40px">
      <h3>Навигация</h3>
      <br>
      <a href= "_startpage2.php" style = "color:white;text-decoration:none;">Начало</a><br>
      <a href= "_history.php" style = "color:white;text-decoration:none;">За нас</a><br>
      <a href= "_events.php" style = "color:white;text-decoration:none;">Събития</a><br>
    </div><br><br>

    <!-- Дейности -->
    <div style="width: 50%;">
      <h3>Дейности</h3>
      <br>
      <a href= "_tanci.php" style = "color:white;text-decoration:none;">
  ТА "Балканска младост"
</a>
<a href= "_instrumenti.php" style = "color:white;text-decoration:none;">
  Инструментални групи
</a><br>
<a href= "_vocal.php" style = "color:white;text-decoration:none;">
  Вокални групи
</a><br>
    </div>
  </div>
  </div>
  <br><br>
<body>
</html>