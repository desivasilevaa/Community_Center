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
    <title>Начало</title> <!--Смени с името на страницата-->
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

<div style = "position: relative;width: 100%;max-width: 100%;">
  <img src="history1.jpg" style = " width: 100%;height: auto;display: block;">
  <div style = "position: absolute;top: 0;eft: 0;width: 100%;height: 100%;color: white;background: rgba(0, 0, 0, 0.5); display: flex;flex-direction: column;justify-content: center;align-items: center;text-align: center;">
    <h1 style= "font-size: 55px;font-weight: bold;margin-bottom: 24px;">Народно читалище ,,Тодор Пеев" 1871г.</h1>
    <h1 style= "font-size: 25px;font-weight: bold;margin-bottom: 24px;"
    >Културен дом на малки и големи самодейци.</h1><br><br>
    <div style = " display: flex;flex-direction: column;     justify-content: center;gap: 16px; ">
    <a  style= "text-decoration:none;padding: 10px 30px;border-radius: 999px;border: none;color: white;font-size: 16px;cursor: pointer;background-color: rgb(226, 141, 50)" href = "_events.php">Предстоящи събития
</a>
    <a style= " text-decoration:none;padding: 10px 30px;border-radius: 999px;color:white;border: none;font-size: 16px;cursor: pointer;background-color: rgb(226, 141, 50)" href = "_history.php">За читалището</a>
</div>
  </div>
</div>





<div style="display: flex;gap: 0%;background-color: white; width:100%;height:550px">
    <div style= "flex:1;margin-left: 15%;margin-top:5%"> 
        <img src = "chitalishte3.jpg" style = "width: 65%;
        height: auto;">
</div>
    <div style= "flex:1">
    <h1 style= "margin-top:10%;font-weight:bold;color:white; font-size: 25px">За читалището</h1>
    <p style = "width: 500px">Читалище „Тодор Пеев – 1871“ – гр. Етрополе е 
        средище на култура, образование и традиции. Основано през 1871 г., 
        то продължава да обогатява духовния живот на града с концерти, театрални представления, 
        изложби и фолклорни изяви.</p>
    <br>
    <p style = "width: 500px">При нас ще откриете школи по музика, танци, 
        театър и изобразително изкуство, както и богата библиотека. 
        Съхраняваме и развиваме българските традиции, като създаваме пространство 
        за творчество и вдъхновение. Заповядайте – тук културата оживява!</p>
    <br>
    
    <a style= "text-decoration:none;padding: 10px 30px;border-radius: 999px;border: none;font-size: 16px;cursor: pointer;color:white;background-color: rgb(226, 141, 50)" href = "_history.php" >Научете повече </a>
</div>
</div>
<br>
<h2 style="font-size: 30px;font-weight: bold;text-align: center;margin-bottom: 48px;">Предстоящи събития</h2>




<div style="display:flex;gap:20px;justify-content:center;flex-wrap:wrap">

    <div style = "background:white;width: 300px;border-radius: 10px;overflow: hidden ">
      <img src="jenskocarstvo.jpg" style= "width:100%;height:180px;object-fit:cover">
      <div style="padding:15px">
        <div style="color: orange;">5 юли 2025</div>
        <h3 style= "margin: 10px 0 5px;font-zide:18px">СУ "Христо Ясенов" ще отпразнува своя 80-годишен юбилей със серия от мероприятия.</h3>
        <p style= "font-size: 14px;color:#555">На сцената ще видите постановката "Женско царство" пресъздадена от бивши и настоящи възпитаници на гимназията!</p>
        <div style="display:flex;justify-content: space-between;font-size;13px;margin-top:10px;color:#777">
          <span><i class="fas fa-map-marker-alt mr-1"></i>Народно читалище „Тодор Пеев-1871</span>
          <a style = "text-decoration:none;color:grey"href = "_events.php">Детайли</a>
        </div>
      </div>
    </div>

    <div style = "background:white;width: 300px;border-radius: 10px;overflow: hidden ">
      <img src="theband.jpg" style= "width:100%;height:180px;object-fit:cover">
      <div style="padding:15px">
        <div style="color: orange;">15 юли 2025</div>
        <h3 style= "margin: 10px 0 5px;font-zide:18px">Концерта на "The band of friends"</h3>
        <p style= "font-size: 14px;color:#555">Групата ще зарадва етрополската публика с много родни и световни хитове!</p><br><br>
        <div style="display:flex;justify-content: space-between;font-size;13px;margin-top:10px;color:#777">
          <span><i class="fas fa-map-marker-alt mr-1"></i>Народно читалище „Тодор Пеев-1871</span>
          <a style = "color:grey;text-decoration:none;" href = "_events.php">Детайли</a>
        </div>
      </div>
    </div>

    <div style = "background:white;width: 300px;border-radius: 10px;overflow: hidden ">
      <img src="комедия.jpg" style= "width:100%;height:180px;object-fit:cover">
      <div style="padding:15px">
        <div style="color: orange;">28 юни 2025</div>
        <h3 style= "margin: 10px 0 5px;font-zide:18px">Постановка:"И верният отговор е"</h3>
        <p style= "font-size: 14px;color:#555">Една изневяра, трима пламенни перничани, един любим отбор и една мечта, събрани на едно място, с обещание за много смях и неочакван край.</p>
        <div style="display:flex;justify-content: space-between;font-size;13px;margin-top:10px;color:#777">
          <span><i class="fas fa-map-marker-alt mr-1"></i>Народно читалище „Тодор Пеев-1871</i></span>
        
          <a style = "color:grey;text-decoration:none;" href = "_events.php">Детайли</a>
        </div>
      </div>
    </div>

    
  </div>
<br><br>
<div>
    <a  href= "_events.php" style="text-decoration:none;">
  <button style= "text-decoration:none;padding: 10px 30px;border-radius: 999px;border: none;display: block;color:white; margin: 0 auto;font-size: 16px;cursor: pointer;background-color: rgb(226, 141, 50)">Виж всички събития...</button></a>
</div>
</div>
<br><br>

<h2 style="font-size: 30px;font-weight: bold;text-align: center;margin-bottom: 48px;">Нашите дейности</h2>
<div style="display: flex; justify-content: center; gap: 20px; padding: 20px; flex-wrap: wrap;">

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      🎵
    </div>
    <h3 style="font-weight: bold;">Фолклор</h3>
    <p>Традиционни български танци и песни за всички възрасти.</p>
  </div>

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      🎨
    </div>
    <h3 style="font-weight: bold;">Работилници</h3>
    <p>Времето, в което малките таланти на града развихрят въображението си.</p>
  </div>

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      📚
    </div>
    <h3 style="font-weight: bold;">Библиотека</h3>
    <p>Богата колекция от книги и периодични издания.</p>
  </div>

  <div style="background: #f9fafb; padding: 20px; border-radius: 12px; width: 220px; text-align: center;">
    <div style="width: 60px; height: 60px; background-color: rgb(226, 141, 50); border-radius: 50%; margin: 0 auto 10px; display: flex; justify-content: center; align-items: center;">
      🎭
    </div>
    <h3 style="font-weight: bold;">Театър</h3>
    <p>Любителски театрални постановки за малки и големи.</p>
  </div>

</div>
<br><br>

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