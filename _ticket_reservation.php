<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$stmt = $connection->prepare("SELECT * FROM Events WHERE event_id= ?"); 
	$stmt->execute([ $_SESSION['event_id']]); 
	$data = $stmt->fetch();

if (isset($_POST['submit2']) ){
  if (isset($_POST['selected'])) {
      $seat_array = $_POST['selected'];  
      $seat_json = json_encode($seat_array); 

      $sql = "INSERT INTO Seats (seat, event_id, user_id) VALUES (?, ?, ?)";
      $connection->prepare($sql)->execute([$seat_json, $_SESSION['event_id'], $_SESSION['user_id'] ]);

      $seat_id = $connection->lastInsertId();

      $sql = "INSERT INTO Tickets (event_id, seat_id, user_id) VALUES (?, ?, ?)";
      $connection->prepare($sql)->execute([$_SESSION['event_id'], $seat_id, $_SESSION['user_id'] ]);
  } } 
?>

<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Билети</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
    <?php
    require "_logged_out.php"
    ?>
    <!--Вмъква шаблона от logged_out.php -->

    <br><br><br>
    <?php if(isset($_SESSION['username'])){
        // Проверка дали потребителя е влязъл в профила си ?>
      <div>
        <div class="row" style="position: relative;">
          <img src="chitalishte_long.jpg" class="card-img" style="filter: brightness(60%);">
          <div style="position: absolute; top: 35%; width: 100%; text-align: center; color: white; text-shadow: 4px 4px 8px rgb(40, 40, 40);">
            <h1 style="font-size: 40px"><b>Запази билети за предстоящо събитие!</b></h1>
            <p style="font-size: 18px"><b>Тук може да резервирате билетите си. Може да ги платите на касата.</b></p>
          </div>
        </div>
      </div><br><br>
      <!-- Бла бла -->

    <div class="row">
        <br><br>
      <div class="col-sm-4" style="margin-left: 3%; display: inline-block; height: 20%;">
        <br>
        <div style="float: left;">
        <img src=<?php echo $data['poster']?> alt="" width="168" height="243.6" style="border-radius:20px">
        </div>
        <div style="padding: 4% 4% 0% 4%; display: inline-block; margin-left: 2%" >
        <p>
            Вие сте избрали: <br>
            <?php echo $data['name']?><br><br>
            Дата: <br>
            <?php echo $data['date']?><br><br>
            Цена: <?php echo $data['price']."лв"?><br>
        </p>
        <br><br>
        </div>
        <div><br>
          <p>
            <?php echo $data['info']?>
        <p><br>
        </div></div>
      <!-- Информация за избраното събитие -->

      <div class="col-sm-7" style="margin-left: 3%; display: inline-block;">
        <div style="background-color: rgb(255, 255, 255); border-radius: 15px; padding: 2%;">
            <h4 style="text-align: center; padding-bottom: 2%"><b>Изберете място/места</b></h4>
          <div style="border: 1px solid black; text-align: center; background-color: rgb(89, 64, 48)">
            <h6 style="padding-top: 1%; color: white">Сцена</h6>
          </div><br>

          <form method="post">
            <div style="overflow-y:scroll; overflow-x:scroll; height: 260px">
              <?php 
              $row_count = 15;
              $btn_num = 1;

              for ($x = 1; $x <= $row_count; $x++) { ?>
              <div class="row">
                <div class="col-sm-1" style="display: flex">
                  <p><small><?php echo $x . " ред  "?></small></p>
                </div>
                <div class="btn-group btn-group-sm" role="group" style="display: flex;width: 89%">
                  <?php 
                  $numbers = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20, 19, 17, 15, 13, 11, 9, 7, 5, 3, 1];
                  foreach ($numbers as $number) { ?>
                    <input type="checkbox" class="btn-check" id="btncheck<?php echo $btn_num; ?>" name="selected[]" value="<?php echo $x . '-' . $number; ?>" autocomplete="off">
                    <label class="btn btn-outline-secondary" for="btncheck<?php echo $btn_num; ?>"><?php echo $number; ?></label>
                    <?php $btn_num++; ?>
                  <?php } ?>
                </div>
              </div>
              <?php } ?>
            </div>
            <div style="text-align: left; display:inline-block; width:49.4%; margin-left: 1%">
              <h6>Четни</h6></div>
              <div style="text-align: right; display:inline-block; width:48.4%">
              <h6>Нечетни</h6>
            </div><br>
            <input type="submit" class="btn btn-outline-success" name="submit2" value="Запази" >
          </div>
          </form>

        <br><br><br>
      </div><br><br><br>
      <!-- Запази билети -->

    <?php } else{ ?>
      <br>
        <div style="text-align: center">
            <h1 style="color: red;">Влезте в профила си да резервирате билети!</h1>
        </div>
    <?php } ?>
      <!-- Съобщение, ако потребителя не е влязъл в профила си -->
      
    </div>
    <br><br><br>
  </body>
</html>