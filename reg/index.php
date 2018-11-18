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
	<div class="preloader loading" id="preloader">
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
</div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" id="login">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/ts_logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="../regFiles/save_user.php">
					<span class="login100-form-title">
						РЕГИСТРАЦИЯ
					</span>

					<center>
						<div class="wrap-input100 validate-input">
				      <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="x++; changeType()">
				        <div class="handle"></div>
				      </button>
				    </div>
					</center>

					<div id="default">
						<div id="face">
							<!-- Лицо -->
							<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
								<p><video id="video" autoplay="autoplay"></video></p>
								<p>
									<b>Для большей точности вам необходимо четко видеть свое лицо и находится не дальше, чем на 40 сантиметров от компьютера!</b>
								</p>
								<p><canvas style="display: none" id="canvas"></canvas></p>
							</div>
							<!-- <div class="preloader" style="display: none; position: fixed; z-index: 100000000000000; margin: 0 auto; margin-top: 25%;">
								<i class="pi">.</i>
								<i class="pi">.</i>
								<i class="pi">.</i>
							</div> -->
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<input class="input100" type="text" name="email" placeholder="Email">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass" placeholder="Пароль">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>

						<div class="wrap-input100 validate-input" data-validate = "Password is required">
							<input class="input100" type="password" name="pass_repeat" placeholder="Повтор пароля">
							<span class="focus-input100"></span>
							<span class="symbol-input100">
								<i class="fa fa-lock" aria-hidden="true"></i>
							</span>
						</div>
						<input class="input100" type="hidden" name="face" id="face_input">
						<input class="input100" type="hidden" name="age" id="age">

						<div class="container-login100-form-btn">
							<button type="button" class="login100-form-btn">
								Регистрация
							</button>
						</div>
						<!-- <button type="button" onclick="q()"> 123</button> -->

						<div class="text-center p-t-136">
							<a class="txt2" href="../">
								Войти
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</form>
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
	<script >
	document.getElementById('preloader').style.display = "none"
		$('.js-tilt').tilt({
			scale: 1.1
		})
		var z = false
		var input = $('.validate-input .input100');
		$('.login100-form-btn').on('click',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }
				if(check){
					snapshot()
				}
				return check
    });

    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{1,5}|[0-9]{1,3})(\]?)$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }
		var x = 0;
		function changeType(){
		  if(x == 2){
		    $('#default').show()
		    $('#face').hide()
				x = 0
		  }else{
		    // $('#default').hide()
		    $('#face').show()
		  }
		}
		"use strict";
		var video = document.getElementById('video');
		var canvas = document.getElementById('canvas');
		var videoStream = null;
		var preLog = document.getElementById('preLog');

		function log(text)
		{
			if (preLog) preLog.textContent += ('\n' + text);
			// else alert(text);
		}

		function snapshot()
		{
			document.getElementById('preloader').style.display = "block"
			canvas.width = video.videoWidth;
			canvas.height = video.videoHeight;
			canvas.getContext('2d').drawImage(video, 0, 0);
			// document.getElementsByClassName('preloader')[0].style.display = "block"
			// request
			q(function(dataURL){
				console.log(dataURL);
				var settings = {
				  "async": true,
				  "crossDomain": true,
				  "url": "http://localhost/mega/reg/face.php?q=1",
				  "method": "POST",
				  "headers": {
				    "content-type": "image/jpeg"
				  },
				  "data": dataURL
				}

				$.ajax(settings).done(function (response) {
					document.getElementById('preloader').style.display = "none"
					if(response !== '[]'){
						var x = response.split('_')
						var face = x[0]
						var age = x[1]
						console.log(face, age);
						document.getElementById('face_input').value = face
						document.getElementById('age').value = age
						// console.log(response);
						$('.validate-form').submit()
					}
				});
				// var xhr = new XMLHttpRequest();
				// xhr.withCredentials = true;
				//
				// xhr.addEventListener("readystatechange", function () {
				//   if (this.readyState === this.DONE) {
				//     console.log(this.responseText);
				//   }
				// });
				//
				// xhr.open("POST", "https://api.imgur.com/3/image?access_token=59aa2669edd3ed0a66eefa9cd8a794f690620a7e&client_id=018ebfa932f27b1");
				// // xhr.setRequestHeader("cookie", "UPSERVERID=upload.i-060453d91b82fcaba.production; IMGURSESSION=bc8a9d333b1802bbd4f99c5a1bfb5ac1; _nc=1");
				// xhr.setRequestHeader("content-type", "application/octet-stream");
				//
				// xhr.send(dataURL);
				// var settings = {
				//   "async": true,
				//   "crossDomain": true,
				//   "url": "https://southcentralus.api.cognitive.microsoft.com/face/v1.0/detect?returnFaceId=true&returnFaceAttributes=emotion&returnFaceLandmarks=false",
				//   "method": "POST",
				//   "headers": {
				//     "ocp-apim-subscription-key": "4e4286d7b1cd4989868725a00664c633",
				//     "content-type": "application/octet-stream"
				//   },
				//   "data": "dataURL"
				// }
				// $.ajax({
        //         method: 'POST',
        //         url: "https://southcentralus.api.cognitive.microsoft.com/face/v1.0/detect?returnFaceId=true&returnFaceAttributes=emotion&returnFaceLandmarks=false",
        //         headers:{
        //             "Content-Type":"application/octet-stream",
        //           "Ocp-Apim-Subscription-Key":"4e4286d7b1cd4989868725a00664c633",
        //           // "Accept":"application/octet-stream"
        //         },
        //         data: dataURL
        //     })
        //     .done(function(data) {
        //         console.log('Here: ' + data);
        //         // $('#responseData').html(data);
        //     })
        //     .fail(function(data) {
        //         alert("error" + JSON.stringify(data));
        //     });
			})
		}

		function q(callback){
			var dataURL = canvas.toDataURL();
			// console.log(dataURL);
			var strImage = dataURL.replace(/^data:image\/[a-z]+;base64,/, "");
			callback(strImage)
		}

		function noStream()
		{
			log('Access to camera was denied!');
		}

		function stop()
		{
			var myButton = document.getElementById('buttonStop');
			if (myButton) myButton.disabled = true;
			myButton = document.getElementById('buttonSnap');
			if (myButton) myButton.disabled = true;
			if (videoStream)
			{
				if (videoStream.stop) videoStream.stop();
				else if (videoStream.msStop) videoStream.msStop();
				videoStream.onended = null;
				videoStream = null;
			}
			if (video)
			{
				video.onerror = null;
				video.pause();
				if (video.mozSrcObject)
					video.mozSrcObject = null;
				video.src = "";
			}
			myButton = document.getElementById('buttonStart');
			if (myButton) myButton.disabled = false;
		}

		function gotStream(stream)
		{
			var myButton = document.getElementById('buttonStart');
			if (myButton) myButton.disabled = true;
			videoStream = stream;
			log('Got stream.');
			video.onerror = function ()
			{
				log('video.onerror');
				if (video) stop();
			};
			stream.onended = noStream;
			if (window.webkitURL) video.src = window.webkitURL.createObjectURL(stream);
			else if (video.mozSrcObject !== undefined)
			{//FF18a
				video.mozSrcObject = stream;
				video.play();
			}
			else if (navigator.mozGetUserMedia)
			{//FF16a, 17a
				video.src = stream;
				video.play();
			}
			else if (window.URL) video.src = window.URL.createObjectURL(stream);
			else video.src = stream;
			myButton = document.getElementById('buttonSnap');
			if (myButton) myButton.disabled = false;
			myButton = document.getElementById('buttonStop');
			if (myButton) myButton.disabled = false;
		}

		function start()
		{
			if ((typeof window === 'undefined') || (typeof navigator === 'undefined')) log('This page needs a Web browser with the objects window.* and navigator.*!');
			else if (!(video && canvas)) log('HTML context error!');
			else
			{
				log('Get user media…');
				if (navigator.getUserMedia) navigator.getUserMedia({video:true}, gotStream, noStream);
				else if (navigator.oGetUserMedia) navigator.oGetUserMedia({video:true}, gotStream, noStream);
				else if (navigator.mozGetUserMedia) navigator.mozGetUserMedia({video:true}, gotStream, noStream);
				else if (navigator.webkitGetUserMedia) navigator.webkitGetUserMedia({video:true}, gotStream, noStream);
				else if (navigator.msGetUserMedia) navigator.msGetUserMedia({video:true, audio:false}, gotStream, noStream);
				else log('getUserMedia() not available from your Web browser!');
			}
		}

		start();
	</script>

	<style>
		video{
			width: 100%;
		}
		.preloader {
  position: absolute;
  top: 120px;
  left: 50%;
  margin-left: -35px;
  height: 50px;
  width: 100px;
  overflow: hidden;
}
.pi {
  display: block;
  width: 30px;
  height: 30px;
  background: black;
  border-radius: 16px;
  position: absolute;
  top: 50%;
  left: 50%;
  margin: -8px 0 0 -8px;
  opacity: 1;
  -webkit-transform: translate3d(60px, 0, 0);
  overflow: hidden;
  text-indent: -9999px;
  border: 2px solid white;
}
.pi:nth-child(1) {
  background: #00B956;
  -webkit-animation: google 1.75s ease-in-out infinite;
  -moz-animation: google 1.75s ease-in-out infinite;
  -ms-animation: google 1.75s ease-in-out infinite;
  -o-animation: google 1.75s ease-in-out infinite;
  animation: google 1.75s ease-in-out infinite;
}
.pi:nth-child(2) {
  background: #00B956;
  -webkit-animation: google 1.75s ease-in-out infinite 0.3s;
  -moz-animation: google 1.75s ease-in-out infinite 0.3s;
  -ms-animation: google 1.75s ease-in-out infinite 0.3s;
  -o-animation: google 1.75s ease-in-out infinite 0.3s;
  animation: google 1.75s ease-in-out infinite 0.3s;
}
.pi:nth-child(3) {
  background: #731982;
  -webkit-animation: google 1.75s ease-in-out infinite 0.6s;
  -moz-animation: google 1.75s ease-in-out infinite 0.6s;
  -ms-animation: google 1.75s ease-in-out infinite 0.6s;
  -o-animation: google 1.75s ease-in-out infinite 0.6s;
  animation: google 1.75s ease-in-out infinite 0.6s;
}
@-webkit-keyframes google {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(60px, 0, 0);
    -moz-transform: translate3d(60px, 0, 0);
    -ms-transform: translate3d(60px, 0, 0);
    -o-transform: translate3d(60px, 0, 0);
    transform: translate3d(60px, 0, 0);
  }
  30% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  70% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-300px, 0, 0);
    -moz-transform: translate3d(-300px, 0, 0);
    -ms-transform: translate3d(-300px, 0, 0);
    -o-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }
}
@-o-keyframes google {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(60px, 0, 0);
    -moz-transform: translate3d(60px, 0, 0);
    -ms-transform: translate3d(60px, 0, 0);
    -o-transform: translate3d(60px, 0, 0);
    transform: translate3d(60px, 0, 0);
  }
  30% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  70% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-300px, 0, 0);
    -moz-transform: translate3d(-300px, 0, 0);
    -ms-transform: translate3d(-300px, 0, 0);
    -o-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }
}
@keyframes google {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(60px, 0, 0);
    -moz-transform: translate3d(60px, 0, 0);
    -ms-transform: translate3d(60px, 0, 0);
    -o-transform: translate3d(60px, 0, 0);
    transform: translate3d(60px, 0, 0);
  }
  30% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  70% {
    opacity: 1;
    -webkit-transform: translate3d(0, 0, 0);
    -moz-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    -o-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-300px, 0, 0);
    -moz-transform: translate3d(-300px, 0, 0);
    -ms-transform: translate3d(-300px, 0, 0);
    -o-transform: translate3d(-300px, 0, 0);
    transform: translate3d(-300px, 0, 0);
  }
}
@keyframes preload-show-1 {
  from {
    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-1 {
  to {
    transform: rotateZ(60deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-1 {
  5% {
    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  10%, 75% {
    transform: rotateZ(60deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  80%, 100% {
    transform: rotateZ(60deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-show-2 {
  from {
    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-2 {
  to {
    transform: rotateZ(120deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-2 {
  10% {
    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  15%, 70% {
    transform: rotateZ(120deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  75%, 100% {
    transform: rotateZ(120deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-show-3 {
  from {
    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-3 {
  to {
    transform: rotateZ(180deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-3 {
  15% {
    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  20%, 65% {
    transform: rotateZ(180deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  70%, 100% {
    transform: rotateZ(180deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-show-4 {
  from {
    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-4 {
  to {
    transform: rotateZ(240deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-4 {
  20% {
    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  25%, 60% {
    transform: rotateZ(240deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  65%, 100% {
    transform: rotateZ(240deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-show-5 {
  from {
    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-5 {
  to {
    transform: rotateZ(300deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-5 {
  25% {
    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  30%, 55% {
    transform: rotateZ(300deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  60%, 100% {
    transform: rotateZ(300deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-show-6 {
  from {
    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-hide-6 {
  to {
    transform: rotateZ(360deg) rotateY(-90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-cycle-6 {
  30% {
    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
  35%, 50% {
    transform: rotateZ(360deg) rotateY(0) rotateX(0deg);
    border-left-color: #f7484e;
  }
  55%, 100% {
    transform: rotateZ(360deg) rotateY(90deg) rotateX(0deg);
    border-left-color: #9c2f2f;
  }
}
@keyframes preload-flip {
  0% {
    transform: rotateY(0deg) rotateZ(-60deg);
  }
  100% {
    transform: rotateY(360deg) rotateZ(-60deg);
  }
}
body {
  background: #efefef;
}
.preloader {
  position: absolute;
  top: 50%;
  left: 50%;
  font-size: 20px;
  display: block;
  width: 3.75em;
  height: 4.25em;
  margin-left: -1.875em;
  margin-top: -2.125em;
  transform-origin: center center;
  transform: rotateY(180deg) rotateZ(-60deg);
}
.preloader .slice {
  border-top: 1.125em solid transparent;
  border-right: none;
  border-bottom: 1em solid transparent;
  border-left: 1.875em solid #f7484e;
  position: absolute;
  top: 0px;
  left: 50%;
  transform-origin: left bottom;
  border-radius: 3px 3px 0 0;
}
.preloader .slice:nth-child(1) {
  transform: rotateZ(60deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.82s preload-hide-1 both 1;
}
.preloader .slice:nth-child(2) {
  transform: rotateZ(120deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.74s preload-hide-2 both 1;
}
.preloader .slice:nth-child(3) {
  transform: rotateZ(180deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.66s preload-hide-3 both 1;
}
.preloader .slice:nth-child(4) {
  transform: rotateZ(240deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.58s preload-hide-4 both 1;
}
.preloader .slice:nth-child(5) {
  transform: rotateZ(300deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.5s preload-hide-5 both 1;
}
.preloader .slice:nth-child(6) {
  transform: rotateZ(360deg) rotateY(0deg) rotateX(0);
  animation: 0.15s linear 0.42s preload-hide-6 both 1;
}
.preloader.loading {
  animation: 2s preload-flip steps(2) infinite both;
}
.preloader.loading .slice:nth-child(1) {
  transform: rotateZ(60deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-1 linear infinite both;
}
.preloader.loading .slice:nth-child(2) {
  transform: rotateZ(120deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-2 linear infinite both;
}
.preloader.loading .slice:nth-child(3) {
  transform: rotateZ(180deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-3 linear infinite both;
}
.preloader.loading .slice:nth-child(4) {
  transform: rotateZ(240deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-4 linear infinite both;
}
.preloader.loading .slice:nth-child(5) {
  transform: rotateZ(300deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-5 linear infinite both;
}
.preloader.loading .slice:nth-child(6) {
  transform: rotateZ(360deg) rotateY(90deg) rotateX(0);
  animation: 2s preload-cycle-6 linear infinite both;
}

	</style>

<!--===============================================================================================-->
	<!-- <script src="js/main.js"></script> -->

</body>
</html>
