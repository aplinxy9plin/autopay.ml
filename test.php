<script>
var ctx = document.querySelector("canvas").getContext("2d"),
    img = new Image;

img.onload = function() {
  ctx.drawImage(this, -200, -200, 800, 800);
  ctx.drawImage(this, 0, 0);
};

img.src = "http://i.imgur.com/RV2a28T.png";
</script>
<canvas/>
