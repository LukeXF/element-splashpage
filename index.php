<html>
<head>
	<title>Elements Technologies LLC</title>
	<meta name=viewport content="width=device-width, initial-scale=1">
	<link rel=stylesheet href="https://raw.github.com/daneden/animate.css/master/animate.css">
	<link rel="icon shortcut" type="image/png" href="assets/img/element.ico">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,300,100' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
	<script src="//code.jquery.com/jquery-1.8.3.min.js"></script>

<?php 
	// Background Randomisation By Luke Brown
	$bg = array(
		'assets/img/1.jpeg',
		'assets/img/2.jpeg',
		'assets/img/3.jpeg',
		'assets/img/4.jpeg',
		'assets/img/5.jpeg',
		);

	// Loads declared links (url is clickable link, icon is font awesome code)
	$links = array(
		array("open-in-newtab" => true,  "URL" => "//twitter.com/Elements__",                 "icon" => "twitter"),
		array("open-in-newtab" => true,  "URL" => "//github.com/ElementsTechnologiesLLC",     "icon" => "github"),
		array("open-in-newtab" => true,  "URL" => "//dev.craftgasm.net",                      "icon" => "hdd-o"),
		array("open-in-newtab" => false, "URL" => "mailto:cam@elmnts.co?subject=Hey there Cam&body=I found you on your website and... ", "icon" => "envelope-o"),
		array("open-in-newtab" => true,  "URL" => "//steamcommunity.com/id/LukeXF/",          "icon" => "steam")
		);

	// Randomizer 
	$i = rand(0, count($bg)-1);  
	$selectedBg = "$bg[$i]";
?>

<style type="text/css">

	body {
		text-align: center;
		overflow: hidden;
		-webkit-touch-callout: none;
		-webkit-user-select: none;
		-khtml-user-select: none;
		-moz-user-select: none;
		-ms-user-select: none;
		user-select: none;
	}

	h1, h2, h3, h4, .designed {

		font-family: 'Roboto Slab', serif;
		font-weight: 100;
		color: white;
	}

	h1 {
		font-size: 80px;
	}

	#landing-content {
		overflow: hidden;
		width: 100%;
		background-position:center;
		background-size: 120% 120%  !important;
		background-repeat: no-repeat;
		height: 100%;
		position: fixed;
	}

	.slider {
		margin-left: auto;
		margin-right: auto;
		overflow: hidden;
		max-width: 1002px;
	}

	.slider img {
		width: 80%;
		padding-left: 10%;
		padding-right: 10%;
		height: auto;
		margin-left: auto;
		margin-right: auto;
	}

	.alignment {
		z-index: 1;
		right: 10vw;
		left: 10vw;
		top: 30%;
		position: absolute;
		-webkit-transform: translateY(-50%);
		-ms-transform: translateY(-50%);
		transform: translateY(-50%);
	}

	.rnd-btn {
	width:25%;
	}

	.rnd-btn-o {
		width: 50px;
		height: 50px;
		border-radius: 50%;
		border: 2px solid #FFFFFF;
		overflow: hidden;
		box-shadow: 0 0 3px gray;
		margin: 5px;
		-webkit-transition: background 150ms ease-in 200ms;
		-moz-transition: background 150ms ease-in 200ms;
		-o-transition: background 150ms ease-in 200ms;
		transition: background 150ms ease-in 200ms;
	}
	.rnd-btn-o:hover {
		background:rgba(48, 88, 142, 0.5);
	}
	.rnd-btn a {
	    display:block;
		float:left;
		width:100%;
		padding-top:50%;
	    padding-bottom:50%;
		line-height:1em;
		margin-top:-0.5em;
	    
		text-align:center;
		color:#e2eaf3;
	    font-family:Verdana;
	    font-size:1.2em;
	    font-weight:bold;
	    text-decoration:none;
	}
	.buttons {
		margin-left: auto;
		margin-right: auto;
		display: -webkit-inline-box;
		margin-right: 79px;
		width: 300px;
	}
	.designed {
		position: fixed;
		right: 0;
		bottom: 0;
		color: rgba(255, 255, 255, 0.30) !important;
		padding: 10px;
		font-weight: 400;
	}
	.designed a {
		color: rgba(255, 255, 255, 1.0) !important;
		font-weight: 700;
		opacity: 0.3;
		transition: opacity 0.35s ease-in-out;
		-moz-transition: opacity 0.35s ease-in-out;
		-webkit-transition: opacity 0.35s ease-in-out;
	}
	.designed a:hover {
		font-weight: 700;
		text-decoration: none;
		opacity: 0.75;
		transition: opacity 0.35s ease-in-out;
		-moz-transition: opacity 0.35s ease-in-out;
		-webkit-transition: opacity 0.35s ease-in-out;
	}
</style>



<script type="text/javascript">


$(document).ready(function(){    
    $('#landing-content').mousemove(function(e){
    var x = -(e.pageX + this.offsetLeft) / 50;
    var y = -(e.pageY + this.offsetTop) / 50;
    $(this).css('background-position', (-125 + x) + 'px ' + (-105 + y) + 'px');
  });    
});
 


$('img').bind('contextmenu', function(e) {
	return false;
});
$('img').on('dragstart', function(event) { 
	event.preventDefault(); 
});
$(document).ready(function() {
	$("*").bind("contextmenu",function(){
		return false;
	}); 
});   
  



	</script>

</head>
<body>
	<div id="landing-content" <?php echo "style='background: linear-gradient(rgba(44, 44, 44, 0.658824), rgba(0, 0, 0, 0.6)) -160.02px -112.04px, url(" . $selectedBg .  ")'"; ?> >
		<div id="parallax_wrapper">
			<div class="plax animated bounceIn alignment container">
				<h1>Elements Technologies LLC</h1>
				<h2>Home of something amazing.</h2>

				<div class="buttons">
					<?php
						foreach($links as $x => $x_value) {
							if ($links[$x]["open-in-newtab"] == true) {
								$newtab = "target='_blank'";
							} else {
								$newtab = "";
							}
							echo "\r\n" . "<div class='rnd-btn'><div class='rnd-btn-o'>" . PHP_EOL;
							echo "\t" . "<a href='" . $links[$x]["URL"] ."'" . $newtab . " class='rnd-btn'>" . PHP_EOL;
							echo "\t\t" . "<i class='fa fa-" . $links[$x]["icon"] . " fa-fw'></i>" . PHP_EOL;
							echo "\t" . "</a>" . PHP_EOL;
							echo "</div></div>" . PHP_EOL;
						};
					?>
				</div>

			</div>
		<div id="bg" data-xrange="10" data-yrange="10" data-invert=true class="plax"></div>
		<div class="designed">Designed by <a href="http://luke.sx" target="_blank">Luke Brown</a></div>
	 </div>
</body>

<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</html>
