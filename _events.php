<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


$event = 0;
if (isset( $_POST['btn1'] ) ){
    $event = 7;
}
elseif (isset( $_POST['btn2'] ) ){
    $event = 5;
}
elseif (isset( $_POST['btn3'] ) ){
    $event = 6;
}
elseif (isset( $_POST['btn4'] ) ){
    $event = 2;
}
elseif (isset( $_POST['btn5'] ) ){
    $event = 4;
}
elseif (isset( $_POST['btn6'] ) ){
    $event = 3;
}

if ($event > 0){
    $stmt = $connection->prepare("SELECT event_id FROM Events WHERE event_id = ?"); 
	$stmt->execute([ $event ]); 
	$user = $stmt->fetch();
    $_SESSION['event_id'] = $event;
    header('location: _ticket_reservation.php');
    exit;
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Събития</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php
     require "_logged_out.php";
     ?>
     <br><br><br><br><br>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(255, 255, 255);
            margin: 0;
            padding: 0;
        }
        header {
            background-color: rgb(226, 141, 50);
            color: white;
            padding: 20px;
            text-align: center;
        }
        .event-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 17px; /* Увеличихме разстоянието между събитията */
            margin: 20px;
        }
        .event {
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px  rgb(239, 235, 231);
            overflow: hidden;
            width: 400px; /* Намалихме ширината на събитията */
        }
        .event img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }
        .event-info {
            padding: 20px;
        }
        .event-info h2 {
            margin: 0;
            color: #333;
        }
        .event-info p {
            color: #777;
            margin: 10px 0;
        }
        .event-info .price {
            font-weight: bold;
            color: #27ae60;
            margin: 10px 0;
        }
        .buy-button {
            background-color:rgb(83, 88, 237);
            color: white;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 100%;
            text-align: center;
            font-size: 16px;
        }
        .buy-button:hover {
            background-color:rgb(83, 88, 237);
        }
    </style>

    <header>
        <h1>Събития</h1>
        <p>Намерете най-добрите събития и купете билети онлайн</p>
    </header>

    <form method="post">
    <div class="event-container">
        <!-- Първи ред с три събития -->
        <div class="event">
            <img src="magic.jpg" alt="...">
            <div class="event-info">
                <h2>Магическо шоу</h2>
                <p> Петък, 12 май 2025г</p>
                <p>Място:Народно читалище „Тодор Пеев-1871, гр.Етрополе</p>
                <p>Не пропускайте това уникално кино!</p>
                <p class="price">Цена:до 10лв</p>
                <button type="submit" name="btn1" class="buy-button">Купи билет</button>
            </div>
        </div>

        <div class="event">
            <img src="постановка.jpg" alt="Събитие 2">
            <div class="event-info">
                <h2>Театрална постановка</h2>
                <p>Събота, 13 май 2025</p>
                <p>Място: Народно читалище „Тодор Пеев-1871, гр.Етрополе</p>
                <p>Заповядайте на хитовата постановката "Роднини" с Николай Урумов</p>
                <p class="price">Цена: 15 лв.</p>
                <button type="submit" name="btn2" class="buy-button">Купи билет</button>
            </div>
        </div>

        <div class="event">
            <img src="театър.jpg" alt="Събитие 3">
            <div class="event-info">
                <h2>Театрална постановка</h2>
                <p>Неделя, 23 май 2025, 19:00ч.</p>
                <p>Място:Народно читалище „Тодор Пеев-1871,гр.Етрополе</p>
                <p>Ще може да гледате постановката „Малки изневери“ от Нийл Саймъл и Уди Алън
                С участието на: Искра Радева, Тончо Токмакчиев, Георги Кадурин, Марияна Миланова</p>
                <p class="price">Цена: 20 лв.</p>
                <button type="submit" name="btn3" class="buy-button">Купи билет</button>
            </div>
        </div>
        
        <!-- Втори ред с три събития -->
        <div class="event">
            <img src="posters/комедия.jpg" alt="Събитие 4">
            <div class="event-info">
                <h2>Постановка:"И верният отговор е"</h2>
                <p>Понеделник, 28 май 2025, 19:00ч</p>
                <p>Място: Народно читалище „Тодор Пеев-1871,гр.Етрополе</p>
                <p>.Една изневяра, трима пламенни перничани, един любим отбор и една мечта, събрани на едно място, с 
                обещание за много смях и неочакван край. </p>
                <p class="price">Цена: 15 лв.</p>
                <button type="submit" name="btn4" class="buy-button">Купи билет</button>
            </div>
        </div>

        <div class="event">
            <img src="постановка2.jpg" alt="Събитие 5">
            <div class="event-info">
                <h2>Постановка:"Съседите отгоре"</h2>
                <p>Сряда, 04 юни 2025</p>
                <p>Място: Народно читалище „Тодор Пеев-1871,гр.Етрополе</p>
                <p>Билетите за "Съседите отгоре" могат да бъдат чудесен подарък за Свети Валентин!Постановката е за възраст 16+!p>
                <p class="price">Цена: 15 лв.</p>
                <button type="submit" name="btn5" class="buy-button">Купи билет</button>
            </div>
        </div>

        <div class="event">
            <img src="концерт.jpg" alt="Събитие 6">
            <div class="event-info">
                <h2>Концерт - Веселин Маринов</h2>
                <p>Четвъртък, 14 април  2025, 18:30</p>
                <p>Място:НЧ "Тодор Пеев-1871", гр.Етрополе</p>
                <p>НЧ "Тодор Пеев-1871" за пореден път ще бъде част от турнето на Веселин Маринов.
                Станете част от "Да се събудиш до мен"!</p>
                <p class="price">Цена: 30 лв.</p>
                <button type="submit" name="btn6" class="buy-button">Купи билет</button>
            </div>
        </div>
    </div>
    </form>

</body>
</html>  