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
    <title>История</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php
     require "_logged_out.php";
     ?>
   
     


  <br><br>




  <div style = "position: relative;width: 100%;max-width: 100%;">
  <img src="history1.jpg" style = " width: 100%;height: auto;display: block;">
  <div style = "position: absolute;top: 0;eft: 0;width: 100%;height: 100%;color: white;background: rgba(0, 0, 0, 0.5); display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;">
    <h1 style= "font-size: 55px;font-weight: bold;margin-bottom: 24px;">Народно читалище ,,Тодор Пеев" 1871г.</h1>
    <h1 style= "font-size: 25px;font-weight: bold;margin-bottom: 24px;"
    >Културен дом на малки и големи самодейци.</h1><br><br>
  </div>
</div>






<div style = "background-color: white; height: 480px"><br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;margin-top: 10px">История</h2>
<p style = "margin-left: 300px;margin-right:300px"> <br>
        Историческите анализи показват, че тази самобитна форма на обществено-политически живот изиграва ролята на културно-просветно оръжие в борбата за национално освобождение.
На 7 януари 1871 год. 
в голямата килия на манастирския метох в 
града се събират членовете на Тайния революционен комитет: Тодор Пеев, 
Гошо Спасов, Илия Правчанов, Христо Петков, Антон поп Дончев, Симеон Златарев, Иван Герчев, 
Илия Вълчев и игумена на манастира „Варовитец" Хрисант и будни етрополци: Генко Пашов, Цено Христов, 
Гаврил Банчев, Хино Лазаров, поп Кръстю – младия и др.. В тази обстановка даскал Тодор Пеев със своето красноречие и 
убедително слово основава читалище „Напредък" в гр. Етрополе. Създадено преди 140 години, то и до днес запазва духа на 
българина, минал през всички исторически превратности. Читалището носи името на своят основател Тодор Пеев.
Първата дейност от основаването е читалищна библиотека с над 300 тома книги, която съществува и до днес. През 1894 г. 
група ученици и учители образуват любителска театрална трупа в която влизат: Александър Атанасов Петков, Александър Николов Тацов, 
Александър Павлов Христов, Никола Вутов, Иван Йосифов Попов, Тодор Хинов и др. През годините са изнесени редица спектакли, които носят
 духа на своето време, като всеки самодеец дава искрица от себе си. От 1996 театралната трупа носи името на своя дългогодишен постановчик – 
 режисьор Михаил Пенчев.</p>
</div>

<br><br>

<h5 style = "margin-left: 300px;margin-right:300px;text-align:center">През годините са създавани различни школи, оркестри и състави, някои от които съществуват и до наши дни.</h5><br>


<div style="  justify-content: center; gap: 20px; padding: 20px; flex-wrap: wrap;" class = "row">

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;display:ralative">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      🎵
    </div>
    <p>Детски музикални школи, основани 1955 г.: цигулка, акордеон, пиано и солфеж, народни инструменти: гадулка, гайда, кавал, тамбура и тъпан.</p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎵
    </div>
    <p>Духов оркестър, основан 1934 г., който съществува и в момента „Етрополска духова музика".</p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎵
</div>
      <p>Народни хорове, естрадно сатиричен състав, вокално инструментални състави.</p>
  </div>
<br>
  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
    🎵
    </div>
    <p>Киносалона дава възможност за запознаване на етрополци с редица творби на режисьори и изпълнението на артисти от световна класа.</p>
  </div>

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


</body>
</html>







