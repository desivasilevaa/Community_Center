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

    <br><br><br>




<h1 style = "font-family: Times New Roman; color: rgb(226, 141, 50)">Вокални групи към Народно читалише ,,Тодор Пеев"</h1>
<div class= "parent" style = "position: relative">
  <img src="vocalGroups.jpg" class="d-block w-100" alt="">
    <div style = "background-color: white; width: 55%; position: absolute;left:0;right:0;bottom:0 ; margin-left:8%;border-right: 20px solid rgb(226, 141, 50); padding-left:1%">
      <h3 style = "font-family: Times New Roman;">Музиката е душата на читалището – тя ни събира, вдъхновява и обединява поколения.</h3>
    </div>
</div>


<div>
  <div style = "display: inline ">
    <div style = "background-color: white; width: 55%;margin-left:8%;display: inline-block; border-right: 20px solid rgb(226, 141, 50);border-bottom: 20px solid rgb(226, 141, 50); padding-left:1%">
      <p> <br>
        Към НЧ „Тодор Пеев – 1871“ в Етрополе активно работят няколко вокални формации, които поддържат живи българските традиции, представят богатството на фолклора и популяризират вокалното изкуство сред деца, младежи и възрастни.</p>
        <h5>🎶 Формации</h5>
        <p> - Детска вокална група – за най-малките любители на музиката, които правят своите първи стъпки в пеенето. Забавни репетиции, участие в концерти и празници, както и първи уроци по сценично поведение.</p>
        <p>- Вокална група за народна музика – пазители на българския фолклор. Групата изпълнява автентични и обработени народни песни от различни етнографски области.</p>
        <p>- Детски музикални школи, основани 1955 г.: цигулка, акордеон, пиано и солфеж, народни инструменти: гадулка, гайда, кавал, тамбура и тъпан.</p>
        <p>- Вокално-инструментален състав – смесена формация с поп, естраден и авторски репертоар. Подходяща за млади и възрастни с интерес към разнообразна музика и сценични изяви.</p>
        <h5>История и традиции</h5>
        <p>Вокалните групи към Народно читалище „Тодор Пеев – 1871“ са неизменна част от културния живот на град Етрополе от десетилетия. Още от началото на XX век музиката заема централно място в дейността на читалището, а самодейните състави се радват на широка обществена подкрепа.</p>
        <p>През годините към читалището са създадени и утвърдени различни хорови и вокални формации – детски, младежки, женски и смесени състави, които са участвали в редица културни форуми из цяла България. Някои от тях са носители на престижни отличия и признания за принос към съхраняването и популяризирането на българското музикално наследство.</p>
        <p>С гордост и днес продължаваме тази традиция – с любов към песента, уважение към българския фолклор и отворени врати за всички, които желаят да пеят, да се развиват и да бъдат част от едно вдъхновяващо музикално семейство.</p>
        <br><br>
      </div>
    <div class="card" style="width: 18rem;display: inline-block; vertical-align: 100px; margin-left: 5%">
        <img src="nikoleta.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <p class="card-text">Николета Николаева-Христова - ръководител на детски народен хор "Звездица" </p>
      </div>
        <ul class="list-group list-group-flush">
        <li class="list-group-item">Телефон: 089 765 8769</li>
        <li class="list-group-item">Facebook: <a href="https://www.facebook.com/nikoleta.nikolaeva1#:~:text=Nikoleta%20Nikolaeva%2D-,Hristova" class="card-link">Nikoleta Nikoeva-Hristova</a></li>
        </ul>
    </div>
</div>

<br><br>

<h4 style = "font-family: Times New Roman; color: rgb(226, 141, 50); text-align: center" >Галерия</h4>
<div id="carouselExample" class="carousel slide "style="background-color: rgb(215, 164, 110);padding: 1%">
  <div class="row align-items-center" >
    <img class="col-sm-3" src="vocal5.jpg" alt="...">
    <img class="col-sm-3" src="vocal6.jpg" alt="">
    <img class="col-sm-3" src="vocal4.jpg" alt="">
    <img class="col-sm-3" src = "vocal9.jpg" alt="">
  </div>
</div>

<br><br>

  
  