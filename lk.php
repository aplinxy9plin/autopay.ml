<?php
  // session_start();
  // echo $_SESSION['login'];
?>
<html style="background: #ededed">
<head>
  <title>Личный кабинет</title>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/lk.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
</head>
<body style="background: #ededed">
  <nav id="navbar" class="">
    <div class="nav-wrapper">
      <!-- Navbar Logo -->
      <div class="logo">
        <!-- Logo Placeholder for Inlustration -->
        <a href="#home" style="font-size: 20px; color: #00B956"><img style="vertical-align: middle" src="images/ts_logo.png" width="85"/>Личный кабинет</a>
      </div>

      <!-- Navbar Links -->
      <ul id="menu">
        <!-- <li>
          <a>123</a>
        </li> -->
        <li style=" height: 100%; vertical-align: middle">
            <div>
              <img src="images/profile.png" width="23" style="margin-top: 3px; margin-left: 20px; display: inline-block" />
              <div style="display: inline-block; margin-top: 10px">
                <p style="font-size: 1.7em">+7-913-109-26-84</p>
              </div>
              <p style="line-height: 0; font-size: 1.2em">qwe@qwe.ru</p>
            </div>
        </li>
      </ul>
    </div>
  </nav>


  <!-- Menu Icon -->
  <div class="menuIcon">
    <span class="icon icon-bars"></span>
    <span class="icon icon-bars overlay"></span>
  </div>


  <div class="overlay-menu">
    <ul id="menu">
        <li><a href="#home">Home</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
  </div>

  <div class="container" style="margin-top: 100px;">
    <div class="row">
      <div class="col-md-4">
        <div>
          <h1 class="greenT">Мой номер:</h1>
          <p class="" style="font-size: 1em">
            +7-913-109-26-84
          </p>
        </div><br />
        <p style="font-size: 1em">
          Подключенные сервисы
        </p>
        <div>
          <table>
            <tr>
              <td style="padding-left: 10px">
                <img src="images/megafon.png" width="40" />
              </td>
              <td style="padding-left: 10px">
                <img src="images/vk.png" width="40" />
              </td>
              <td style="padding-left: 10px">
                <img src="images/ZKH.png" width="40" />
              </td>
            </tr>
          </table>
        </div>
      </div>
      <div class="col-md-8">
        <div class="card" style="display: inline-block; margin-left: 20px; margin-top: 20px; width: 15rem; border: none; background: #fff; height: 15%">
          <div class="card-body" style="padding: 10px">
            <h5 class="card-title">Посмотреть платежи</h5>
            <img src="images/ruble.png" width="40" style="vertical-align: middle; margin-top: 25%; margin-left: 80%;" />
          </div>
        </div>
        <div class="card" style="display: inline-block; margin-left: 20px; margin-top: 20px; width: 15rem; border: none; background: #fff; height: 15%">
          <div class="card-body" style="padding: 10px">
            <h5 class="card-title">Получить скидки</h5>
            <img src="images/profits.png" width="40" style="vertical-align: middle; margin-top: 25%; margin-left: 80%;" />
          </div>
        </div>
        <div onclick="qwe()" class="card" style="display: inline-block; margin-left: 20px; margin-top: 20px; width: 15rem; border: none; background: #fff; height: 15%">
          <div class="card-body" style="padding: 10px">
            <h5 class="card-title">Подключить сервисы</h5>
            <img src="images/share.png" width="40" style="vertical-align: middle; margin-top: 25%; margin-left: 80%;" />
          </div>
        </div>
        <a id="serv" href="services.php"></a>
        <script>
          function qwe(){
            document.getElementById('serv').click()
          }
        </script>
        </div>
      </div>
  </div>
</div>
  <!--===============================================================================================-->
  	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/bootstrap/js/popper.js"></script>
  	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/select2/select2.min.js"></script>
  <!--===============================================================================================-->
  	<script src="vendor/tilt/tilt.jquery.min.js"></script>
  <script>
  /*============================================================================
                                      Évelym S.
                      https://www.linkedin.com/in/evelym-santos/
    ============================================================================*/

      // Navigation
          // Responsive Toggle Navigation =============================================
          let menuIcon = document.querySelector('.menuIcon');
          let nav = document.querySelector('.overlay-menu');

          menuIcon.addEventListener('click', () => {
              if (nav.style.transform != 'translateX(0%)') {
                  nav.style.transform = 'translateX(0%)';
                  nav.style.transition = 'transform 0.2s ease-out';
              } else {
                  nav.style.transform = 'translateX(-100%)';
                  nav.style.transition = 'transform 0.2s ease-out';
              }
          });


          // Toggle Menu Icon ========================================
          let toggleIcon = document.querySelector('.menuIcon');

          toggleIcon.addEventListener('click', () => {
              if (toggleIcon.className != 'menuIcon toggle') {
                  toggleIcon.className += ' toggle';
              } else {
                  toggleIcon.className = 'menuIcon';
              }
          });
  </script>
</body>
</html>
