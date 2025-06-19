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
    <title>Инструментални групи</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php
     require "_logged_out.php";
     ?>

    </style>
<br><br><br>

<div style = "position: relative;width: 100%;max-width: 100%;">
  <img src="instrumental_group.jpg" style = " width: 100%;height: auto;display: block;">
  <div style = "position: absolute;top: 0;eft: 0;width: 100%;height: 100%;color: white;background: rgba(0, 0, 0, 0.5); display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;">
    <h1 style= "font-size: 55px;font-weight: bold;margin-bottom: 24px;">Инструментални групи към Народно читалище "Тодор Пеев" 1871</h1>
    <h1 style= "font-size: 25px;font-weight: bold;margin-bottom: 24px;"
    >"Музиката е живият пулс на читалището – израз на духа, емоцията и традицията."</h1><br><br>
    
  </div>
</div>



<div style = "background: white; height: 130px"><br><br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;">Инструментални групи</h2>
</div>
<div style="display: flex;gap: 20px;background-color: white; width:100%;height:350px">
    <div style= "flex:1;margin-left: 15%;margin-bottom:5%"> 
        <img src = "svirene.jpg" style = "width:100%;height: auto;border-radius:40px">
</div><br>
    <div style= "flex:1;margin-right: 18%">
    <p style = "width: 500px">НЧ „Тодор Пеев – 1871“ е средище на културно и музикално развитие в гр. Етрополе, където поколения музиканти израстват, създават и вдъхновяват чрез своите изпълнения. Инструменталните групи към читалището са неизменна част от този процес – те съхраняват традицията, развиват таланти и обогатяват културния живот на града.</p>
    <br>
    <p>Инструменталните формации към НЧ „Тодор Пеев – 1871“ изграждат сцена за изява и развитие, като съчетават музикалната подготовка с възможност за изява и творчество</p>
   
</div>
</div>



<div style="  justify-content: center; gap: 20px; padding: 20px; flex-wrap: wrap;" class = "row">

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;display:ralative">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🪗
    </div>
    <p>Фолклорен оркестър

Фолклорният оркестър към читалището изпълнява традиционна българска народна музика в съпровод на автентични инструменти – гъдулка, кавал, гайда, тъпан и акордеон. </p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎸
    </div>
    <p>Младежка инструментална група

Съчетание от традиция и съвременност – младежката инструментална група обединява млади музиканти, които изпълняват популярна музика, рок, джаз и класически пиеси. </p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎹
</div>
      <p>Индивидуално обучение по инструменти

Към читалището се предлагат уроци по пиано, китара, акордеон и други инструменти. Обучението се провежда от квалифицирани преподаватели и е подходящо както за начинаещи, така и за напреднали.</p>
  </div>
<br>
 

</div>




<div style="display: flex;gap: 20px;background-color: white; width:100%;height:600px">

<div style= "flex:1;margin-left: 15%;margin-top:5%"> 
    <img src = "pavkata.jpg" style = "width:70%;height: auto;border-radius:40px">
</div>
<div style= "flex:1;margin-right: 18%"><br><br>
<h2>Павлин Христов – Ръководител на народния оркестър</h2>
<p style = "width: 500px">Павлин Христов е утвърден музикант и дългогодишен ръководител на народния оркестър към Народно читалище „Тодор Пеев – 1871“, гр. Етрополе. С високо ниво на професионализъм и дълбока обвързаност с българския музикален фолклор, той е сред водещите фигури в културния живот на града.</p>
<br>
<p style = "width: 500px">Неговият репертоар обхваща както автентична народна музика, така и съвременни фолклорни обработки, съобразени с духа на Етрополския край. Под негово ръководство оркестърът се превръща в състав с характерно звучене и високо художествено ниво, участващ редовно в общински, национални и дори международни събития.</p>

</div>
</div>

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