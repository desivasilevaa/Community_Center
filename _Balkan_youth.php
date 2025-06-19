<?php 
$servername = "localhost";
$username = "root";
$password = "369girlsdr1nk";
$database = "CommunityCenter";

$connection = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

if ( isset( $_POST['submit'] ) ) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	// записване на данните от полетата в променливи

	$stmt = $connection->prepare("SELECT * FROM Users WHERE username = ?"); 
	$stmt->execute([ $username ]); 
	$user = $stmt->fetch();
	// зареждане от базата на потребител с въведените от формата име и парола

	if ( $user ) {
		if( password_verify($password, $user['password']  )) {
      session_start();
      $_SESSION['first_name'] = $user['first_name'];
      $_SESSION['last_name'] = $user['last_name'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['phone'] = $user['phone'];
      // ако са въведени правилни име и парола се стартира сесията и се задават данните на потребителя в сесията
		}
  }
}
?>	

<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Танцова</title> <!--Смени с името на страницата-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Връзка с CSS пакета на Bootstrap-->
  </head>
  <body style="background-color: rgb(240, 240, 240);">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <!-- Връзка с JavaScript пакета на Bootstrap-->
     <?php include "_logged_out.php" ?>

<br><br><br>


<h1 style = "font-family: Times New Roman; color: rgb(226, 141, 50)">ТА ,,Балканска младост"</h1>

<div class= "parent" style = "position: relative">
<img src="sirni_zagovezni.jpg" class="d-block w-100" alt="deca2.jpg">
<div style = "background-color: white; width: 55%; position: absolute; right:0;left:0;bottom:0;margin-left:8%; border-right: 20px solid rgb(226, 141, 50); padding-left: 1%">
        <h3 style = "font-family: Times New Roman;">Танцов ансамбъл „Балканска младост“ – Пазители на българския фолклор
</h3>
</div>
</div>
<div style = "display: inline-block">

<div style = "background-color: white; width: 55%;margin-left:8%;display: inline-block;border-right: 20px solid rgb(226, 141, 50);border-bottom: 20px solid rgb(226, 141, 50); padding-left:1%">
        <p> <br>
            Танцов ансамбъл „Балканска младост“ е един от най-обичаните и утвърдени фолклорни състави в град Етрополе. 
            Основан с любов към българските традиции, ансамбълът обединява млади таланти, които с ентусиазъм и професионализъм представят красотата на българския народен танц.
 </p>
        <br>
        <h4>История и развитие</h4>
        <p>Ансамбълът е създаден с цел съхраняване и популяризиране на българския фолклор. 
            През годините се е утвърдил като важен културен символ на град Етрополе, участвайки в редица национални и международни фестивали. 
            Съставът е носител на престижни награди и признания, 
            което го прави горд представител на българската фолклорна традиция.
</p>
        <br>
        <h4>Репертоар</h4>
        <p>В репертоара на ансамбъла са включени традиционни народни танци от всички етнографски области на България – 
            Шоплука, Тракия, Добруджа, Пирин, Родопите и Северна България. Всеки танц е пресъздаден с 
            внимание към автентичността на стъпките, музиката и носиите, което придава уникалност на всяко изпълнение.
 </p>
        <br>
        <h4>Дейност и участия</h4>
        <p>Ансамбълът активно участва в:
✅ Национални и международни фестивали и конкурси
✅ Културни събития и празници в град Етрополе и страната
✅ Благотворителни инициативи и концерти
✅ Обучение и развитие на млади таланти в народните танци
</p>
        <br>
        <h4>Постижения</h4>
        <p>През годините „Балканска младост“ печели множество награди и отличия, 
            както от национални състезания, така и от международни изяви. Ансамбълът е признат за високото си ниво на изпълнение, 
            хармонията в движенията и неподправената емоция, 
            с която представя българската култура пред света. <br></p>
</div>



<div class="card" style="width: 18rem;display: inline-block; vertical-align: 100px; margin-left: 5%">
  <img src="kalinka_photo.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <p class="card-text">Калинка Пушкарова - ръководител на ТА ,,Балканска младост"</p>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item">Телефон: 089 471 7539</li>
    <li class="list-group-item">Facebook: <a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.facebook.com/kalinka.pushkarova/%3Flocale%3Dbg_BG&ved=2ahUKEwil0ebBjLmMAxW9S_EDHeHVEV4QFnoECBsQAQ&usg=AOvVaw1kt6J_kicaOkGH2Whk3uyV" class="card-link">Kalinka Pushkarova</a></li>
  </ul>
</div>


</div>



<br><br>
<h4 style = "font-family: Times New Roman; color: rgb(226, 141, 50); text-align: center" >Галерия</h4>





  <div id="carouselExample" class="carousel slide "style="background-color: rgb(215, 164, 110);padding: 1%">
  <div class="carousel-inner">

  <div class="carousel-item active">
        <div class="container-fluid" >
          <div class="row align-items-center" >
            <img class="col-sm-3" src="11.jpg" alt="...">
            <img class="col-sm-3" src="22.jpg" alt="">
            <img class="col-sm-3" src="33.jpg" alt="">
            <img class="col-sm-3" src = "44.jpg" alt="">
          </div>
        </div>
      </div>

      <div class="carousel-item active">
        <div class="container-fluid" >
          <div class="row align-items-center" >
            <img class="col-sm-3" src="55.jpg" alt="...">
            <img class="col-sm-3" src="66.jpg" alt="">
            <img class="col-sm-3" src="77.jpg" alt="">
            <img class="col-sm-3" src = "88.jpg" alt="">
          </div>
        </div>
      </div>

  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<br><br>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style =" text-align: center">
<a href="https://www.google.com/url?sa=t&source=web&rct=j&opi=89978449&url=https://www.facebook.com/BlakanYouth/%3Flocale%3Dbg_BG&ved=2ahUKEwikjvaJn7mMAxXSevEDHSZ0LMYQFnoECBwQAQ&usg=AOvVaw30NfHx2ZAS7WBNMn_Mqxb2" class="fa fa-facebook"></a>
<a href="https://www.instagram.com/balkanyouth_official/?__pwa=1#" class="fa fa-instagram"></a>
 <a href="https://www.tiktok.com/@balkanyouth_official#:~:text=balkanyouth_official" class="fa-brands fa-tiktok"></a>
</div>
<style>
.fa {
  padding: 10px;
  font-size: 30px;
  width: 50px;
  text-align: center;
  margin-right:auto;
  margin-left:auto;
  text-decoration: none;
  border-radius: 50%;
}


.fa:hover {
  opacity: 0.7;
}


.fa-facebook {
  background:rgb(0, 0, 0);
  color: white;
}
.fa-instagram {
  background:rgb(0,0,0);
  color: white;
}
.fa-tiktok {
  background:rgb(96, 97, 97);
  color: white;
}

</style>
    <br><br><br>
</body>
</html>