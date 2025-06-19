<?php 

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
      
      $_SESSION['first_name'] = $user['first_name'];
      $_SESSION['last_name'] = $user['last_name'];
      $_SESSION['username'] = $user['username'];
      $_SESSION['email'] = $user['email'];
      $_SESSION['phone'] = $user['phone'];
      $_SESSION['user_id'] = $user['user_id'];
      // ако са въведени правилни име и парола се стартира сесията и се задават данните на потребителя в сесията
		}
  }
}
?>	
    <nav class="navbar navbar-expand-lg fixed-top bg-light">
        <div class="container-fluid">
            <a class="navbar-brand">
                <img src="Chitalishte2copy.png" alt="" width="50" height="44">
              </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="_startpage2.php">Начало</a>
              </li> 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  За читалището
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="_history.php">История</a></li>
                  <li><a class="dropdown-item" href="_tanci.php">Танцов ансамбал</a></li>
                  <li><a class="dropdown-item" href="_instrumenti.php">Музикални групи</a></li>
                  <li><a class="dropdown-item" href="_vocal.php">Вокални групи</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Новини
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="_news.php">Новини</a></li>
                  <li><a class="dropdown-item" href="_events.php">Събития</a></li>
                </ul>
              </li>
            </ul>

            <?php if(isset($_SESSION['username'])){?>
              <a href="_profile.php" style="margin-right: 1%"><img src="profile_pic.png" alt="" width="36" height="36"></a>
              <!-- Ако потребителя е влязъл в профила си, снимката води до страницата profile.php-->
              <?php } else{ ?>
                <span class="nav-link" href="#">
                  <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><img src="profile_pic.png" alt="" width="36" height="36"></button>
            </span>
            <!-- В противен случай, снимката отваря страничен панел с логин-->
                <?php } ?>

          </div>
        </div>
    </nav>
    <!-- Горен панел със страници -->

    <nav class="navbar navbar-expand-lg fixed-bottom bg-light">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link disabled" style="color: darkslategray; font-size: smaller;">
                        <img src="location.png" alt="" width="16" height="18">
                        Етрополе, Г. Димитров ул.2</a>
                  </li>
                </ul>
                <span class="nav-link" href="#">
                  <a href="https://www.facebook.com/profile.php?id=100063347041011">
                    <img src="facebook_logo.png" alt="" width="42" height="36">
                  </a>
                </span>
                <!-- span работи с кода в отварящия таг на ul: "me-auto mb-2 mb-lg-0" -->
              </div>
        </div>
      </nav>
    <!--Долен панел с информация -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel" style="visibility:visible">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasRightLabel">Влезте в профила си</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <form method="post">
          <p>Влезте във вашият профил, за да видите билетите си!</p>
          
          <label>Потребителско име:</label><br>
          <input type="text" name="username" class="form-control"><br>
          <label>Парола:</label><br>
          <input type="password" name="password" class="form-control"><br><br>
          <input type="submit" name="submit" value="Вход"><br><br>
          <a href="_register.php" style="font-size: smaller">Нямате профил? Регистрирайте се!<a>
          </form>
      </div>
    </div>
    <!-- Това е код към бутона за профил (II случай)-->
    
  
    <!-- Съобщение при грешно име и/или парола -->

