<?php
  session_start();
  // echo $_SESSION['login'];
?>
<html style="background: #ededed">
<head>
  <title>Личный кабинет</title>
  <link rel="stylesheet" type="text/css" href="css/main.css" />
  <link rel="stylesheet" type="text/css" href="css/lk.css" />
  <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/animate.min.css">
  <link rel="stylesheet" href="css/normalize.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
</head>
<body style="background: #ededed">
  <nav id="navbar" class="">
    <div class="nav-wrapper">
      <!-- Navbar Logo -->
      <div class="logo">
        <!-- Logo Placeholder for Inlustration -->
        <a href="lk.php" style="font-size: 20px; color: #00B956"><img style="vertical-align: middle" src="images/ts_logo.png" width="85"/>Личный кабинет</a>
      </div>

      <!-- Navbar Links -->
      <ul id="menu">
        <li style="height: 100%; vertical-align: middle">
            <div>
              <img src="images/profile.png" width="23" style="margin-top: 3px; margin-left: 20px; display: inline-block" />
              <div style="display: inline-block; margin-top: 10px">
                <p style="font-size: 1.7em"><?php echo $_SESSION['phone']; ?></p>
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
            <?php echo $_SESSION['phone']; ?>
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
        <div id="bubbles"></div>
        <!-- Button trigger modal -->
<!-- <button style="display: none" type="hidden" id="md" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter"> -->
<!-- </button> --> <a href="number_q.php" id="md"></a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalCenterTitle">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  ...
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary">Save changes</button>
                </div>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vis/4.16.1/vis.min.js"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/148866/velocity.min.js"></script>
  <script>
  var nodes = new vis.DataSet([
  {label: "VK"},
  {label: "ЖКХ"},
  {label: "МЕГАФОН"},
  {label: "ДЕТИ"},
  {label: "МЕГАФОН ТВ"},
  {label: "VK МУЗЫКА"},
  {label: "НАЛОГИ"},
]);
var edges = new vis.DataSet();

var container = document.getElementById('bubbles');
var data = {
  nodes: nodes,
  edges: edges
};

var options = {
  nodes: {borderWidth:0,shape:"circle",color:{background:'#731982', highlight:{background:'#731982', border: '#731982'}},font:{color:'#fff'}},
  physics: {
    stabilization: false,
    minVelocity:  0.04,
    solver: "repulsion",
    repulsion: {
      nodeDistance: 60
    }
  }
};
var network = new vis.Network(container, data, options);

// Events
network.on("click", function(e) {
  if (e.nodes.length) {
    var node = nodes.get(e.nodes[0]);
    // Do something
    // document.getElementById('exampleModalCenterTitle').innerHTML = node.label
    document.getElementById('md').click()
    console.log(node);
    // var actionBtn = $(this),
    //   scaleValue = retrieveScale(actionBtn.next('.cd-modal-bg'));
    //
    // actionBtn.addClass('to-circle');
    // actionBtn.next('.cd-modal-bg').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    //   animateLayer(actionBtn.next('.cd-modal-bg'), scaleValue, true);
    // });
    nodes.update(node);
  }
});

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


      $(document).ready(function($){
    	//trigger the animation - open modal window
    	$('[data-type="modal-trigger"]').on('click', function(){
    		var actionBtn = $(this),
    			scaleValue = retrieveScale(actionBtn.next('.cd-modal-bg'));

    		actionBtn.addClass('to-circle');
    		actionBtn.next('.cd-modal-bg').addClass('is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    			animateLayer(actionBtn.next('.cd-modal-bg'), scaleValue, true);
    		});

    		//if browser doesn't support transitions...
    		if(actionBtn.parents('.no-csstransitions').length > 0 ) animateLayer(actionBtn.next('.cd-modal-bg'), scaleValue, true);
    	});

    	//trigger the animation - close modal window
    	$('.cd-section .cd-modal-close').on('click', function(){
    		closeModal();
    	});
    	$(document).keyup(function(event){
    		if(event.which=='27') closeModal();
    	});

    	$(window).on('resize', function(){
    		//on window resize - update cover layer dimention and position
    		if($('.cd-section.modal-is-visible').length > 0) window.requestAnimationFrame(updateLayer);
    	});

    	function retrieveScale(btn) {
    		var btnRadius = btn.width()/2,
    			left = btn.offset().left + btnRadius,
    			top = btn.offset().top + btnRadius - $(window).scrollTop(),
    			scale = scaleValue(top, left, btnRadius, $(window).height(), $(window).width());

    		btn.css('position', 'fixed').velocity({
    			top: top - btnRadius,
    			left: left - btnRadius,
    			translateX: 0,
    		}, 0);

    		return scale;
    	}

    	function scaleValue( topValue, leftValue, radiusValue, windowW, windowH) {
    		var maxDistHor = ( leftValue > windowW/2) ? leftValue : (windowW - leftValue),
    			maxDistVert = ( topValue > windowH/2) ? topValue : (windowH - topValue);
    		return Math.ceil(Math.sqrt( Math.pow(maxDistHor, 2) + Math.pow(maxDistVert, 2) )/radiusValue);
    	}

    	function animateLayer(layer, scaleVal, bool) {
    		layer.velocity({ scale: scaleVal }, 400, function(){
    			$('body').toggleClass('overflow-hidden', bool);
    			(bool)
    				? layer.parents('.cd-section').addClass('modal-is-visible').end().off('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend')
    				: layer.removeClass('is-visible').removeAttr( 'style' ).siblings('[data-type="modal-trigger"]').removeClass('to-circle');
    		});
    	}

    	function updateLayer() {
    		var layer = $('.cd-section.modal-is-visible').find('.cd-modal-bg'),
    			layerRadius = layer.width()/2,
    			layerTop = layer.siblings('.btn').offset().top + layerRadius - $(window).scrollTop(),
    			layerLeft = layer.siblings('.btn').offset().left + layerRadius,
    			scale = scaleValue(layerTop, layerLeft, layerRadius, $(window).height(), $(window).width());

    		layer.velocity({
    			top: layerTop - layerRadius,
    			left: layerLeft - layerRadius,
    			scale: scale,
    		}, 0);
    	}

    	function closeModal() {
    		var section = $('.cd-section.modal-is-visible');
    		section.removeClass('modal-is-visible').one('webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend', function(){
    			animateLayer(section.find('.cd-modal-bg'), 1, false);
    		});
    		//if browser doesn't support transitions...
    		if(section.parents('.no-csstransitions').length > 0 ) animateLayer(section.find('.cd-modal-bg'), 1, false);
    	}
    });
  </script>
</body>
</html>
