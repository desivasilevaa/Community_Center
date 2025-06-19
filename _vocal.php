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
    <title>Вокални групи</title> <!--Смени с името на страницата-->
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
  <img src="vocalGroups.jpg" style = " width: 100%;height: auto;display: block;">
  <div style = "position: absolute;top: 0;eft: 0;width: 100%;height: 100%;color: white;background: rgba(0, 0, 0, 0.5); display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;">
    <h1 style= "font-size: 55px;font-weight: bold;margin-bottom: 24px;">Вокални групи към Народно читалище "Тодор Пеев" 1871</h1>
    <h1 style= "font-size: 25px;font-weight: bold;margin-bottom: 24px;"
    >"Музиката е душата на читалището – тя ни събира, вдъхновява и обединява поколения."</h1><br><br>
    
  </div>
</div>





<div style = "background: white; height: 130px"><br><br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;">Формации</h2>
</div>
<div style="display: flex;gap: 20px;background-color: white; width:100%;height:350px">
    <div style= "flex:1;margin-left: 15%;margin-bottom:5%"> 
        <img src = "vocal2.jpg" style = "width:100%;height: auto;border-radius:40px">
</div>
    <div style= "flex:1;margin-right: 18%">
    <p style = "width: 500px">Към НЧ „Тодор Пеев – 1871“ в Етрополе активно работят няколко вокални формации, които поддържат живи българските традиции, представят богатството на фолклора и популяризират вокалното изкуство сред деца, младежи и възрастни.</p>
    <br>
    <p style = "width: 500px">Народно читалище „Тодор Пеев – 1871“ в гр. Етрополе има дългогодишни традиции в развитието и подкрепата на музикалното изкуство. Част от тази богата културна дейност са и вокалните групи, които обединяват любители на песенното изкуство от различни възрасти.</p>
    <br>
</div>
</div>







<div style="  justify-content: center; gap: 20px; padding: 20px; flex-wrap: wrap;" class = "row">

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;display:ralative">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      🎵
    </div>
    <p>Детска вокална група – за най-малките любители на музиката, които правят своите първи стъпки в пеенето. Забавни репетиции, участие в концерти и празници, както и първи уроци по сценично поведение.</p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎵
    </div>
    <p>Вокална група за народна музика – пазители на българския фолклор. Групата изпълнява автентични и обработени народни песни от различни етнографски области.</p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 300px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎵
</div>
      <p>Вокално-инструментален състав – смесена формация с поп, естраден и авторски репертоар. Подходяща за млади и възрастни с интерес към разнообразна музика и сценични изяви</p>
  </div>
<br>
 

</div>





<div style="display: flex;gap: 20px;background-color: white; width:100%;height:700px">

<div style= "flex:1;margin-left: 15%;margin-top:5%"> 
    <img src = "nikoleta.jpg" style = "width:70%;height: auto;border-radius:40px">
</div>
<div style= "flex:1;margin-right: 18%"><br><br>
<h2>Николета Христова – ръководител на вокалната група</h2>
<p style = "width: 500px">Николета Павлова е дългогодишен ръководител на вокална група към НЧ „Тодор Пеев – 1871“, гр. Етрополе. С професионално образование в областта на музиката и богат опит в работата с деца и младежи, тя вдъхновява своите възпитаници да се развиват както вокално, така и артистично.</p>
<br>
<p style = "width: 500px">Под нейно ръководство вокалната група участва в множество концерти, фестивали и конкурси, където впечатлява с разнообразен репертоар – от българска народна музика до съвременни обработки на популярни песни. Николета Павлова е не просто музикален педагог, а ментор и вдъхновител за своите ученици, насърчавайки ги към увереност, сценично поведение и любов към музикалното изкуство.</p>
<br>

<p>Нейният подход съчетава професионализъм, индивидуално внимание и креативност, което превръща репетициите в истински творчески процес.</p>
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
  