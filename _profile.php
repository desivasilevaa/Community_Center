<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ( isset( $_POST['submit'] ) ) {
  session_unset();
  session_destroy();
  header('location: _startpage2.php');
  exit;
}
elseif ( isset( $_POST['submit2'] ) ){
  header('location: _update_profile.php');
  exit;
}

$stmt = $connection->prepare("SELECT * FROM Seats WHERE user_id=? order by seat_id desc limit 1"); 
$stmt->execute([$_SESSION['user_id']]); 
$Sdata = $stmt->fetch();
$seats = json_decode($Sdata['seat'], true);

if ( isset( $Sdata['event_id'] ) ){
  $stmt = $connection->prepare("SELECT * FROM Events WHERE event_id=?"); 
  $stmt->execute([$Sdata['event_id']]); 
  $data = $stmt->fetch();
}
?>

<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Профил</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
    <?php
    require "_navbar.html"
    // Вмъква шаблона от navbar.html
    ?>

      <br><br><br><br>
      <div class="col-sm-6" style="margin-left: auto; margin-right: auto">
            <div class="row">
                <h3 style="text-align: center;"><b>Здравей,</b> <?php echo $_SESSION['first_name'];?>!</h3>
            </div>
      </div><br>
      <!-- Поздрав -->
       
      <div class="col-sm-4" style="margin-left: 5%; float: left; border-radius: 20px;">
        <div style="padding: 4% 2% 0% 2%; background-color: rgb(226, 141, 50); height: 10%; border-bottom: 2px solid black" >
            <h4 style="color: rgb(128, 80, 28)"><b>Вашия профил</b>
            <img src="profile_pic.png" alt="" width="36" height="36" style="margin-left: 50%"></h4><br>
        </div>
        <div style="background-color: rgb(255, 255, 255); padding: 20px 40px 10px 10px;">
          <p>
            <b>Име:</b> <?php echo $_SESSION['first_name'];?><br><br>
            <b>Фамилия:</b> <?php echo $_SESSION['last_name'];?><br><br>
            <b>Потребителско име:</b> <?php echo $_SESSION['username'];?><br><br>
            <b>Имейл:</b> <?php echo $_SESSION['email'];?><br><br>
            <b>Телефон:</b> <?php echo $_SESSION['phone'];?><br>
          </p>
        </div>
        <form method="post" style="padding: 2%; background-color: rgb(226, 141, 50);">
            <input type="submit" class="btn btn-secondary btn-sm" name="submit" value="Изход">
            <input type="submit" class="btn btn-secondary btn-sm" name="submit2" value="Редактирай" style="margin-left: 65%">
        </form>
      </div>
      <!-- Информация за потребителя -->

      <div class="col-sm-6" style="margin-left: 6%; display: inline-block; background-color: white; border-radius: 20px; padding-bottom: 1%; border-bottom: 2px solid rgb(226, 141, 50)">
        <div style="padding: 2%; padding-bottom: 2%; border-bottom: 2px solid rgb(0, 0, 0)">
            <h4 style="margin-top: 1%; padding-bottom: 1%; border-bottom: 2px solid black"><b>Вашите билети</b></h4>
            <br>
            <?php if(isset($Sdata['event_id'])){?>
            <div class="card h-25" style="max-width: 500px;">
              <div class="row g-0">
                <div class="col-md-3 h-25">
                  <img src="<?php echo $data['poster']?>" class="rounded-start" alt="..." width="120.96" height="175.41">
                </div>
                <div class="col-md-8">
                  <ul class="list-group list-group-flush">
                    <li class="list-group-item">
                      <b style="color: rgb(226, 141, 50)">Събитие:  </b>
                      <?php echo $data['name']?>
                    </li>
                    <li class="list-group-item">
                      <b style="color: rgb(226, 141, 50)">Дата:  </b>
                      <?php echo $data['date']?>
                    </li>
                    <li class="list-group-item">
                      <b style="color: rgb(226, 141, 50)">Цена:  </b>
                      <?php echo $data['price']."лв"?>
                    </li>
                    <li class="list-group-item">
                      <b style="color: rgb(226, 141, 50)">Места(ред-място):  </b>
                      <?php echo implode(', ', $seats); ?>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <br>
            <?php } else{ ?>
              <h4>Нямате запазени билети!</h4>
              <?php } ?>
        </div><br>
          <p style="text-align: center">
            Покажете това на касата! Там ще получите билетите си.
          </p>
      </div>
      <!-- Запазени билети -->

  </body>
</html>