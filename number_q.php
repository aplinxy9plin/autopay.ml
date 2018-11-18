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
                  <a href="lk.php" class="login100-form-btn">
                    Готово
                  </a>
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
