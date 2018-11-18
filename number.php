<!DOCTYPE html>
<html lang="ru">
<head>
	<title>Mega</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

  <!-- <div class="limiter" id="t_st" style="display: none">
		<div id="type" class="container-login100 section">
        <div class="wrap-login100" style="padding-top: 80px;">
            <div class="login100-form" style="  width: 50%; margin: 0 auto;">
              <span class="login100-form-title">
                Выберите вид автоплатежа
              </span>
              <div>
                <label class="login100-form-title">
                  <input type="radio" class="option-input radio" name="example" />
                    Периодичный
                </label>
                <label class="login100-form-title">
                  <input type="radio" class="option-input radio" name="example" />
                    Пороговый
                </label>
              </div>
              <a href="#first" id="go_first" class="login100-form-btn">
                Выбрал
              </a>
            </div>
			</div>
		</div>
	</div> -->

	<div class="limiter">
		<div id="first" class="container-login100 section">
        <div class="wrap-login100" style="padding-top: 80px;">
            <div class="login100-form" style="  width: 50%; margin: 0 auto;">
              <span class="login100-form-title">
                Укажите номер телефона для автоплатежа
              </span>
                <div class="wrap-input100 validate-input">
                  <input class="input100" type="tel" style="font-size: 2em;" name="email" placeholder="Номер">
                  <span class="focus-input100"></span>
                  <span class="symbol-input100">
                    <i class="fa fa-phone" aria-hidden="true"></i>
                  </span>
                </div>
                <div class="container-login100-form-btn" id="end">
                  <a href="#card" id="go_card" class="login100-form-btn">
                    Добавить карту
                  </a>
                </div>
            </div>
			</div>
		</div>
	</div>
  <div class="limiter">
		<div class="container-login100 section" style="background-color: #00B956">
        <div style="padding-top: 80px; background-color: #00B956">
              <div id="card" class="card" style="background: #731982">
                <div class="flipper" style="background: #00B956">

                  <div class="card__front">

                    <div class="card-number">
                      <div class="title">Card number</div>
                      <div class="card-number__inputs">
                        <div><input type="text" maxlength="4" inputmode='numeric' pattern="\d+" placeholder="0000" class="card-number-input"></div>
                        <div><input type="text" maxlength="4" inputmode='numeric' pattern="\d+" placeholder="0000" class="card-number-input"></div>
                        <div><input type="text" maxlength="4" inputmode='numeric' pattern="\d+" placeholder="0000" class="card-number-input"></div>
                        <div><input type="text" maxlength="4" inputmode='numeric' pattern="\d+" placeholder="0000" class="card-number-input"></div>
                      </div>
                    </div>

                    <div class="card-date">
                      <div class="title">Valid thru</div>
                      <div class="card-date__inputs">
                        <div><input type="text" maxlength="2" inputmode='numeric' pattern="\d+" placeholder="00" class="card-date-input"></div>
                        <div class="divider">/</div>
                        <div><input type="text" maxlength="2" inputmode='numeric' pattern="\d+" placeholder="00" class="card-date-input"></div>
                      </div>
                    </div>

                    <div class="card-brand">
                      <svg xmlns="http://www.w3.org/2000/svg" class="card__logo" width="140" height="43" viewBox="0 0 175.7 53.9"><style>.visa{fill:#fff;}</style><path class="visa" d="M61.9 53.1l8.9-52.2h14.2l-8.9 52.2zm65.8-50.9c-2.8-1.1-7.2-2.2-12.7-2.2-14.1 0-24 7.1-24 17.2-.1 7.5 7.1 11.7 12.5 14.2 5.5 2.6 7.4 4.2 7.4 6.5 0 3.5-4.4 5.1-8.5 5.1-5.7 0-8.7-.8-13.4-2.7l-2-.9-2 11.7c3.3 1.5 9.5 2.7 15.9 2.8 15 0 24.7-7 24.8-17.8.1-5.9-3.7-10.5-11.9-14.2-5-2.4-8-4-8-6.5 0-2.2 2.6-4.5 8.1-4.5 4.7-.1 8 .9 10.6 2l1.3.6 1.9-11.3M164.2 1h-11c-3.4 0-6 .9-7.5 4.3l-21.1 47.8h14.9s2.4-6.4 3-7.8h18.2c.4 1.8 1.7 7.8 1.7 7.8h13.2l-11.4-52.1m-17.5 33.6c1.2-3 5.7-14.6 5.7-14.6-.1.1 1.2-3 1.9-5l1 4.5s2.7 12.5 3.3 15.1h-11.9zm-96.7-33.7l-14 35.6-1.5-7.2c-2.5-8.3-10.6-17.4-19.6-21.9l12.7 45.7h15.1l22.4-52.2h-15.1"/><path fill="#F7A600" d="M23.1.9h-22.9l-.2 1.1c17.9 4.3 29.7 14.8 34.6 27.3l-5-24c-.9-3.3-3.4-4.3-6.5-4.4"/></svg>
                    </div>

                  </div>

                  <div class="card__back">

                    <button id="btn-back" class="btn-back">
                      <svg version='1.1' x='0px' y='0px'
                      viewBox='0 0 490.4 490.4' fill='#ffffff' xml:space='preserve'><g><g><path d='M245.2,490.4c135.2,0,245.2-110,245.2-245.2S380.4,0,245.2,0S0,110,0,245.2S110,490.4,245.2,490.4z M245.2,24.5 c121.7,0,220.7,99,220.7,220.7s-99,220.7-220.7,220.7s-220.7-99-220.7-220.7S123.5,24.5,245.2,24.5z'/>
                      <path d='M138.7,257.5h183.4l-48,48c-4.8,4.8-4.8,12.5,0,17.3c2.4,2.4,5.5,3.6,8.7,3.6s6.3-1.2,8.7-3.6l68.9-68.9	c4.8-4.8,4.8-12.5,0-17.3l-68.9-68.9c-4.8-4.8-12.5-4.8-17.3,0s-4.8,12.5,0,17.3l48,48H138.7c-6.8,0-12.3,5.5-12.3,12.3	C126.4,252.1,131.9,257.5,138.7,257.5z'/></g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g></svg>
                    </button>

                    <div class="card-cvc">
                      <div class="title">CVC</div>
                      <div class="card-cvc__input">
                        <div><input type="text" maxlength="3" inputmode='numeric' pattern="\d+" placeholder="000" class="card-cvc-input"></div>
                      </div>
                    </div>

                    <div class="card-actions">
                      <a href="login.php" class="card-submit">Добавить</a>
                    </div>


                  </div>

                </div>
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
  <style>
  .section {
/* box-sizing: border-box; */
width: 100%;
position: relative;
float: left;
/* text-align: center; */
}
.section:nth-child(1) {
  color: #fff;
  box-sizing: border-box;
  width: 100%;
  position: relative;
  float: left;
  text-align: center;
}
.section:nth-child(2) {
height: 100vh;
line-height: 90vh;
width: 100%;
margin: 0 auto;
}
.section:nth-child(3) {
height: 70vh;
line-height: 70vh;
background: #1abc9c;
}
.section:nth-child(4) {
height: 100vh;
line-height: 100vh;
background: url('http://magdeleine.co/wp-content/uploads/2014/10/14979299068_4d3bdde60c_o-1400x581.jpg');
background-size: cover;
}
/* .section i {
width: 32px;
height: 32px;
position: absolute;
color: #fff;
bottom: 5%;
left: 50%;
margin-left: -16px;
} */

  </style>
	<script>
  $(document).ready(function(){

  $(".card-number-input").keyup(function () {
      if (this.value.length == this.maxLength) {
        var nextInput = parseInt($(this).index(".card-number-input")) + 1;
        $(".card-number-input").eq(nextInput).focus();
      }
  });

  $(".card-number-input").eq(3).keyup(function () {
    if (this.value.length == this.maxLength) {
      $('.card-date-input').eq(0).focus();
    }
  });

  $(".card-date-input").keyup(function () {
    if (this.value.length == this.maxLength) {
      var nextInput = parseInt($(this).index(".card-date-input")) + 1;
      $(".card-date-input").eq(nextInput).focus();
    }
  });

  $(".card-date-input").eq(1).keyup(function () {
    if (this.value.length == this.maxLength) {
      $('.card').addClass('flipped');
      $('.card-cvc-input').eq(0).focus();
    }
  });

  $('#btn-back').on('click', function(){
    $('.card').removeClass('flipped');
    $('.card-number-input').eq(0).focus();
  });

});

		$('.js-tilt').tilt({
			scale: 1.1
		})
      $("#go_card").click(function(e) {
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
      });

    $(document).ready(function(){
      $("#go_first").click(function(e) {
        var element = document.getElementById('go_card');
        element.parentNode.removeChild(element);
        var new_el = document.createElement('a')
        new_el.className = "login100-form-btn"
        new_el.href = "lk"
        new_el.innerHTML = "Готово"
        var div = document.getElementById('end')
        div.appendChild(new_el)
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
      });
    });

    $(document).ready(function(){
      $("#card-submit").click(function(e) {
        document.getElementById('go_card').innerHTML = "Выбрать тип платежа"
        document.getElementById('t_st').style.display = "block"
        e.preventDefault();
        $('html, body').animate({
          scrollTop: $($.attr(this, 'href')).offset().top
        }, 700);
      });
    });

    function phoneMask() {
      var num = $(this).val().replace(/\D/g,'');
      $(this).val(num.substring(0,1) + '(' + num.substring(1,4) + ')' + num.substring(4,7) + '-' + num.substring(7,11));
    }
    $('[type="tel"]').keyup(phoneMask);
  </script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
