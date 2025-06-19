
<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

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
      require "_logged_out.php"
      // Вмъква шаблона от _logged_out.php
    ?>

<br><br><br>
<h1 style = "font-family: Times New Roman; color: rgb(226, 141, 50)">НАРОДНО ЧИТАЛИЩЕ "ТОДОР ПЕЕВ - 1871"</h1>

<div class= "parent" style = "position: relative">
<img src="history1.jpg" class="d-block w-100" alt="">
<div style = "background-color: white; width: 55%; position: absolute;left:0;right:0;bottom:0 ; margin-left:8%;border-right: 20px solid rgb(226, 141, 50); padding-left:1%">
      <h3 style = "font-family: Times New Roman;">Стожер на цялостния културен живот на Етрополе е Народно читалище „Тодор Пеев-1871г."
</h3>
</div>
</div>
<div style = "display: inline ">
<div style = "background-color: white; width: 55%;margin-left:8%;display: inline-block; border-right: 20px solid rgb(226, 141, 50);border-bottom: 20px solid rgb(226, 141, 50); padding-left:1%">
        <p> <br>
        Историческите анализи показват, че тази самобитна форма на обществено-политически живот изиграва ролята на културно-просветно оръжие в борбата за национално освобождение.
На 7 януари 1871 год. в голямата килия на манастирския метох в града се събират членовете на Тайния революционен комитет: Тодор Пеев, Гошо Спасов, Илия Правчанов, Христо Петков, Антон поп Дончев, Симеон Златарев, Иван Герчев, Илия Вълчев и игумена на манастира „Варовитец" Хрисант и будни етрополци: Генко Пашов, Цено Христов, Гаврил Банчев, Хино Лазаров, поп Кръстю – младия и др.. В тази обстановка даскал Тодор Пеев със своето красноречие и убедително слово основава читалище „Напредък" в гр. Етрополе. Създадено преди 140 години, то и до днес запазва духа на българина, минал през всички исторически превратности. Читалището носи името на своят основател Тодор Пеев.

Първата дейност от основаването е читалищна библиотека с над 300 тома книги, която съществува и до днес. През 1894 г. група ученици и учители образуват любителска театрална трупа в която влизат: Александър Атанасов Петков, Александър Николов Тацов, Александър Павлов Христов, Никола Вутов, Иван Йосифов Попов, Тодор Хинов и др. През годините са изнесени редица спектакли, които носят духа на своето време, като всеки самодеец дава искрица от себе си. От 1996 театралната трупа носи името на своя дългогодишен постановчик – режисьор Михаил Пенчев.
 </p>
 <h5>През годините са създавани различни школи, оркестри и състави, някои от които съществуват и до наши дни.</h5>
 <p> - духов оркестър, основан 1934 г., който съществува и в момента „Етрополска духова музика".<p>
<p>- танцов състав, основан 1946 г., който в момента е Фолклорен ансамбъл „Балканска младост"<p>
<p>- детски музикални школи, основани 1955 г.: цигулка, акордеон, пиано и солфеж, народни инструменти: гадулка, гайда, кавал, тамбура и тъпан.<p>
<p>- народни хорове, естрадно сатиричен състав, вокално инструментални състави.<p>
<p>- киносалона дава възможност за запознаване на етрополци с редица творби на режисьори и изпълнението на артисти от световна класа.<p>
<p>Всички ръководители на състави, преподаватели и служители на читалището са оставили частица от себе си, от своето творчество, за което говорят многото грамоти, награди и плакети от наши и чужди фестивали.

Читалището е наградено с орден „Кирил и Методий – I степен" 1961г..

Новата сграда е построена в центъра на града и открита 1979 г., която със своя облик дава възможност за различни форми на самодейност и развитие на културата в Етрополе.

 В момента читалището разполага с голям салон от 600 места, малък салон – 150 места, многофункционална зала, библиотека, репетиционни зали, гримьорни, реквизит и административни кабинети.
<p>
<br><br>
</div>
<br><br>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<br><br>
<div style =" text-align: center">
<a href="" class="fa fa-facebook"></a>

<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  margin-right:auto;
  margin-left:auto;
  text-decoration: none;
  border-radius: 100%;
}


.fa:hover {
  opacity: 1.9;
}


.fa-facebook {
  background:rgb(207, 97, 46);
  color: white;
}
</style>
<br><br><br><br>






</body>
</html>







