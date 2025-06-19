<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

try {
	$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
$stmt = $connection->prepare("SELECT * FROM Users WHERE username = ?"); 
$stmt->execute([ $_SESSION['username'] ]); 
$user = $stmt->fetch();

if ( isset( $_POST['submit'] ) ) {
    $password1 = $_POST['password1'];

    if( password_verify($password1, $user['password']  )){

        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $username = $_POST['username'];
        $password = $_POST['password2'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $password = password_hash($password, PASSWORD_BCRYPT);

        
        // UPDATE заявка към базата, с която се презаписват полетата на даден потребител
        $sql = "UPDATE Users SET first_name = ?, last_name = ?, username = ?, password = ?, email = ?, phone = ? WHERE user_id = ?";
        $connection->prepare($sql)->execute([$first_name, $last_name, $username, $password, $email, $phone, $user['user_id']]);
    }

    header("location: _profile.php");
}
?>


<html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Регистация</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
    <?php
    require "_navbar.html"
    ?>
    <!--Вмъква шаблона от navbar.html-->
    <svg xmlns="http://www.w3.org/2000/svg" style="display: none;">
        <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
    </symbol>
    </svg>
     <!--Вмъква символ от w3.org-->

    <br><br><br><br>
    <form method="post">
        <div class="register_form" style="margin-left: 2%;">
            <div class="col-sm-5" style="background-color: rgb(255, 255, 255); border-radius: 8px; margin-left: auto; margin-right: auto">
                <div class="row mb-3">
                    <h5 style="text-align: center;"><u>Редактирай данни</u></h5>
                </div>
            </div>
            <div class="col-sm-5" style="background-color: rgb(250, 250, 250); padding: 2% 0% 1% 0%; margin-left: auto; margin-right: auto">
                <div class="row mb-3" style="margin-left: 3%;">
                    <label for="inputFName" class="col-sm-3 col-form-label">Име:</label>
                    <div class="col-sm-8">
                        <input type="text" name="first_name" id="inputFName" placeholder=<?php echo $user['first_name']?> class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputLName" class="col-sm-3 col-form-label">Фамилия:</label>
                    <div class="col-sm-8">
                        <input type="text" name="last_name" id="inputLName" placeholder=<?php echo $user['last_name']?> class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputUSername" class="col-sm-3 col-form-label">Потребителско име:</label>
                    <div class="col-sm-8">
                        <input type="text" name="username" id="inputUSername" placeholder=<?php echo $user['username']?> class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputOldPassword" class="col-sm-3 col-form-label">Стара парола:</label>
                    <div class="col-sm-8">
                        <input type="text" name="password1" id="inputOldPassword" class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputNewPassword" class="col-sm-3 col-form-label">Нова парола:</label>
                    <div class="col-sm-8">
                        <input type="text" name="password2" id="inputNewPassword" class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputEmail" class="col-sm-3 col-form-label">Имейл:</label>
                    <div class="col-sm-8">
                        <input type="text" name="email" id="inputEmail" placeholder=<?php echo $user['email']?> class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <label for="inputPhone" class="col-sm-3 col-form-label">Телефон:</label>
                    <div class="col-sm-8">
                        <input type="text" name="phone" id="inputPhone" placeholder=<?php echo $user['phone']?> class="form-control">
                    </div>
                </div>
                <div class="row mb-3" style="margin-left: 3%">
                    <div class="col-sm-8">
                        <input type="submit" name="submit" value="Изпрати">
                    </div>
                </div>
            </div>
        </div>
    </form>
    <br><br>
</html>