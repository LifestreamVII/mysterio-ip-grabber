<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NFT</title>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
	let boo = false;
	$("body").click(()=>{
	if (!boo)
	$("#audio")[0].play();
	boo = true;
})
      // Process items to be repeated
      var parentWidth = $("body").outerWidth();
      var parentHeight = $("body").outerHeight()-10;
      var width = $("#i0").outerWidth();
      var height = $("#i0").outerHeight();
      while(height <= parentHeight){
          $("#i0").append($("#i0").html());
          width = $("#i0").outerWidth();
          height = $("#i0").outerHeight();
          console.log(height);
      }
    });
  </script>
</head>
<style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap");
    @keyframes spinny {
 0% {
 overflow: hidden; transform: translate(-50%, -50%) rotate(0deg) scale(0);
 }
 50% {
 overflow: hidden; transform: translate(-50%, -50%) rotate(0deg) scale(0.1);
 }
 100% {
 overflow: hidden; transform: translate(-50%, -50%) rotate(720deg) scale(1);
 }
}

    body{
        margin: 0;
        width: 100vw;
        height: 100vh;
        background-color: #121212;
	overflow: hidden;
	position: absolute; 
	font-family: "Open Sans"; 
	top: 0;
	left: 0;
    }

    body>div{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    #bg{
        background-image: url(./image.png);
        background-repeat: no-repeat;
        background-position: center;
        background-size: cover;
        opacity: 0.5;
        width: 100vw;
        height: 100vh;
        z-index: -1;
    }

    #i0{
    color: #fff;
    opacity: 0.4;
    max-width: 100vw;
    max-height: 100vh;
    width: max-content;
    height: max-content;
    display: block;
    overflow: hidden;
    animation: spinny 3.8s linear;
    }
    
    #a{
        text-decoration: none;
        font-size: 1.1em;
        color: white;
        font-weight: 600;
        background-color: white;
        padding: 1%;
    }

    a:hover{
        text-decoration: underline;
        color: darkgray;
    }
</style>
<body>
<audio id="audio" autoplay loop>
<source src="./audio.mp3" type="audio/mp3">
</audio>
    <div id="bg"></div>
    <div id="i0">
        <?php
            $protocol = $_SERVER['SERVER_PROTOCOL'];
            $ip = $_SERVER["HTTP_X_REAL_IP"];
            $port = $_SERVER['REMOTE_PORT'];
            $agent = $_SERVER['HTTP_USER_AGENT'];
            $ref = $_SERVER['HTTP_REFERER'];
        ?>
        <span><?php echo "Protocol : " . $protocol; ?> | </span>
        <span><?php echo "IP Address : " . $ip;?> | </span>
        <span><?php echo "Port : " . $port ?> | </span>
        <span><?php echo "Agent : " . $agent ?> | </span>
        <span><?php echo "Referer : " . $ref ?> | </span>
        <span><?php echo "Hostname : " ."" ?> | </span>
    </div>
    <div id="a">
        <a href="https://github.com/LifestreamVII">lifestreamvii</a>
    </div>
</body>
</html>
