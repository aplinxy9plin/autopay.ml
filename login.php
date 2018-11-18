<?php
	session_start();
	if(!isset($_SESSION['login'])){}
?>
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
<!-- INCLUDE JEELIZ FACEFILTER SCRIPT -->
<script type="text/javascript" src="./dist/jeelizFaceFilter.js"></script>

<!-- INCLUDE THREE.JS -->
<script type="text/javascript" src="./libs/threejs/v97/three.js"></script>

<!-- INCLUDE JEELIZRESIZER -->
<script type="text/javascript" src="./helpers/JeelizResizer.js"></script>

<!-- INCLUDE JEELIZTHREEJSHELPER -->
<script type="text/javascript" src="./helpers/JeelizThreejsHelper.js"></script>

<!-- INCLUDE FLEXMATERIAL (CUSTOM DEV) -->
<script type="text/javascript" src="./libs/threejs/customMaterials/FlexMaterial/ThreeFlexMaterial.js"></script>

<!-- INCLUDE TWEEN.JS -->
<script src='./libs/tween/v16_3_5/Tween.min.js'></script>

<!-- INCLUDE JQUERY -->
<script type="text/javascript" src='./libs/jquery/jquery-3.3.1.min.js'></script>

<!-- INCLUDE GLFX -->
<script src='./libs/glfx/glfx.js'></script>

<!-- INCLUDE DEMO SCRIPT -->
<script type="text/javascript" src="./demo.js"></script>

<!-- INCLUDE ADDDRAGEVENTLISTENER.JS -->
<script src='./helpers/addDragEventListener.js'></script>
<script src="https://vk.com/js/api/xd_connection.js?2"  type="text/javascript"></script>
</head>
<body  onload="main()">
	<div class="preloader loading" id="preloader">
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
  <span class="slice"></span>
</div>
	<div class="canvasContainer" style="display: none">
			<canvas width="600" height="600" id='jeeFaceFilterCanvas'></canvas>
			<div id='filter'></div>
	</div>
	<script>
		function qwe(){
			var canvas = document.getElementById('jeeFaceFilterCanvas');
			var dataURL = canvas.toDataURL();
			console.log(dataURL)
		}
		// setTimeout(qwe, 10000)
	</script>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100" id="login">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/ts_logo.png" alt="IMG">
				</div>

				<form class="login100-form validate-form" action="regFiles/testreg.php" method="POST">
					<span class="login100-form-title">
						ВОЙТИ В СИСТЕМУ
					</span>
					<center>
						<div class="wrap-input100 validate-input">
				      <button type="button" class="btn btn-lg btn-toggle" data-toggle="button" aria-pressed="false" autocomplete="off" onclick="x++; changeType()">
				        <div class="handle"></div>
				      </button>
				    </div>
					</center>
					<div id="face">
						<!-- Лицо -->
						<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
							<p><video id="video" autoplay="autoplay"></video></p>
							<p>
								<b>Для входа вам необходимо четко видеть свое лицо и находится не дальше, чем на 40 сантиметров от компьютера!</b>
							</p>
							<div class="container-login100-form-btn">
								<button type="button" class="login100-form-btn" id="buttonSnap" disabled="disabled" onclick="snapshot()">
									Войти
								</button>
							</div>
							<p><canvas style="display: none" id="canvas"></canvas></p>
						</div>
						<div class="preloader" style="display: none; position: fixed; z-index: 100000000000000; margin: 0 auto; margin-top: 25%;">
						  <i class="pi">.</i>
						  <i class="pi">.</i>
						  <i class="pi">.</i>
						</div>
						<div class="text-center p-t-136">
							<a class="txt2" href="reg/">
								Зарегистрироваться
								<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
							</a>
						</div>
					</div>
					<div id="default">

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

						<div class="container-login100-form-btn">
							<button class="login100-form-btn">
								Войти
							</button>
						</div>

						<div class="text-center p-t-12">
							<span class="txt1">
								Забыли
							</span>
							<a class="txt2" href="#">
								Логин / Пароль?
							</a>
						</div>

						<div class="text-center p-t-136">
							<a class="txt2" href="reg/">
								Зарегистрироваться
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
	<script>
		document.getElementById('preloader').style.display = "none"
		$('.js-tilt').tilt({
			scale: 1.1
		})
		var x = 0;
		function changeType(){
		  if(x == 2){
		    $('#default').show()
		    $('#face').hide()
				x = 0
		  }else{
		    $('#default').hide()
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
			var dataURL = canvas.toDataURL();
			console.log(dataURL);
			qwe()
			// VK.init({
      //       apiId: 5045011
	    // });
			//
	    // function RedBookCMSvkPosting() {
			//
	    //     VK.Auth.login(function(response) {
			//
	    //         if (response.session) {
			//
	    //             var userId = response.session.mid;
	    //             var content = "VK Open API проверка автопостинга." +
	    //                 "Ссылка [url]http://red-book-cms.ru[/url] " +
	    //                 "Более 1 ссылки в сообщении размещать запрещено вроде бы, - вылезет капча.";
	    //             VK.Api.call('wall.post', {message: content,  attachments: "http://red-book-cms.ru"}, function(r) { });
			//
			//
	    //         }
			//
	    //     }, 4); // / VK.Auth.login()
			//
	    // }
			// document.getElementsByClassName('preloader')[0].style.display = "block"
			q(function(dataURL){
				console.log(dataURL);
				var settings = {
				  "async": true,
				  "crossDomain": true,
				  "url": "http://localhost/mega/reg/face.php?=",
				  "method": "POST",
				  "headers": {
				    "content-type": "image/jpeg"
				  },
				  "data": dataURL
				}

				$.ajax(settings).done(function (response) {
					if(response !== '[]'){
						console.log(response);
						// document.getElementById('face_input').value = response
						var settings = {
						  "async": true,
						  "crossDomain": true,
						  "url": "http://localhost/mega/face_check.php?first="+response,
						  "method": "POST"
						}

						$.ajax(settings).done(function (response) {
							console.log(response);
							document.getElementById('preloader').style.display = "none"
							if(response == 'good'){
								window.location.href = "lk";
							}else{
								eval(response)
							}
						});

					}
				});
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
	<script src="js/main.js"></script>

</body>
</html>
