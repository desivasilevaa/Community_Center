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
    <title>Инструменти</title> <!--Смени с името на страницата-->
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



<h1 style = "font-family: Times New Roman; color: rgb(226, 141, 50)">Инструментални групи към Народно читалише ,,Тодор Пеев"</h1>

<div class= "parent" style = "position: relative">
  <img src="instrumental_group.jpg" class="d-block w-100" alt="">

  <div style = "background-color: white; width: 55%; position: absolute;left:0;right:0;bottom:0 ; margin-left:8%;border-right: 20px solid rgb(226, 141, 50); padding-left:1%">
    <h3 style = "font-family: Times New Roman;">Музиката е живият пулс на читалището – израз на духа, емоцията и традицията.</h3>
  </div>

</div>



<div>
  <div style = "display: inline ">
      <div style = "background-color: white; width: 55%;margin-left:8%;display: inline-block; border-right: 20px solid rgb(226, 141, 50);border-bottom: 20px solid rgb(226, 141, 50); padding-left:1%">
      <p> <br>
      Музикалните формации към Народно читалище „Тодор Пеев – 1871“ съчетават фолклорна обредност и съвременно звучене, класическа подготовка и креативно музикално изразяване. През годините те са изградили сцена, на която израстват поколения инструменталисти и вокалисти.
      <h5>🎼 Дейност и направления</h5>
      <p> - Инструментални формации – включват изпълнители на пиано, китара, ударни и народни инструменти като гъдулка, тъпан, кавал и акордеон. Репертоарът е разнообразен – от българска народна музика до обработки на класически и съвременни произведения.<p>
      <p>Младежки музикални групи – работят върху рок, поп и фолк проекти, както и върху авторска музика. Изпълненията често комбинират традиционни и модерни елементи, което създава уникално сценично присъствие.</p>
      <p>Соло и ансамблови изпълнения на пиано – развиват се в индивидуални уроци и камерни състави, с участие в конкурси, културни събития и тематични вечери.</p>
      <h5>🕰 История</h5>
      <p>Още от 70-те и 80-те години на XX век читалището е било притегателен център за млади инструменталисти. Създадени са първите ученически и ученическо-младежки музикални групи, в които се съчетават класическа подготовка с елементи на самодейност и сценична практика. В този период се изграждат силни традиции в работата с пиано и струнни инструменти.</p>
      <p>С времето към тях се добавят и фолклорни формации, в които намират място народни инструменти и автентично звучене. Така се създава богата и пъстра музикална палитра, в която всеки инструмент и стил намира своето място.</p>
      <p>Днес музикалните групи към НЧ „Тодор Пеев – 1871“ продължават да развиват тази традиция – с уважение към миналото и с отвореност към новото, превръщайки читалището в средище на музикално творчество, приемственост и вдъхновение.</p>

      <br><br>
      </div>

      <div class="card" style="width: 18rem;display: inline-block; vertical-align: 250px; margin-left: 5%">
        <img src="pavkata.jpg" class="card-img-top" alt="...">
        <div class="card-body">
        <p class="card-text">Павлин Христов - ръководител на детски народен оркестър </p>
      </div>

      <ul class="list-group list-group-flush">
      <li class="list-group-item">Телефон: 089 543 7769</li>
      <li class="list-group-item">Facebook: <a href="https://www.facebook.com/pavkatah#:~:text=Павката-,Христов" class="card-link">Павката Христов</a></li>
      </ul>
  </div>

</div>


<br><br><br><br>